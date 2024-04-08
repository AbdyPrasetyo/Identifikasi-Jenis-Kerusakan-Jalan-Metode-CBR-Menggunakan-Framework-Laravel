@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Tambah Data</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

                <h4><!-- Button trigger modal -->
                    Form Tambah Data
            </h4>
            </div>



        <div class="card-body">
        <form action="{{ route('characteristics.store') }}" method="POST">
            @csrf
            <div class="form-group col-sm-3">
                <label for="characteristic_code">Kode Indikator:</label>
                <input type="text" name="characteristic_code" class="form-control @error('characteristic_code') is-invalid @enderror" placeholder="Example: A01" value="{{ old('characteristic_code') }}">
                @error('characteristic_code')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror

            </div>
            <div class="form-group col">
                <label for="damage_characteristic">Indikator Ciri Kerusakan:</label>
                <input type="text" name="damage_characteristic" class="form-control @error('damage_characteristic') is-invalid @enderror" placeholder="Example: lebar celah > 3 cm" value="{{ old('damage_characteristic') }}">
                @error('damage_characteristic')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary m-3">Save</button>
            <a href="{{ route('characteristics.index') }}" class="btn btn-secondary">Back</a>
        </form>
        </div>
    </div>
</div>
@endsection
