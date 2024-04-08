@extends('front.main')
@section('content')
<div class="section-header">
    <h1>Page {{ $title }}</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item Active"><a href="#">{{ $title }}</a></div>
    </div>
  </div>
<section class="section px-4">
    <div class="section-body">
        @include('sweetalert::alert')
      <h2 class="section-title">Hi, {{ $profile->username }}!</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">

                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">History Identification</div>
                  <div class="profile-widget-item-value">{{ $history }}</div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Tanggal Bergabung</div>
                    <div class="profile-widget-item-value">{{ $profile->created_at->format('Y-m-d')  }}</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">{{ $profile->name }}</div>
              <h6>Bio</h6>
             <p>{!! $profile->bio !!}</p>
            </div>
            <div class="card-footer text-center">
              <div class="font-weight-bold mb-2"></div>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="POST" action="{{ route('profile.update', $profile->id) }}">
                @csrf
                @method('PUT')
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Username</label>
                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $profile->username) }}" required autofocus>
                      @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $profile->name) }}" required autofocus>
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $profile->email) }}" required>
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>New Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror

                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Confirm New Password</label>
                      <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">

                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea class="form-control summernote-simple" name="bio">{{ old('bio', $profile->bio) }}</textarea>
                    </div>
                  </div>


              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"> Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>






@endsection
