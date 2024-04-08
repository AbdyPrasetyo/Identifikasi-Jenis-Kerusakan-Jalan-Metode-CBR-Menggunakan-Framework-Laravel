@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Tambah Data</h1>
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
        <form action="{{ route('expert.store') }}" method="POST">
            @csrf
            <div class="form-group col-sm-3">
                <label for="weight">Bobot Pakar:</label>
                <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="Example: 1, 3 dan 5" value="{{ old('weight') }}">
                @error('weight')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary m-3">Save</button>
            <a href="{{ route('expert.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
        </div>
    </div>
</div>
@endsection
