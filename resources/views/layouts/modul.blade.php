@include('layouts.header')
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

   @include('layouts.navbar')
   @include('layouts.sidebar')
      <!-- Main Content -->
      <div class="main-content">

        <section class="section">


      @yield('content')
        </section>
      </div>
    @include('layouts.footer')
