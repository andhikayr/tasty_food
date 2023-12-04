@extends('layouts.master')
@section('title')
   Kontak
@endsection
@section('judul_halaman')
   <h1 class="fw-bold text-uppercase text-white">kontak kami</h1>
@endsection
@section('content')
   <!-- bagian form kontak -->
   <div class="container-fluid p-5">
      <div class="container">
         <h2 class="fw-bold text-uppercase py-4">kontak kami</h2>
         <form method="POST" action="{{ route('index.send_contact') }}">
            @csrf
            <div class="row">
               <div class="col-lg-6">
                  <input class="form-control form-control-lg border-dark mb-3 py-4" type="text" placeholder="Subject"
                     name="subject" required>
                  @error('subject')
                     <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <input class="form-control form-control-lg border-dark mb-3 py-4" type="text" placeholder="Name"
                     name="name" required>
                  @error('name')
                     <p class="text-danger">{{ $message }}</p>
                  @enderror
                  <input class="form-control form-control-lg border-dark py-4" type="email" placeholder="Email"
                     name="email" required>
                  @error('email')
                     <p class="text-danger">{{ $message }}</p>
                  @enderror
               </div>
               <div class="col-lg-6 mt-3 mt-lg-0">
                  <textarea placeholder="Message" name="message" class="h-100 form-control border-dark pt-4 ps-3" required style="font-size: 1.25rem"></textarea>
                  @error('message')
                     <p class="text-danger">{{ $message }}</p>
                  @enderror
               </div>
            </div>
            <button class="btn btn-dark fw-bold text-uppercase w-100 mt-5 py-4" style="border-radius: 15px;">kirim</button>
         </form>
      </div>
   </div>
   <!-- bagian form kontak berakhir -->

   <!-- bagian informasi kontak -->
   <div class="container-fluid">
      <div class="container p-5 my-5">
         <div class="row">
            <div class="col-md-4 text-center">
               <img src="{{ asset('ASET/Group 66.png') }}" width="100px" height="100px">
               <h3 class="fw-bold text-uppercase pt-4">email</h3>
               <p>tastyfood@gmail.com</p>
            </div>
            <div class="col-md-4 text-center">
               <img src="{{ asset('ASET/Group 67.png') }}" width="100px" height="100px">
               <h3 class="fw-bold text-uppercase pt-4">phone</h3>
               <p>+62 812 3456 7890</p>
            </div>
            <div class="col-md-4 text-center">
               <img src="{{ asset('ASET/Group 68.png') }}" width="100px" height="100px">
               <h3 class="fw-bold text-uppercase pt-4">location</h3>
               <p>Kota Bandung, Jawa Barat</p>
            </div>
         </div>
      </div>
   </div>
   <!-- bagian informasi kontak berakhir -->

   <!-- bagian peta -->
   <div class="container-fluid bg-light p-5">
      <div class="container py-5">
         <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3960.4233862424458!2d107.67367784067793!3d-6.959280071361078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1693551507257!5m2!1sid!2sid"
            width="100%" height="500px" style="border:0; border-radius: 15px;" allowfullscreen="true" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </div>
   <!-- bagian peta berakhir -->
@endsection
