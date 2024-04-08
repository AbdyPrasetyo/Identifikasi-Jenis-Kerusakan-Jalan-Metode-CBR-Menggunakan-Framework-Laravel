@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Solusi Jenis Kerusakan Jalan</h1>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item active">
            <a href="#">Halaman Solusi</a>
        </div>

    </div>
</div>

<div class="section-body">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>
                <a href="{{ route('types.create') }}" class="btn btn-primary"> Add Solution</a>
              </h4>
            </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped" id="table-1">

                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>Kode  </th>
                        <th>Jenis Kerusakan </th>
                        <th>Definisi</th>
                        <th>Solusi</th>
                        <th>Bentuk Jalan</th>

                        <th width="80px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $Types as $T )
                    <tr>
                        <td class=" align-text-top">{{ $loop->iteration }}</td>
                        <td class=" align-text-top">
                            {{ $T->damage_code }}
                        </td>
                        <td class="align-text-top">
                           {{ $T->damage_types }}
                        </td>
                        <td class="align-text-top">
                           {{ $T->definition }}
                        </td>
                        <td class="align-text-top">
    {{ $T->solutions }}

                        </td>
<td>
    @if ($T->image != null)
    <img  src="{{ asset('img/'. $T->image) }}" height="100px" width=100px/>
    @else
    <img  src="{{ asset('/img/') }}">
    @endif
</td>
                        <td class="align-text-top text-center">
                            <a href="{{ route('types.edit', $T->damage_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form id="delete-form-{{ $T->damage_id }}" action="{{ route('types.destroy', $T->damage_id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button"  class="btn btn-sm btn-danger delete-btn" data-id="{{ $T->damage_id }}">Delete</button>

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
    var damageId = $(this).data('id');
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
            $('#delete-form-' + damageId).submit();
        }
    });
});
</script>
@endpush
