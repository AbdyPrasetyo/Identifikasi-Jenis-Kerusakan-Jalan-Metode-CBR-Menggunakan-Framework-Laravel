
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; {{ $title }} &mdash; SISPEJKJ</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">SISPEJKJ</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
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

      <nav class="navbar navbar-secondary navbar-expand-lg">
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
                </li>
              </ul>
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


    </div>

      <div class="main-content">
      <!-- Main Content -->


      <style>
        .carousel-caption {
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .carousel-item img {
          filter: blur(2px) brightness(0.3);
        }

      </style>

      <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" style="margin-top: -30px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/Longitudinal.jpg" alt="First slide" height="550">
            <div class="carousel-caption ">
                <h1 style="margin-top: -350px;" class="section-title">Selamat Datang Di SISPEJKJ, {{ $profile->name }}</h1>
                <p>Sistem Pakar Identifikasi Jenis Kerusakan Jalan adalah Solusi untuk mengetahui jenis kerusakan jalan pada perkerasan lentur</p>
              </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption ">
                <h1 style="margin-top: -350px;" class="section-title">Selamat Datang Di SISPEJKJ, {{ $profile->name }}</h1>
                <p>Sistem Pakar Identifikasi Jenis Kerusakan Jalan adalah Solusi untuk mengetahui jenis kerusakan jalan pada perkerasan lentur</p>
              </div>
            <img class="d-block w-100" src="img/Block.jfif" alt="Second slide" height="550">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/unsplash/jalan2.jpg" alt="Third slide" height="550">
            <div class="carousel-caption ">
                <h1 style="margin-top: -350px;" class="section-title">Selamat Datang Di SISPEJKJ, {{ $profile->name }}</h1>
                <p>Sistem Pakar Identifikasi Jenis Kerusakan Jalan adalah Solusi untuk mengetahui jenis kerusakan jalan pada perkerasan lentur</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
         </div>

            <div class="section-body">
                <p class="section-lead"></p>
                <div class="card">
                    <div class="card-header">
                    <h4></h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="container">
                        <div class="col-12">
                            <h1>Selamat Datang di Sistem Pakar Identifikasi Jenis Kerusakan Jalan</h1>
                            <p>
                                Apakah Anda sering menghadapi jalan rusak? Bingung mengenali jenis kerusakan yang terjadi? Kami di sini untuk membantu!
                            </p>
                            <p>
                                Sistem Pakar Identifikasi Jenis Kerusakan Jalan adalah solusi pintar yang dirancang untuk membantu Anda mengidentifikasi dan memahami berbagai kerusakan jalan yang mungkin terjadi. Dengan menggunakan teknologi kecerdasan buatan, kami dapat memberikan rekomendasi berdasarkan Indikator ciri kerusakan jalan yang Anda amati.
                            </p>
                            <a href="{{ url('about') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                  </div>

              </div>
              </div>
            </div>


            <section class="section">


{{-- batas --}}

<div class="container">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/news/depeloper2.jpg') }}" alt="Profile Image" class="rounded-circle" width="150">
                                    <h5 class="mt-2">Yumarlin MZ, S.Kom., M.Pd., M.Kom</h5>
                                    <p class="text-muted">Artificial Inteligence</p>
                                    <p><b>Dosen Pembimbing 1</b></p>
                                </div>
                                <p>
                                    Deskripsi singkat tentang Tim 1 dan peran mereka dalam pengembangan sistem pakar identifikasi jenis kerusakan jalan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/news/depeloper1.jpg') }}" alt="Profile Image" class="rounded-circle" width="150">
                                    <h5 class="mt-2">Reza Abdy Prasetyo</h5>
                                    <p class="text-muted">FullStack  Web Development</p><br>
                                    <p><b>Mahasiswa (19330017)</b></p>
                                </div>
                                <p>
                                    Deskripsi singkat tentang Tim 2 dan peran mereka dalam pengembangan sistem pakar identifikasi jenis kerusakan jalan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/news/developer3.jpg') }}" alt="Profile Image" class="rounded-circle" width="150">
                                    <h5 class="mt-2">Jemmy Edwin Bororing, S.Kom., M.Eng.</h5>
                                    <p class="text-muted">Enterprise Information System

                                    </p>
                                    <p><b>Dosen Pembimbing 2</b></p>
                                </div>
                                <p>
                                    Deskripsi singkat tentang Tim 3 dan peran mereka dalam pengembangan sistem pakar identifikasi jenis kerusakan jalan.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
{{-- batas --}}

            </div>
      </div>
</div>
      <footer class="main-footer">
        <div class="footer-center text-center">
          Copyright &copy; 2023 <div class="bullet"></div>R.A.P</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
