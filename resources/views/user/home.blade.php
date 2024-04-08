@extends('front.main')
@section('content')

<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/news/img01.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/news/img07.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/news/img08.jpg" alt="Third slide">
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
</div>
</div>





    <div class="hero text-white hero-bg-image hero-bg-parallax p-2  " style="background-image: url('assets/img/unsplash/jalan2.jpg'); height: 300px;">
      <div class="hero-inner">
        <h2>Welcome, {{ $profile->username }}</h2>
        <p class="lead">SISPEJKJ, Sistem Pendeteksi Jenis Kerusakan Jalan</p>
      </div>
    </div>




      <div class="section-body">
        <h2 class="section-title">Welcome, {{ $profile->name }}</h2>
        <p class="section-lead"></p>
        <div class="card">
          <div class="card-header">
            <h4></h4>
          </div>
          <div class="card-body">
            <div class="row">
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

    @endsection
