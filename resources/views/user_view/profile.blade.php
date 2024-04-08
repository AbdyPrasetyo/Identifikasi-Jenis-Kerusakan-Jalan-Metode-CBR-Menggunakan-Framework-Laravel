<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SISPEJKJ | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets2/img/favicon.png" rel="icon">
    <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets2/css/summernote/summernote-bs4.css') }}">
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
</head>
<style>
    .btn-tes {
        background-color: #6777ef;
        color: #ffffff
    }

    .btn-tes:hover {
        background-color: #8491fa;
        text-decoration: none;
    }

    .custom-container {
        border: 1px solid #ddd;
        /* Add a 1px solid border with a light gray color */
        padding: 10px;
        /* Add some padding to the container for better appearance */
        margin-bottom: 15px;
        /* Add margin at the bottom for spacing between containers */
    }

    .custom-col {
        border: 1px solid #ddd;
        /* Add a 1px solid border with a light gray color to each column */
        padding: 10px;
        /* Add some padding to the columns for better appearance */
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
                    <li><a href="{{ url('home') }}#beranda"
                            class="{{ ($title === "Home") ?  'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ url('home') }}#tentang">Tentang</a></li>
                    <li><a href="{{ url('home') }}#petunjuk">Petunjuk</a></li>
                    <li><a href="{{ url('home') }}#team">Team</a></li>
                    <li><a href="{{ url('history') }}"
                            class="{{ ($title === "History Identifications") ?  'active' : '' }}">Riwayat</a></li>

                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->

            <a class="btn btn-getstarted dropdown-toggle" data-bs-toggle="dropdown"> <i
                    class="bi bi-person-circle p-2"></i>Hi, {{ $profile->username }}</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('profile') }}"><i class="bi bi-person"></i> Profile</a></li>
                <li><a class="dropdown-item text-danger" href="#" onclick="confirmLogout()"><i
                            class="bi bi-box-arrow-right"></i> Logout</a></li>
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
                            <h1>Halaman Pengaturan Profile</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End Page Title -->
        <section id="blog-details" class="blog-details">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row ">



                    <article class="article">

                        {{-- ffd --}}


                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <H1>Profile</H1>
                                        </div>

                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">

                                                    <img src="assets/img/avatar/avatar-1.png" class="card-img-top"
                                                        alt="...">
                                                    <h2 class="text-center mt-2">Hi, {{ $profile->name }}!</h2>



                                                    <div class=" container text-center">
                                                        <div class="row">
                                                            <div class="custom-col col">
                                                                <h6>Riwayat Identifikasi</h6>
                                                            </div>
                                                            <div class="custom-col col">
                                                                <h6>Tanggal Bergabung</h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="container text-center">
                                                        <div class="row">
                                                            <div class="custom-col col">
                                                                {{ $history }}
                                                            </div>
                                                            <div class="custom-col col">
                                                                {{ $profile->created_at->format('Y-m-d')  }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <form method="POST"
                                                        action="{{ route('profile.update', $profile->id) }}"
                                                        enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf



                                                        <div class="row mb-3">
                                                            <label for="email"
                                                                class="col-md-4 col-form-label text-md-end">Email</label>
                                                            <div class="col-md-6">

                                                                <input id="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email"
                                                                    value="{{ old('email', $profile->email) }}" required
                                                                    readonly>
                                                                @error('email')

                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <label for="name"
                                                                class="col-md-4 col-form-label text-md-end">Name</label>
                                                            <div class="col-md-6">
                                                                <input id="name" type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    name="name"
                                                                    value="{{ old('name', $profile->name) }}" autofocus>
                                                                @error('name')

                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="name"
                                                                class="col-md-4 col-form-label text-md-end">Username</label>
                                                            <div class="col-md-6">
                                                                <input id="username" type="text"
                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                    name="username"
                                                                    value="{{ old('username', $profile->username) }}"
                                                                    autofocus>
                                                                <div class="invalid-feedback">
                                                                </div>
                                                                @error('username')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>



                                                        <div class="row mb-3">
                                                            <label for="old_password"
                                                                class="col-md-4 col-form-label text-md-end">New
                                                                Password</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    name="password" autocomplete="new-password">
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <label for="password-confirmation"
                                                                class="col-md-4 col-form-label text-md-end">Password
                                                                Confirm</label>

                                                            <div class="col-md-6">
                                                                <input id="password_confirmation" type="password"
                                                                    class="form-control" name="password_confirmation"
                                                                    autocomplete="new-password">
                                                            </div>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <label for="old_password"
                                                                class="col-md-4 col-form-label text-md-end">
                                                                Alamat</label>

                                                            <div class="col-md-6">
                                                                <textarea class="form-control summernote-simple"
                                                                    name="bio">{{ old('bio', $profile->bio) }}</textarea>
                                                            </div>
                                                        </div>





                                                        <div class="row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit"
                                                                    class="btn btn-warning text-white">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ffd --}}

                </div>
            </div>
        </section>




        </div><!-- End meta bottom -->

        </article><!-- End post article -->

        </div>

        </div>

        </div>

        </div>

        </section><!-- End Blog-details Section -->

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
                <p>&copy; <span>Copyright</span> <strong class="px-1">R.A.P</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

                </div>
            </div>

        </footer><!-- End Footer -->

        <!-- Scroll Top Button -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

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
        <script src="assets2/css/summernote/summernote-bs4.js"></script>
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
</body>

</html>
