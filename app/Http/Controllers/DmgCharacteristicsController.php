<?php

namespace App\Http\Controllers;
use auth;
use Illuminate\Http\Request;
use App\Models\DmgCharacteristics;
use RealRashid\SweetAlert\Facades\Alert;

class DmgCharacteristicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = auth()->user();
        $Characteristics   = DmgCharacteristics::all();
        return view('characteristic.characteristic', [
            'Characteristics' => $Characteristics,
            'title' => "Characteristics Damage",
            'profile' => $profile,
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
        return view('characteristic.Ccreate',[
            'title' => "Characteristics Create",
            'profile' => $profile,

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
            'characteristic_code'   => 'required|unique:dmg_characteristics',
            'damage_characteristic' => 'required'
        ]);

        $data = [
            'characteristic_code'   => $request->characteristic_code,
            'damage_characteristic' => $request->damage_characteristic,
        ];

        DmgCharacteristics::create($data);
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect()->route('characteristics.index');


        // $characteristic = new DmgCharacteristic;
        // $characteristic->characteristic_code = $request->characteristic_code;
        // $characteristic->damage_characteristic = $request->damage_characteristic;
        // $characteristic->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DmgCharacteristics  $dmgCharacteristics
     * @return \Illuminate\Http\Response
     */
    public function show(DmgCharacteristics $dmgCharacteristics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DmgCharacteristics  $dmgCharacteristics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = auth()->user();
        $characteristic = DmgCharacteristics::findOrFail($id);
        return view('characteristic.Cedit', compact('characteristic', 'profile'),[
                    'title' => "Characteristics Update"
                ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DmgCharacteristics  $dmgCharacteristics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'characteristic_code'   => 'required',
            'damage_characteristic' => 'required'
        ]);
        $data = [
            'characteristic_code'   => $request->characteristic_code,
            'damage_characteristic' => $request->damage_characteristic,
        ];

        DmgCharacteristics::where('characteristic_id', $id)->update($data);
        Alert::success('Sukses', 'Data berhasil perbarui');
        return redirect()->route('characteristics.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DmgCharacteristics  $dmgCharacteristics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $characteristic = DmgCharacteristics::findOrFail($id);
        $characteristic->delete();
        Alert::info('Sukses', 'Data berhasil dihapus');
        return redirect()->route('characteristics.index');

    }
}
