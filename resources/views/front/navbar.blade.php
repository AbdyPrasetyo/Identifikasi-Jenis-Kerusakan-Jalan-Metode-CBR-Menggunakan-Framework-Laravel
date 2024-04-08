
 <body class="layout-3">
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
    @include('sweetalert::alert')
 <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar ">
        <a href="#" class="navbar-brand sidebar-gone-hide">SISPEJKJ</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav" id="language-selector">
            <li class="nav-item {{ ($title === "Home") ?  'active' : '' }}"><a href="{{ url('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item {{ ($title === "About") ?  'active' : '' }}"><a href="{{ url('about') }}" class="nav-link">About</a></li>
            <li class="nav-item {{ ($title === "Team") ?  'active' : '' }}"><a href="{{ url('team') }}" class="nav-link">Team Develop</a></li>
          </ul>
        </div>

        <ul class="navbar-nav navbar-right ml-auto">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ $profile->username }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ url('profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>

              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-md">
        <div class="container">
          <ul class="navbar-nav">

            <li class="nav-item {{ ($title === "Application Instructions") ?  'active' : '' }}">
              <a href="{{ url('instructions') }}" class="nav-link"><i class="fas fa-fire"></i><span>Application instructions</span></a>
            </li>
            <li class="nav-item {{ ($title === "Identifications") ?  'active' : '' }}">
              <a href="{{ url('sispejkj') }}" class="nav-link"><i class="fas fa-brain"></i><span>Identifications</span></a>
            </li>
            <li class="nav-item {{ ($title === "History Identifications") ?  'active' : '' }}">
              <a href="{{ url('history') }}" class="nav-link"><i class="fas fa-history"></i><span>History Identifications</span></a>
            </li>

          </ul>
        </div>
      </nav>

      <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @include('sweetalert::alert')

      <script>
          function confirmLogout() {
              Swal.fire({
                  icon: 'warning',
                  title: 'Konfirmasi Logout',
                  text: 'Apakah Anda yakin ingin keluar?',
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  confirmButtonText: 'Logout',
                  cancelButtonText: 'Batal'
              }).then((result) => {
                  if (result.isConfirmed) {
                      window.location.href = "{{ url('/logout') }}";
                  }
              });
          }
      </script>
