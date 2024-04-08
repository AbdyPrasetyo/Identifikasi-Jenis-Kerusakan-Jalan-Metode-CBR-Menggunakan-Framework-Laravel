
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">

              </div>


            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ $profile->username }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ url('profiles') }}" class="dropdown-item has-icon">
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

      {{-- <script>
        // Ambil elemen yang diperlukan
        var menuSearchInput = document.getElementById('menu-search');
        var menuSearchResult = document.getElementById('menu-search-result');

        // Tambahkan event listener saat input pencarian berubah
        menuSearchInput.addEventListener('input', function() {
          var searchTerm = menuSearchInput.value.toLowerCase();

          // Ambil semua item pencarian
          var searchItems = menuSearchResult.getElementsByClassName('search-item');

          // Saring item berdasarkan kata kunci
          for (var i = 0; i < searchItems.length; i++) {
            var searchItem = searchItems[i];
            var searchItemText = searchItem.textContent.toLowerCase();

            if (searchItemText.includes(searchTerm)) {
              searchItem.style.display = 'block';
            } else {
              searchItem.style.display = 'none';
            }
          }
        });
      </script> --}}
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
