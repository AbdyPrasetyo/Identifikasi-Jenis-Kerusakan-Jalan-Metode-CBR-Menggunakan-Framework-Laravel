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
</head>
<style>
    .hero img {
      filter: brightness();
    }
    .btn-tes{
        background-color: #6777ef;
        color: #ffffff
    }
    .btn-tes:hover {
    background-color: #8491fa;
    text-decoration: none;
    }


  </style>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ url('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets2/img/logo.png" alt=""> -->
        <h1>SISPEJKJ</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#beranda" class="{{ ($title === "Home") ?  'active' : '' }}">Beranda</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#petunjuk">Petunjuk</a></li>
          <li><a href="#team">Team</a></li>
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

    <!-- Hero Section - Home Page -->
    <section id="beranda" class="hero">

      <img src="assets2/img/jalan4.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Identifikasi Jenis Kerusakan Jalan Bersama SISPEJKJ</h2>
            <p data-aos="fade-up" data-aos-delay="200">Dengan antusiasme yang tinggi, kami mengundang Anda untuk merasakan pengalaman unik dengan sistem identifikasi kerusakan jalan terbaru kami - SISPEJKJ! Sekarang, Anda dapat secara mudah dan cepat mengidentifikasi berbagai jenis kerusakan jalan hanya dengan beberapa klik. Apakah Anda menemui retakan, lubang, atau masalah struktural lainnya, SISPEJKJ siap memberikan hasil identifikasi yang akurat dan rekomendasi langkah-langkah penanganan yang dibutuhkan. Jangan lewatkan kesempatan ini untuk menjadi bagian dari inovasi dalam perawatan jalan. Ayo, coba sekarang dan lihat betapa efisiennya SISPEJKJ dalam membantu Anda menjaga kondisi jalan tetap prima!</p>
          </div>
          <div class="col-lg-5 p-2">
              <a data-aos="fade-up" data-aos-delay="300" href="{{ url('sispejkj') }}" class="btn btn-lg btn-tes" >Identifikasi</a>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->




  <!-- FAQ Section - Home Page -->
<section id="tentang" class="faq">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3>Tentang Kami</h3>
            <h2>SISPEJKJ</h2>
            <p>
                Sitem Pakar Identifikasi Jenis Kerusakan Jalan adalah sebuah aplikasi yang bertujuan untuk membantu pengguna dalam mengidentifikasi dan memahami berbagai jenis kerusakan yang mungkin terjadi pada jalan. Aplikasi ini menggunakan teknologi kecerdasan buatan untuk memberikan rekomendasi berdasarkan indikator ciri atau karakteristik yang diamati pada jalan yang rusak.
            </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
          <!-- Pengalaman Mudah Identifikasi Kerusakan Jalan -->
<div class="faq-item">
    <h3><span class="fw-bold">Pengalaman Mudah Identifikasi Kerusakan Jalan</span></h3>
    <div class="faq-content">
      <p>
        Aplikasi ini dapat digunakan oleh pengguna dengan cara memasukkan indikator ciri atau karakteristik kerusakan jalan yang diamati, seperti jenis retakan, lubang, atau kerusakan struktur jalan. Sistem pakar akan menganalisis data yang diberikan dan mencocokkannya dengan pengetahuan yang ada dalam basis pengetahuan untuk menghasilkan hasil identifikasi yang mungkin terjadi.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->

  <!-- Kecepatan dan Akurasi Terbaik -->
  <div class="faq-item">
    <h3><span class="fw-bold">Kecepatan dan Akurasi Terbaik</span></h3>
    <div class="faq-content">
      <p>
        Keuntungan menggunakan sistem pakar dalam identifikasi kerusakan jalan adalah meningkatkan kecepatan dan akurasi identifikasi. Selain itu, sistem pakar juga dapat memberikan rekomendasi langkah-langkah penanganan yang diperlukan berdasarkan jenis kerusakan yang diidentifikasi.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->

  <!-- Pendekatan Inovatif Berbasis Kasus -->
  <div class="faq-item">
    <h3><span class="fw-bold">Pendekatan Inovatif Berbasis Kasus</span></h3>
    <div class="faq-content">
      <p>
        Aplikasi ini memiliki keunikan yang menarik karena dirancang dengan menggunakan metode Case-Based Reasoning, memungkinkan pengguna untuk memperoleh solusi yang relevan berdasarkan pengalaman masa lalu dalam menyelesaikan masalah yang serupa.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->

  <!-- Teknologi Keren dengan Framework Laravel -->
  <div class="faq-item">
    <h3><span class="fw-bold">Teknologi Keren dengan Framework Laravel</span></h3>
    <div class="faq-content">
      <p>
        Aplikasi ini dikembangkan dengan menggunakan Laravel, sebuah framework PHP yang populer dan kuat. Kami berkomitmen untuk terus meningkatkan dan mengembangkan sistem ini dengan penambahan pengetahuan baru dan pembaruan teknologi agar tetap relevan dan bermanfaat bagi pengguna.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->

  <!-- Panduan Bijak dan Reminder Penting -->
  <div class="faq-item">
    <h3><span class="fw-bold">Panduan Bijak dan Reminder Penting</span></h3>
    <div class="faq-content">
      <p>
        Kami harap aplikasi ini dapat membantu Anda dalam mengidentifikasi dan memahami jenis kerusakan jalan yang mungkin terjadi. Namun, perlu diingat bahwa hasil identifikasi yang diberikan oleh sistem pakar tidak dapat dianggap sebagai diagnosis resmi. Disarankan untuk selalu menghubungi otoritas terkait atau ahli yang berwenang dalam penanganan dan perbaikan kerusakan jalan.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->

  <!-- Explorasi Sistem dengan Semangat -->
  <div class="faq-item">
    <h3><span class="fw-bold">Explorasi Sistem dengan Semangat</span></h3>
    <div class="faq-content">
      <p>
        Yuk langung saja kita pelajari mekanisme penggunaan sistemnya.
      </p>
    </div>
    <i class="faq-toggle bi bi-chevron-right"></i>
  </div><!-- End FAQ item-->


          </div>

        </div>
      </div>

    </div>

  </section><!-- End about Section -->



    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">

      <img src="assets2/img/jalan1.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengunjung</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengguna</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Riwayat Identifikasi</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1" class="purecounter"></span>
              <p>Basis Pengetahuan</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- End Stats Section -->

    <!-- Services Section - Home Page -->
    <section id="petunjuk" class="services">


  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Petunjuk Penggunaan</h2>
    <p>Selamat datang di SISPEJKJ - Sistem Pakar Identifikasi Jenis Kerusakan Jalan. Berikut adalah panduan penggunaan sistem ini:</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Step 1 -->
      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-1-circle-fill"></i></div>
          <div>
            <h4 class="title">LANGKAH PERTAMA</h4>
            <p>Tekan Tombol Identifikasi disamping ini  <i class="bi bi-arrow-right-short"></i> <a href="{{ url('sispejkj') }}" class="btn btn-tes text-white">Identifikasi</a></p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Step 2 -->
      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-2-circle-fill"></i></div>
          <div>
            <h4 class="title">LANGKAH KEDUA</h4>
            <p>Centang indikator ciri kerusakan jalan berdasarkan ciri yang ditemukan dilapangan</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Step 3 -->
      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-3-circle-fill"></i></div>
          <div>
            <h4 class="title">LANGKAH KETIGA</h4>
            <p>Tekan Tombol Proses Identifikasi</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Step 4 -->
      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-4-circle-fill"></i></div>
          <div>
            <h4 class="title">LANGKAH KEEMPAT</h4>
            <p>Silahkan tunggu beberapa saat hasil identifikasi jenis kerusakan jalan akan keluar, dimana nilai persentasi yang tinggi adalah hasil akurat</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Step 5 -->
      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-5-circle-fill"></i></div>
          <div>
            <h4 class="title">LANGKAH KELIMA</h4>
            <p>Tekan Tombol Simpan, berfungsi untuk menyimpan data hasil identifikasi kedalam menu riwayat identifikasi</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
    </section><!-- End Services Section -->






    <!-- Team Section - Home Page -->
    <section id="team" class="team">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Kami adalah tim yang berdedikasi untuk menghadirkan SISPEJKJ sebagai solusi inovatif dalam identifikasi jenis kerusakan jalan. Berikut adalah anggota tim kami:</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets2/img/team/depeloper2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Yumarlin MZ, S.Kom., M.Pd., M.Kom</h4>
              <span>Artificial Inteligence</span>
              <p>Dosen Pembimbing 1</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets2/img/team/depeloper1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Reza Abdy Prasetyo</h4>
              <span>Fulstack Developer</span>
              <p>Mahasiswa (19330017)</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets2/img/team/developer3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Jemmy Edwin Bororing, S.Kom., M.Eng.</h4>
              <span>Enterprise Information System</span>
              <p>Dosen Pembimbing 2</p>
            </div>
          </div><!-- End Team Member -->



        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- Call-to-action Section - Home Page -->
    <section id="call-to-action" class="call-to-action">

      <img src="assets2/img/Longitudinal.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Tindakan Sekarang!</h3>
              <p>Nikmati pengalaman tanpa batas dengan SISPEJKJ! Dengan fitur canggih dan panduan yang mudah, Anda dapat dengan mudah mengidentifikasi jenis kerusakan jalan. Ayo, coba sekarang dan berkontribusi pada perbaikan infrastruktur jalan di sekitar Anda</p>
              <a class="cta-btn" href="{{ url('sispejkj') }}">Mulai Sekarang!</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Call-to-action Section -->

    <!-- Recent-posts Section - Home Page -->
    <section id="recent-posts" class="recent-posts">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Jenis-Jenis Kerusakan Jalan</h2>
        <p>Berikut Jenis Kerusakan jalan yang dapat diidentifikasi pada sistem untuk saat ini:</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

            @foreach ($solution as $s )


          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>
              <div class="post-img">
                <img src="{{ asset('img/'. $s->image) }}" alt="" height="200px" width="500px" >
              </div>
              <h2 class="title text-center">
                <a href="#">{{ $s->damage_types }}</a>
              </h2>
              <div class="d-flex align-items-center">

              </div>
            </article>
          </div>
          @endforeach



          </div><!-- End post list item -->



      </div>

    </section><!-- End Recent-posts Section -->



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
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#petunjuk">Petunjuk</a></li>
            <li><a href="#Team">Team</a></li>
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

</body>

</html>
