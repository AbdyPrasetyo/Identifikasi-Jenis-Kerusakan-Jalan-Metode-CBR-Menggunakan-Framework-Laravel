@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Perubahan Data</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <h4>
                        <!-- Button trigger modal -->
                        Form Perubahan Data
                    </h4>
                </div>



                <div class="card-body">

                    <form action="{{ route('types.update', $damage->damage_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-sm-3">
                            <label for="damage_code">Kode Kerusakan:</label>
                            <input type="text" name="damage_code"
                                class="form-control @error('damage_code') is-invalid @enderror"
                                placeholder="Example: B01" value="{{ $damage->damage_code }}" readonly>
                            @error('damage_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="damage_types">Jenis Kerusakan: </label>
                            <input type="text" name="damage_types"
                                class="form-control @error('damage_types') is-invalid @enderror"
                                placeholder="Example: Aligator Cracking" value="{{ $damage->damage_types }}">
                            @error('damage_types')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group col">
                            <label for="definition">Definisi</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('definition') is-invalid @enderror"
                                    name="definition" placeholder="Leave a comment here" id="floatingTextarea1"
                                    style="height: 150px"> {{ $damage->definition }} </textarea>
                                @error('definition')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group col">
                            <label>Solusi</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('solutions') is-invalid @enderror" name="solutions"
                                    placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $damage->solutions }}
            </textarea>
                                @error('solutions')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>





                        <button type="submit" class="btn btn-primary m-3">Update</button>
                        <a href="{{ route('types.index') }}" class="btn btn-secondary">cancel</a>

                    </form>
                </div>
            </div>
        </div>
        @endsection
