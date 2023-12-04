<footer class="p-5 bg-dark text-white">
   <div class="container-fluid pt-3 mt-3">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-sm-6">
               <h3 class="fw-bold pb-4">Tasty Food</h3>
               <p class="pe-5 pb-3 pb-md-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                  voluptatibus
                  cupiditate adipisci assumenda tempore ratione voluptate, rem tenetur doloremque, nisi nemo quis,
                  consequuntur modi libero quam? A aperiam voluptas aliquid.</p>
            </div>
            <div class="col-lg-2 col-sm-6">
               <h3 class="pb-3 pb-sm-4">Useful links</h3>
               <ul class="list-unstyled">
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light">Blog</a></li>
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light">Hewan</a></li>
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light">Galeri</a></li>
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light">Testimonial</a></li>
               </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
               <h3 class="pb-3 pb-sm-4 pt-3 pt-sm-0">Privacy</h3>
               <ul class="list-unstyled">
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light">Karir</a></li>
                  <li class="mb-3"><a href="{{ route('index.tentang') }}" class="text-decoration-none link-light">Tentang Kami</a></li>
                  <li class="mb-3"><a href="{{ route('index.kontak') }}" class="text-decoration-none link-light">Kontak Kami</a></li>
                  <li class="mb-3"><a href="#" class="text-decoration-none link-light pb-3 pb-md-0">Servis</a></li>
               </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h3 class="pb-3 pb-sm-4 pt-3 pt-sm-0">Contact Info</h3>
               <ul class="list-unstyled">
                  <li class="mb-3">
                     <img src="{{ asset('ASET/ic_markunread_24px.png') }}" alt="Email" width="16px"
                        height="16px"><a href="mailto:tastyfood@gmail.com" class="ps-3 text-decoration-none link-light">tastyfood@gmail.com</a>
                  </li>
                  <li class="mb-3">
                     <img src="{{ asset('ASET/ic_call_24px.png') }}" alt="Phone" width="16px" height="16px"><span
                        class="ps-3">+62 812 3456 7890</span>
                  </li>
                  <li class="mb-3">
                     <img src="{{ asset('ASET/ic_place_24px.png') }}" alt="Address" width="16px" height="16px"><span
                        class="ps-3 text-decoration-none">Kota Bandung, Jawa Barat</span>
                  </li>
               </ul>
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-lg-6">
               <a href="#"><img src="{{ asset('ASET/001-facebook.png') }}" alt="Facebook" width="50px" height="50px"></a>
               <a href="#" class="ps-3"><img src="{{ asset('ASET/002-twitter.png') }}" alt="Twitter" width="50px" height="50px"></a>
            </div>
         </div>
         <p class="text-secondary text-center mt-5">Copyright &copy; {{ date('Y') }} All Right Reserved</p>
      </div>
   </div>
</footer>
