@extends('layouts.modul')
@section('content')
@push('styles')
    <!-- SweetAlert CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
@endpush

@push('scripts')
    <!-- SweetAlert JS file -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
@endpush
<div class="section-header">
    <h1>Halaman Data Pengguna</h1>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item">
            <a href="#">Data Pengguna</a>
        </div>

    </div>
</div>

<div class="section-body">

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">


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
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Bergabung</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $user as $u )
                    <tr>
                        <td class="align-text-top">{{ $loop->iteration }}</td>
                        <td class="align-text-top">
                            {{ $u->username }}
                        </td>
                        <td class="align-text-top">
                            {{ $u->name }}
                        </td>
                        <td class="align-text-top">
                           {{ $u->email }}
                        </td>
                        <td class="align-text-top">
                           {{ $u->created_at->format('Y-m-d') }}
                        </td>

                        <td>
                            <form  action="{{ route('users.destroy', $u->id) }}" method="POST"  id="delete-form-{{ $u->id }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button"  class="btn btn-sm btn-danger delete-btn" data-id="{{ $u->id }}">Delete</button>
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
      var id = $(this).data('id');
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
              $('#delete-form-' + id).submit();
          }
      });
  });
  </script>
  @endpush

