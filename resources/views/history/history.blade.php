@extends('layouts.modul')
@section('content')
<div class="section-header">
    <h1>Halaman Riwayat Identifikasi </h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">
            <a href="#">Riwayat Identifikasi</a>
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
                        <th width="50" class="">Id Pengguna</th>
                        <th class="text-center">Identitas Pengguna</th>
                        <th class="text-center">Nama Pengguna</th>
                        <th class="text-center">Email</th>
                        <th width=350>Inputan Indikator</th>
                        <th>Hasil</th>
                        {{-- <th width="50">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $histor as $h )
                    <tr>
                        <td class="align-text-top">{{ $loop->iteration }}</td>

                        <td class="align-text-top ">
                            {{ $h->users_id }}
                        </td>
                        @if ($h->user)
                        {{-- Access user information if the relationship exists --}}
                        <td>{{ $h->user->name }}</td>
                        <td>{{ $h->user->username }}</td>
                        <td>{{ $h->user->email }}</td>

                    @endif
                        {{-- <td class="align-text-top">{{ $profile->username }}</td> --}}
                        <td class="align-text-top">
                            <ol>

                                {!! $h->characteristics !!}
                            </ol>
                        </td>
                        <td class="align-text-top">
                           {!! $h->damage !!}
                        </td>

                        {{-- <td>
                            <form action="{{ route('historys.destroy', $h->historys_id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>

  </div>




@endsection




