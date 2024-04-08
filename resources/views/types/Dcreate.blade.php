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

                    <h4>
                        <!-- Button trigger modal -->
                        Form Tambah Data
                    </h4>
                </div>



                <div class="card-body">
                    <form action="{{ route('types.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-sm-3">
                            <label for="damage_code">Kode Kerusakan:</label>
                            <input type="text" name="damage_code"
                                class="form-control @error('damage_code') is-invalid @enderror"
                                placeholder="Example: B01" value="{{ old('damage_code') }}">
                            @error('damage_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="damage_types">Jenis Kerusakan </label>
                            <input type="text" name="damage_types"
                                class="form-control @error('damage_types') is-invalid @enderror"
                                placeholder="Example: Aligator Cracking" value="{{ old('damage_types') }}">
                            @error('damage_types')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group col">
                            <label for="definition">Definisi</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('definition') is-invalid @enderror"
                                    name="definition"
                                    style="height: 150px"> {{ old('definition') }} </textarea>
                                    @error('definition')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                                </div>

                        </div>

                        <div class="form-group col">
                            <label>Solusi</label>
                            <div class="form-floating">
                                <textarea class="form-control @error('solutions') is-invalid @enderror" name="solutions"
                                 style="height:150px">{{ old('solutions') }}
                                </textarea>
                                @error('solutions')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>

                        <div class="form-group col">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" >
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        {{-- <div class="form-group">
                            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">

                              <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" id="image-upload"  name="image" />

                              </div>
                            </div>
                          </div> --}}

                        <button type="submit" class="btn btn-primary m-3">Save</button>
                        <a href="{{ route('types.index') }}" class="btn btn-secondary">cancel</a>
                    </form>
                </div>
            </div>
        </div>
        @endsection

@push('summer')
<script type="text/javascript">

$("select").selectric();
$.uploadPreview({
  input_field: "#image-upload",   // Default: .image-upload
  preview_box: "#image-preview",  // Default: .image-preview
  label_field: "#image-label",    // Default: .image-label
  label_default: "Choose File",   // Default: Choose File
  label_selected: "Change File",  // Default: Change File
  no_label: false,                // Default: false
  success_callback: null          // Default: null
});
$(".inputtags").tagsinput('items');

</script>
@endpush
