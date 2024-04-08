

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand mt-4">
            <a href="{{ url('dashboard') }}"><h4><b> SISPJKJ </b></h4> </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('dashboard') }}">SPJ</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Admin Menu</li>
              <li class="{{ ($title === "Dashboard Admin") ? 'active' : '' }}"><a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              <li class="{{ ($title === "Characteristics Damage") ? 'active' : '' }} {{ ($title === "Characteristics Create") ? 'active' : '' }} {{ ($title === "Characteristics Update") ? 'active' : '' }}"><a class="nav-link" href="{{ url('characteristics') }}"><i class="fas fa-puzzle-piece"></i> <span>Data Indikator</span></a></li>
              <li class="{{ ($title === "Types Damage") ? 'active' : '' }} {{ ($title === "Types Damage Create") ? 'active' : '' }} {{ ($title === "Damage Types Update") ? 'active' : '' }}"><a class="nav-link" href="{{ url('types') }}"><i class="fas fa-cube"></i><span>Data Solusi</span></a></li>
              <li class="{{ ($title === "Expert Weight") ? 'active' : '' }} {{ ($title === "Expert Weight Create") ? 'active' : '' }} {{ ($title === "Expert Weight Update") ? 'active' : '' }}"><a class="nav-link" href="{{ url('expert') }}"><i class="fas fa-weight"></i> <span>Data Bobot</span></a></li>


                    <li class="{{ ($title === "Knowledge Bases") ?  'active' : '' }} {{ ($title === "Knowledge Bases Create") ?  'active' : '' }} {{ ($title === "Knowledge Bases Update") ?  'active' : '' }}"><a class="nav-link" href="{{ url('knowledge') }}"><i class="fas fa-brain"></i> <span>Basis Pengetahuan</span></a></li>

                    <li class="{{ ($title === "Data Users") ?  'active' : '' }}"><a class="nav-link" href="{{ url('users') }}"><i class="fas fa-users    "></i> <span>Data Pengguna</span></a></li>
                    <li class="{{ ($title === "History Identifications") ?  'active' : '' }}"><a class="nav-link" href="{{ url('historys') }}"><i class="fas fa-history"></i> <span>Riwayat Identifikasi</span></a></li>


              </ul>
         </aside>
      </div>
