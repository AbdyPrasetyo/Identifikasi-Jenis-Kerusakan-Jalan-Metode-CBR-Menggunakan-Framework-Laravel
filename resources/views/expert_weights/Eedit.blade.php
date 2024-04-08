@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Perubahan Data</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

                <h4><!-- Button trigger modal -->
                    Form Perubahan Data
            </h4>
            </div>



        <div class="card-body">

<form action="{{ route('expert.update', $weight->expert_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group col-sm-3">
        <label for="characteristic_code">Bobot Pakar:</label>
        <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror"  value="{{ $weight->weight }}">
        @error('characteristic_code')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary m-3">Update</button>
    <a href="{{ route('expert.index') }}" class="btn btn-secondary">Cancel</a>
</form>
        </div>
    </div>
</div>
@endsection
