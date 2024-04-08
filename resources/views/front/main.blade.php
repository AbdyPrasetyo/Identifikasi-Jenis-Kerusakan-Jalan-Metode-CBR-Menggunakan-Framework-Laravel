
@include('front.header')
@include('front.navbar')

<div class="main-content">
        <section class="section">

            <div class="section-body">
            @yield('content')
            </div>

        </section>
    </div>

@include('front.footer')
