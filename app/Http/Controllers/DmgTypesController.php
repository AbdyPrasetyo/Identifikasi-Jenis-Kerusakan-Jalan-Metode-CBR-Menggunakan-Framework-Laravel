<?php

namespace App\Http\Controllers;
use auth;
use App\Models\DmgTypes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DmgTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = auth()->user();
        $Types  = DmgTypes::all();
        return view('types.damage_type', compact('profile'), [
            'Types' => $Types,
            'title'=> "Types Damage"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = auth()->user();
        return view('types.Dcreate',compact('profile'),[
            'title' => "Types Damage Create",

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'damage_code'   => 'required|unique:dmg_types',
            'damage_types'  => 'required',
            'definition'    => 'required',
            'solutions'     => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'damage_code'   => $request->damage_code,
            'damage_types'  => $request->damage_types,
            'definition'    => $request->definition,
            'solutions'     => $request->solutions

        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        DmgTypes::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect()->route('types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DmgTypes  $dmgTypes
     * @return \Illuminate\Http\Response
     */
    public function show(DmgTypes $dmgTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DmgTypes  $dmgTypes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = auth()->user();

        $damage = DmgTypes::findOrFail($id);
        return view('types.Dedit', compact('damage', 'profile'),[
                    'title' => "Damage Types Update"
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DmgTypes  $dmgTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'damage_code'   => 'required',
            'damage_types'  => 'required',
            'definition'    => 'required',
            'solutions'     => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = [
            'damage_code'   => $request->damage_code,
            'damage_types'  => $request->damage_types,
            'definition'    => $request->definition,
            'solutions'     => $request->solutions

        ];

        $dmgType = DmgTypes::find($id);

        if ($image = $request->file('image')) {
            // Delete the previous image if it exists
            if ($dmgType->image) {
                $previousImagePath = public_path('img/' . $dmgType->image);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }

            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = $profileImage;
        }

        $dmgType->update($data);

        Alert::success('Sukses', 'Data berhasil perbarui');
        return redirect()->route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DmgTypes  $dmgTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Types = DmgTypes::findOrFail($id);
        if ($Types->image) {
            // Delete the image file from storage
            $imagePath = public_path('img/' . $Types->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $Types->delete();
        Alert::info('Sukses', 'Data berhasil dihapus');
        return redirect()->route('types.index');
    }
}
