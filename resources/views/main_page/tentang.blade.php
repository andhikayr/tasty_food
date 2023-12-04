@extends('layouts.master')
@section('title')
   Tentang
@endsection
@section('judul_halaman')
   <h1 class="fw-bold text-uppercase text-white">tentang kami</h1>
@endsection
@section('content')
   <!-- bagian awal tentang -->
   <div class="container-fluid bg-light p-5">
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-6 m-auto">
               <h3 class="fw-bold text-uppercase mb-4">tasty food</h3>
               <p class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. </p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.</p>
            </div>
            <div class="col-lg-6">
               <div class="d-flex justify-content-between index-tentang">
                  <img src="{{ asset('ASET/brooke-lark-oaz0raysASk-unsplash.jpg') }}" width="50%">
                  <img src="{{ asset('ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                     width="50%"class="ms-3">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- bagian awal tentang selesai -->

   <!-- bagian visi -->
   <div class="container-fluid p-5">
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-6">
               <div class="d-flex justify-content-between index-tentang">
                  <img src="{{ asset('ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" width="50%" height="280px">
                  <img src="{{ asset('ASET/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" width="50%" height="280px"
                     class="ms-3">
               </div>
            </div>
            <div class="col-lg-6 m-auto">
               <div class="container px-0 px-lg-4">
                  <h3 class="fw-bold text-uppercase mb-4 pt-4 pt-lg-0">visi</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- bagian visi selesai -->

   <!-- bagian misi -->
   <div class="container-fluid p-5">
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-6 m-auto pe-5">
               <h3 class="fw-bold text-uppercase mb-4">misi</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-lg-6 index-tentang">
               <img src="{{ asset('ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" width="100%" height="300px">
            </div>
         </div>
      </div>
   </div>
   <!-- bagian misi selesai -->
@endsection
