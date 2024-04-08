@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Basis Pengetahuan</h1>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item">
            <a href="#">Basis Pengetahuan</a>
        </div>

    </div>


</div>

<div class="section-body">

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

            <a href="{{ route('knowledge.create') }}" class="btn btn-lg btn-primary">
              Add Data
            </a>
              </div>
    <div class="card-body">
        @include('sweetalert::alert')
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">

                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>Kode Kerusakan</th>
                        <th>Kode Ciri Kerusakan</th>
                        <th>Bobot Pakar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $knowledge as $k )
                    <tr>
                        <td class="align-text-top">{{ $loop->iteration }}</td>
                        <td class="align-text-top">
                            {{ $k->damage_code }}
                        </td>
                        <td class="align-text-top">
                           {{ $k->characteristic_code }}
                        </td>
                        <td class="align-text-top">
                           {{ $k->weight }}
                        </td>

                        <td>
                            <a href="{{ route('knowledge.edit', $k->knowledge_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('knowledge.destroy', $k->knowledge_id) }}" id="delete-form-{{ $k->knowledge_id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button"  class="btn btn-sm btn-danger delete-btn" data-id="{{ $k->knowledge_id }}">Delete</button>
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
    var knowledge_id = $(this).data('id');
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
            $('#delete-form-' + knowledge_id).submit();
        }
    });
});
</script>
@endpush
