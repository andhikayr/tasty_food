@extends('admin.layouts.master')
@section('title')
   Home
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <p style="font-size: 24px;">Dashboard</p>
         <!--end breadcrumb-->
         <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col pb-3 pb-md-0">
               <div class="card radius-10 bg-gradient-deepblue">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">{{ $newsCount }}</h5>
                        <div class="ms-auto">
                           <i class='bx bx-news fs-3 text-white'></i>
                        </div>
                     </div>
                     <div class="d-flex align-items-center text-white">
                        <p class="mb-3">Total Berita</p>
                     </div>
                     <a href="{{ route('berita.index') }}" class="link-light">Lihat Data</a>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card radius-10 bg-gradient-orange">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">{{ $galleryCount }}</h5>
                        <div class="ms-auto">
                           <i class='bx bx-image fs-3 text-white'></i>
                        </div>
                     </div>
                     <div class="d-flex align-items-center text-white">
                        <p class="mb-3">Total Gambar Galeri</p>
                     </div>
                     <a href="{{ route('galeri.index') }}" class="link-light">Lihat Data</a>
                  </div>
               </div>
            </div>
            <div class="col pt-3 pt-xl-0 pb-md-0">
               <div class="card radius-10 bg-gradient-ibiza">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">{{ $messageCountToday }}</h5>
                        <div class="ms-auto">
                           <i class='bx bx-envelope fs-3 text-white'></i>
                        </div>
                     </div>
                     <div class="d-flex align-items-center text-white">
                        <p class="mb-3">Permintaan Kontak Hari Ini</p>
                     </div>
                     <a href="{{ route('message_kontak.index') }}" class="link-light">Lihat Data</a>
                  </div>
               </div>
            </div>
         </div><!--end row-->
      </div>
   </div>
   <!--end page wrapper -->
@endsection
