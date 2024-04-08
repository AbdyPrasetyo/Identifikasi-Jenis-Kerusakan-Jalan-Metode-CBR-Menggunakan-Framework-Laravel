@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Indikator Ciri Kerusakan Jalan</h1>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item">
            <a href="#">Indikator Ciri Kerusakan Jalan</a>
        </div>

    </div>


</div>

<div class="section-body">

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

            <a href="{{ route('characteristics.create') }}" class="btn btn-primary">
              Add Data
            </a>
              </div>
    <div class="card-body">
        @include('sweetalert::alert')
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">

                <thead class="text-center">
                    <tr>
                        <th>
                            No.
                        </th>
                        <th width="200px">Kode Indikator</th>
                        <th>Indikator Ciri Kerusakan Jalan</th>

                        <th width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $Characteristics as $C )
                    <tr>
                        <td class="align-text-top">{{ $loop->iteration }}</td>
                        <td class="align-text-top text-center">
                            {{ $C->characteristic_code }}
                        </td>
                        <td class="align-text-top" >
                           {{ $C->damage_characteristic }}
                        </td>

                        <td class="text-center">
                            <a href="{{ route('characteristics.edit', $C->characteristic_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form id="delete-form-{{ $C->characteristic_id }}" action="{{ route('characteristics.destroy', $C->characteristic_id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button"  class="btn btn-sm btn-danger delete-btn" data-id="{{ $C->characteristic_id }}">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>

  </div>




@endsection





@push('js')
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.all.min.js"></script>

<script>
   $(document).on('click', '.delete-btn', function () {
    var characteristic_id = $(this).data('id');
    Swal.fire({
        title: 'Apakah yakin ingin menghapus data ini?',
        text: "Menghapus data ini akan mengakibatkan data tidak dapat dipulihkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the corresponding form
            $('#delete-form-' + characteristic_id).submit();
        }
    });
});
</script>
@endpush
