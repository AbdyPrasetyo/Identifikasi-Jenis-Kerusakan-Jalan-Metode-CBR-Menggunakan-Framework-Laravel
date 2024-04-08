<?php

namespace App\Http\Controllers;
use auth;
use App\Models\Tmpcha;
use App\Models\Tmptyp;
use Illuminate\Http\Request;
use App\Models\DmgCharacteristics;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class IdentificationController extends Controller
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
      return view('consultation.consul', compact('Characteristics', 'profile'),
    [
        'title' => 'Identifications',
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tmpcha::truncate(); //reset table temp characteristics
        $cirinya = $request->input('cirinya'); //request form and insert inputs
        foreach ($cirinya as $value) {
            Tmpcha::create([
                'characteristic_code' => $value,
                'weight'              => 0,
            ]);
        }

        DB::table('tmp_types')->truncate(); // reset table temp types
        $query_jenis = DB::table('knowledge_bases')  // get data knowledge bases
                    ->select('damage_code')
                    ->groupBy('damage_code')
                    ->get();

        $Similarity = 0;
        foreach ($query_jenis as $row_jenis) {
            $kd_jen     = $row_jenis->damage_code;
            // get code damage in table relations
            $query_ciri = DB::table('knowledge_bases')
                        ->where('damage_code', $kd_jen)
                        ->get();

            $var1        = 0;
            $var2        = 0;
            $Nilai_bawah = 0;

            foreach ($query_ciri as $row_ciri) {
                // get characteristics code in table relations
                $kode_gejala_relasi = $row_ciri->characteristic_code;
                $bobotRelasi        = $row_ciri->weight;


                // search data in table tmp_characteristics and compare
                $query_tmp_ciri = DB::table('tmp_characteristics')
                                ->where('characteristic_code', $kode_gejala_relasi)
                                ->get();
                $adadata  = $query_tmp_ciri->count();
                if ($adadata !== 0) {
                    $bobotNilai = $bobotRelasi * 1;
                    $HasilKaliSatu;
                    $var1       = $var1 + $bobotNilai;
                } else {
                    $bobotNilai = $bobotRelasi * 0;
                    $var2       = $var2 + $bobotNilai;
                }

                $Nilai_tmp_ciri    = $var1 + $var2;
                $Nilai_bawah       = $Nilai_bawah + $bobotRelasi;
                $Nilai_Pembilang   = $Nilai_tmp_ciri;
                $Nilai_Penyebut    = $Nilai_bawah;
                //generate Similarity values ​​by dividing $Nilai_Pembilang/$Nilai_Penyebut
                $Similarity        = $Nilai_Pembilang / $Nilai_Penyebut;
            }
            // insert data to table tmp_types
            $query_tmp_jenis  = Tmptyp::create([
                'damage_code' => $kd_jen,
                'value'       => $Similarity,
            ]);
        }
        // process call data indentify
        $query_ciri_input = DB::table('tmp_characteristics')
                            ->join('dmg_characteristics', 'tmp_characteristics.characteristic_code', '=', 'dmg_characteristics.characteristic_code')
                            ->select('dmg_characteristics.damage_characteristic')
                            ->get();

        $query_nilai      = DB::table('tmp_types')
                            ->select(DB::raw('SUM(value) as valueSum'))
                            ->first();

        $nilaiTotal        = $query_nilai->valueSum;

        $query_sum_tmp     = DB::table('tmp_types')
                            ->where('value', '!=', '0')
                            ->orderBy('value', 'desc')
                            ->take(2)
                            ->get();

        $identificationResults = [];

        foreach ($query_sum_tmp as $row_sumtmp) {
            $nilai        = $row_sumtmp->value;
            $nilai_persen = $nilai * 100;
            $persen       = substr($nilai_persen, 0, 5);
            $kd_jen2      = $row_sumtmp->damage_code;

            $query_jenisnya = DB::table('dmg_types')
                                ->where('damage_code', '=', $kd_jen2)
                                ->get();

        foreach ($query_jenisnya as $row_jenisnya) {
            if ($persen <= 100 || $persen >= 70) {
                $identificationResults[] = [
                    'jenisKerusakan' => $row_jenisnya->damage_types,
                    'persentase'     => $persen,
                    'definition'     => $row_jenisnya->definition,
                    'solutions'      => $row_jenisnya->solutions,
                    'image'          => $row_jenisnya->image,
                ];
            }
        }
    }
    $profile = auth()->user();
    Alert::success('Sukses', 'Hasil identifikasi jenis kerusakan jalan sudah keluar');
    return view('consultation.result', [
        'ciriInput' => $query_ciri_input,
        'results'   => $identificationResults,
        'title' => 'Result',
        'profile' => $profile,
    ]);

        // return view('consultation.values');
    }



/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
