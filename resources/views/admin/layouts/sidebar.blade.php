<div class="sidebar-wrapper" data-simplebar="true">
   <div class="sidebar-header">
      <div>
         <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      </div>
      <div>
         <h4 class="logo-text">TASTY FOOD</h4>
      </div>
      <div class="toggle-icon ms-auto"><i class='bx bx-menu'></i>
      </div>
   </div>
   <!--navigation-->
   <ul class="metismenu" id="menu">
      <li>
         <a href="{{ route('dashboard') }}">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
         </a>
      </li>
      <li>
         <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-news'></i>
            </div>
            <div class="menu-title">Berita</div>
         </a>
         <ul>
            <li> <a href="{{ route('berita.index') }}"><i class="bx bx-list-ol"></i>Daftar Berita</a>
            </li>
            <li> <a href="{{ route('berita.create') }}"><i class="bx bx-plus-circle"></i>Tambah Berita</a>
            </li>
         </ul>
      </li>
      <li>
         <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-image'></i>
            </div>
            <div class="menu-title">Galeri</div>
         </a>
         <ul>
            <li> <a href="{{ route('galeri.index') }}"><i class="bx bx-list-ol"></i>Daftar Galeri</a>
            </li>
            <li> <a href="{{ route('galeri.create') }}"><i class="bx bx-plus-circle"></i>Tambah Gambar Galeri</a>
            </li>
         </ul>
      </li>
      <li>
         <a href="{{ route('message_kontak.index') }}">
            <div class="parent-icon"><i class='bx bx-envelope'></i>
            </div>
            <div class="menu-title">Permintaan Kontak</div>
         </a>
      </li>
   </ul>
   <!--end navigation-->
</div>
