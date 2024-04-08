<?php

namespace App\Http\Controllers;

use auth;
use App\Models\History;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->id();
        $profile = auth()->user();
        $histor   = History::all()->where('users_id', $user);
        return view('consultation.history', [
            'title'=> "History Identifications",
            'histor' => $histor,
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
        $users_id = auth()->user()->id;
        $validatedData = $request->validate([
            'characteristics' => 'required',
            'damage' => 'required',
        ]);
        $history = History::create([
            'users_id' => $users_id,
            'characteristics' => $validatedData['characteristics'],
            'damage' => $validatedData['damage'],
        ]);
        Alert::success('Sukses', 'History Identifikasi Berhasil  disimpan');
        return redirect()->route('history.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $his = History::findOrFail($id);

        // Tampilkan pesan konfirmasi SweetAlert2
        // Alert::question('Konfirmasi', 'Anda yakin ingin menghapus data ini?', [
        //     'confirmButtonText' => 'Ya',
        //     'cancelButtonText' => 'Tidak',
        //     'showCancelButton' => true,
        //     'reverseButtons' => true,
        // ])->showConfirmButton()->showCancelButton()->reverseButtons()->toToast();

        // // Tampilkan toast setelah pengguna menekan tombol konfirmasi
        // Toastr::confirmButton()->showCancelButton()->reverseButtons()->then(function ($result) use ($his) {
        //     if ($result) {
            //         Alert::success('Sukses', 'Data berhasil dihapus')->toastSuccess()->autoClose(3000);
            //     } else {
                //         Alert::info('Batal', 'Data tidak jadi dihapus')->toastInfo()->autoClose(3000);
                //     }
                // });
        $his->delete();
        Alert::info('Sukses', 'Data berhasil dihapus');

        return  redirect()->back();


    }


}
