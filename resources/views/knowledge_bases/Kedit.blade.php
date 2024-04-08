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
            <form action="{{ route('knowledge.update', $know->knowledge_id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Kode Kerusakan</label>
                    <select class="form-control select2  @error('damage_code') is-invalid @enderror" name="damage_code">

                        @foreach ($types as $t )
                        <option value="{{ $t->damage_code }}" @if ($know->damage_code == $t->damage_code)
                            @selected(true)
                        @endif>({{ $t->damage_code }}) {{ $t->damage_types }}</option>
                        @endforeach
                    </select>
                    @error('damage_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Kode Indikator</label>
                    <select class="form-control select2 @error('characteristic_code') is-invalid @enderror"  name="characteristic_code">
                        @foreach ($characteristics as $c)
                        <option value="{{ $c->characteristic_code }}" @if ($know->characteristic_code == $c->characteristic_code)
                            @selected(true)
                        @endif>({{ $c->characteristic_code }})
                            {{ $c->damage_characteristic }}</option>
                        @endforeach
                    </select>
                    @error('characteristic_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Bobot Pakar</label>
                    <select class="form-control select2 @error('weight') is-invalid @enderror"  name="weight">
                        @foreach ($weight as $w )
                        <option value="{{ $w->weight }}" @if ($know->weight == $w->weight)
                            @selected(true)
                        @endif>{{ $w->weight }}</option>
                        @endforeach
                    </select>
                    @error('weight')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary m-3">Update</button>
                <a href="{{ route('knowledge.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
