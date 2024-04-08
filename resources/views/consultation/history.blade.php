<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISPEJKJ  |   {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets2/img/favicon.png" rel="icon">
 <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com" rel="preconnect">
 <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="assets2/vendor/aos/aos.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="assets2/css/main.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- Add these lines in the head section -->
<!-- Add these lines in the head section -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<!-- Bootstrap 5 CSS (you may need to adjust the version based on your project) -->

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap 5 JS (you may need to adjust the version based on your project) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<style>
    .btn-tes{
        background-color: #6777ef;
        color: #ffffff
    }

    .btn-tes:hover {
    background-color: #8491fa;
    text-decoration: none;
    }

    #yourDataTable_wrapper .dataTables_paginate {
        margin-top: 20px;
    }

    #yourDataTable_wrapper .pagination .page-item .page-link {
        color: #6777ef;
    }

    #yourDataTable_wrapper .pagination .page-item .page-link:hover {
        background-color: #8491fa;
        color: #ffffff;
        text-decoration: none;
    }

    #yourDataTable_wrapper .pagination .page-item.active .page-link {
        background-color: #8491fa;
        color: #ffffff;
        border: 1px solid #6777ef;
    }



    #yourDataTable_length .custom-select {
        background-color: #6777ef;
        color: #ffffff;
        border-radius: 5px;
    }

    #yourDataTable_length .custom-select:hover {
        background-color: #8491fa;
        color: #ffffff;
    }

    #yourDataTable_length .custom-select option {
        background-color: #6777ef;
        color: #ffffff;
    }

</style>

<body class="blog-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>SISPEJKJ</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ url('home') }}#beranda" class=" class="{{ ($title === "Home") ?  'active' : '' }}"">Beranda</a></li>
            <li><a href="{{ url('home') }}#tentang">Tentang</a></li>
            <li><a href="{{ url('home') }}#petunjuk">Petunjuk</a></li>
            <li><a href="{{ url('home') }}#team">Team</a></li>
            <li><a href="{{ url('history') }}" class="{{ ($title === "History Identifications") ?  'active' : '' }}">Riwayat</a></li>

          </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn btn-getstarted dropdown-toggle" data-bs-toggle="dropdown">  <i class="bi bi-person-circle p-2"></i>Hi, {{ $profile->username }}</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ url('profile') }}"><i class="bi bi-person"></i> Profile</a></li>
        <li><a class="dropdown-item text-danger" href="#" onclick="confirmLogout()"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
      </ul>


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">

      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1> Halaman Riwayat Hasil Identifikasi Jenis Kerusakan Jalan</h1>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End Page Title -->

    <!-- Blog-details Section - Blog Details Page -->

    <section id="blog-details" class="blog-details mt-0">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row ">




            <article class="article mb-5">
            <div class="card-body">
                @include('sweetalert::alert')


            <table class="table mt-2 mb-2 px-2 table-bordered" id="yourDataTable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Nama Pengguna</th>
                        <th class="text-center">Email</th>

                        <th class="text-center">Inputan Ciri Keruskan</th>
                        <th class="text-center">Hasil Identifikasi</th>
                        {{-- <th class="text-center">Action</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($histor as $h )
                    <tr>
                        <td  class="align-text-top text-center">{{ $loop->iteration }}
                        </td>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->username }}</td>
                        <td>{{ $profile->email }}</td>

                        <td class="align-text-top">
                            <ol>
                                {!! $h->characteristics !!}
                            </ol>
                        </td>
                        <td>
                            {!! $h->damage !!}
                        </td>

                        {{-- <td>
                            <form action="{{ route('history.destroy', $h->historys_id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn" >Delete</button>
                            </form>
                        </td> --}}
                    </tr>

                        @endforeach
                </tbody>
            </table>

          </div>
          </div>
    </section>


        </div>


  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>SISPEJKJ</span>
          </a>
          <p>Folow akun sosial media kami untuk suport dalam pengembangan sistem ini lebih lanjut</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ url('home') }}#beranda">Beranda</a></li>
            <li><a href="{{ url('home') }}#tentang">Tentang</a></li>
            <li><a href="{{ url('home') }}#petunjuk">Petunjuk</a></li>
            <li><a href="{{ url('home') }}#Team">Team</a></li>
            <li><a href="{{ url('history') }}">Riwayat</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>S.A Maulana Street</p>
          <p>Berau, 77312</p>
          <p>East Borneo</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+62 822-3456-7890</span></p>
          <p><strong>Email:</strong> <span>sispejkj@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">R.A.P</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/aos/aos.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

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

<script>
    $(document).ready( function () {
        $('#yourDataTable').DataTable();
    } );
</script>
</body>

</html>



