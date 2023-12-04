<header class="px-5 pt-5 main-header bg-light">
   <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
         <h2 class="fw-bold text-uppercase text-dark">tasty food</h2>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('icon/nav-icon.svg') }}" alt="Navbar Icon" width="25px" height="25px">
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-0 ms-lg-5 me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link text-dark text-uppercase" href="{{ url('/') }}">home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-dark text-uppercase" href="{{ route('index.tentang') }}">tentang</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-dark text-uppercase" href="{{ route('index.berita') }}">berita</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-dark text-uppercase" href="{{ route('index.galeri') }}">galeri</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-dark text-uppercase" href="{{ route('index.kontak') }}">kontak</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container pt-5" style="height: 520px">
      <div class="d-flex justify-content-between" style="height: 400px;">
         <div class="col-md-6">
            <h1 class="text-uppercase pt-4" style="border-top: 3px solid black; width: 16%;">healthy</h1>
            <h1 class="text-uppercase fw-bold">tasty food</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.</p>
            <a href="{{ route('index.tentang') }}" class="btn btn-dark fw-bold text-uppercase px-3 px-lg-5 rounded-0 py-3" id="tombol_tentang">tentang kami</a>
         </div>
         <div class="col-md-6">
            <img src="{{ asset('ASET/img-4-2000x2000.png') }}" width="800px" height="800px" alt="Image Index"
               style="position: relative; top: -300px; left: 75px;" class="d-none d-lg-block">
         </div>
      </div>
   </div>
</header>
