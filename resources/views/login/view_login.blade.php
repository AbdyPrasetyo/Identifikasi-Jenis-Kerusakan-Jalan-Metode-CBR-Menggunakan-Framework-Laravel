@include('front.header')

<div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Sign In</h4></div>



        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">


                    @foreach ($errors->all() as $error)
                    <p class="text-center">

                        {{ $error }}
                    </p>
                    @endforeach

            </div>
        @endif


              <div class="card-body">
                <form method="POST" action="{{ url('login/proses') }}">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email')
                    is-invalid
                @enderror" name="email" tabindex="1"  autofocus>




                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control  @error('password')
                    is-invalid
                    @enderror" name="password" tabindex="2" >

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}

                </div>
            @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                </div>
            </form>


              </div>
              <div class="mb-4 text-muted text-center">
                Don't have an account? <a href="{{ url('register') }}">Sign Up</a>
              </div>
            </div>

