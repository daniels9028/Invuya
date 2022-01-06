  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link navbar-info">
      <img src="{{asset('backend/lte/dist/img/Invuya.png')}}" alt="Invuya Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">INVUYA</span>
    </a>  

<!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset(auth()->user()->image) }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="{{route('admin')}}" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
              <a href="{{route('dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                <p>
                  Dashboard
                </p>
            </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-circle cyan"></i>
                <p>
                  User Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="{{route('admin')}}" class="nav-link">
                    <i class="fas fa-users-cog nav-icon teal"></i>
                    <p>Profil Admin</p>
                </a>
                </li>
                <li class="nav-item {{ (request()->is('investor-index')) ? 'active' : '' }}">
                  <a href="{{route('investor-index')}}" class="nav-link">
                    <i class="fas fa-user-tie nav-icon teal"></i>
                    <p>Akun Investor</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">Invuya-Investment</li>
            <li class="nav-item {{ (request()->is('petambak-index')) ? 'active' : '' }}">
              <a href="{{route('petambak-index')}}" class="nav-link">
                <i class="nav-icon fas fa-id-badge green"></i>
                <p>
                  Kelola Petambak Ikan
                </p>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('proyek-index')) ? 'active' : '' }}">
              <a href="{{route('proyek-index')}}" class="nav-link">
                <i class="nav-icon fas fa-tasks yellow"></i>
                <p>
                  Kelola Daftar Proyek
                </p>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('pembayaran-index')) ? 'active' : '' }}">
              <a href="{{route('pembayaran-index')}}" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt green"></i>
                <p>
                  Kelola Pembayaran
                </p>
              </a>
                <li class="nav-item {{ (request()->is('riwayat-index')) ? 'active' : '' }}">
                  <a href="{{route('riwayat-index')}}" class="nav-link">
                    <i class="fas fa-calendar-alt nav-icon blue"></i>
                    <p>Kelola Riwayat</p>
                  </a>
                </li>
                <li class="nav-item {{ (request()->is('laporan-index')) ? 'active' : '' }}">
                  <a href="{{route('laporan-index')}}" class="nav-link">
                    <i class="fas fa-file nav-icon red"></i>
                    <p>Kelola Laporan</p>
                  </a>
                </li>

                <li class="nav-header">Invuya-Sell</li>
                <li class="nav-item {{ (request()->is('komoditas-index')) ? 'active' : '' }}">
                  <a href="{{route('komoditas-index')}}" class="nav-link">
                    <i class="fas fa-table nav-icon indigo"></i>
                    <p>Kelola Daftar Komoditas</p>
                  </a>
                </li>

            </li>
          
            <li class="nav-header">Invuya-Blog</li>
            <li class="nav-item {{ (request()->is('berita-index')) ? 'active' : '' }}">
              <a href="{{route('berita-index')}}" class="nav-link">
                <i class="fas fa-blog nav-icon orange"></i>
                <p>Kelola Blog</p>
              </a>
            </li>

            <li class="nav-header">Invuya-Info</li>
            <li class="nav-item {{ (request()->is('masukan-index')) ? 'active' : '' }}">
              <a href="{{route('masukan-index')}}" class="nav-link">
                <i class="fas fa-question-circle blue"></i>
                <p>Data Masukan</p>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('pertanyaan-index')) ? 'active' : '' }}">
              <a href="{{route('pertanyaan-index')}}" class="nav-link">
                <i class="fas fa-question-circle blue"></i>
                <p>Kelola FAQ</p>
              </a>
            </li>



        <li class="nav-header">Lainnya</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
             <p>
                 {{ __('Logout') }}
                </p>
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>


          </li>
        </ul>


    </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->

    </aside>
