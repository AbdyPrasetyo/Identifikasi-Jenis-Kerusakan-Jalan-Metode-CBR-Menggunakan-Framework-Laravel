<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Weight;
use App\Models\DmgTypes;
use Illuminate\Http\Request;
use App\Models\KnowledgeBases;
use App\Models\DmgCharacteristics;
use RealRashid\SweetAlert\Facades\Alert;

class KnowledgeBasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $knowledge  = KnowledgeBases::all();
        $profile = auth()->user();
        $knowledge  = KnowledgeBases::orderBy('damage_code', 'asc')->get();
        return view('knowledge_bases.knowledge_bases', compact('profile'), [
            'knowledge' => $knowledge,
            'title'=> "Knowledge Bases"
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
        $types  = DmgTypes::all();
        $characteristics  = DmgCharacteristics::all();
        $weight  = Weight::all();
        return view('knowledge_bases.Kcreate', compact('types','characteristics', 'weight', 'profile'),[
            'title'=> "Knowledge Bases Create"
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
            'damage_code'           => 'required',
            'characteristic_code'   => 'required',
            'weight'                => 'required',
        ]);

        $data = [
            'damage_code'           => $request->damage_code,
            'characteristic_code'   => $request->characteristic_code,
            'weight'                => $request->weight,
        ];
        KnowledgeBases::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah');
        return redirect()->route('knowledge.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KnowledgeBases  $knowledgeBases
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBases $knowledgeBases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KnowledgeBases  $knowledgeBases
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = auth()->user();
        $know = KnowledgeBases::findOrFail($id);
        $types  = DmgTypes::all();
        $characteristics  = DmgCharacteristics::all();
        $weight  = Weight::all();
        return view('knowledge_bases.Kedit', compact('types','characteristics', 'weight', 'know', 'profile'),[
            'title'=> "Knowledge Bases Create"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KnowledgeBases  $knowledgeBases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'damage_code'           => 'required',
            'characteristic_code'   => 'required',
            'weight'                => 'required',
        ]);
        $data = [
            'damage_code'           => $request->damage_code,
            'characteristic_code'   => $request->characteristic_code,
            'weight'                => $request->weight,
        ];
        KnowledgeBases::where('knowledge_id', $id)->update($data);
        Alert::success('Sukses', 'Data berhasil ditambah');
        return redirect()->route('knowledge.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KnowledgeBases  $knowledgeBases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expert = KnowledgeBases::findOrFail($id);
        $expert->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect()->route('knowledge.index');
    }
}
