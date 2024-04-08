<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Weight;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = auth()->user();
        $expert  = Weight::all();
        return view('expert_weights.expert_weights', compact('profile'), [
            'expert' => $expert,
            'title'=> "Expert Weight"
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
        return view('expert_weights.Ecreate', compact('profile'), [
            'title' => "Expert Weight Create",

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
            'weight'     => 'required'
        ]);

        $data = [
            'weight'     => $request->weight,
        ];
        Weight::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect()->route('expert.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $weight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = auth()->user();
        $weight = Weight::findOrFail($id);
        return view('expert_weights.Eedit', compact('weight', 'profile'),[
                    'title' => "Expert Weight Update"
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'weight'   => 'required',
        ]);

        $data = [
            'weight'   => $request->weight,
        ];

        Weight::where('expert_id', $id)->update($data);
        Alert::success('Sukses', 'Data berhasil perbarui');
        return redirect()->route('expert.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expert = Weight::findOrFail($id);
        $expert->delete();
        Alert::info('Sukses', 'Data berhasil dihapus');
        return redirect()->route('expert.index');
    }
}
