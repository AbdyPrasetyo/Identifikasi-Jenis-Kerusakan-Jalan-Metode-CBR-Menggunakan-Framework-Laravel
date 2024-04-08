@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Bobot Pakar</h1>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item">
            <a href="#">Bobot Pakar</a>
        </div>

    </div>


</div>

<div class="section-body">

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

            <a href="{{ route('expert.create') }}" class="btn btn-primary">
              Add Data
            </a>
              </div>
    <div class="card-body">
        @include('sweetalert::alert')
        <div class="table-responsive">
            <table class="table table-striped text-center" id="table-1">

                <thead>
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>Bobot Pakar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $expert as $e )
                    <tr>
                        <td class="align-text-top">{{ $loop->iteration }}</td>
                        <td class="align-text-top">
                            {{ $e->weight }}
                        </td>

                        <td>
                            <a href="{{ route('expert.edit', $e->expert_id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('expert.destroy', $e->expert_id) }}" id="delete-form-{{ $e->expert_id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button"  class="btn btn-sm btn-danger delete-btn" data-id="{{ $e->expert_id }}">Delete</button>
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
    var expert_id = $(this).data('id');
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
            $('#delete-form-' + expert_id).submit();
        }
    });
});
</script>
@endpush
