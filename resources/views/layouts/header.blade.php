<header class="px-5 pt-5 kontak-header">
   <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
         <h2 class="fw-bold text-uppercase text-white">tasty food</h2>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('icon/iconizer-nav-icon.svg') }}" alt="Navbar Icon" width="25px" height="25px">
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link link-light text-uppercase" href="{{ url('/') }}">home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link link-light text-uppercase" href="{{ route('index.tentang') }}">tentang</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link link-light text-uppercase" href="{{ route('index.berita') }}">berita</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link link-light text-uppercase" href="{{ route('index.galeri') }}">galeri</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link link-light text-uppercase" href="{{ route('index.kontak') }}">kontak</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container">
      <div class="d-flex align-items-center justify-content-start" style="height: 400px;">
         @yield('judul_halaman')
      </div>
   </div>
</header>
