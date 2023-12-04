@extends('admin.layouts.master')
@section('title')
   Ubah Profil / Password
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <div class="row">
            <div class="col-xl-12 mx-auto">
               <h6 class="mb-0 text-uppercase">Ubah Password</h6>
               <hr />
               <form method="post" action="{{ route('admin.edit_password') }}">
                  @csrf
                  <div class="card">
                     <div class="card-body">
                        <label for="current_password" class="form-label">Password saat ini</label>
                        <input class="form-control mb-3 @error('current_password') is-invalid @enderror" type="password" placeholder="Password saat ini"
                           name="current_password" id="current_password" required>
                        @error('current_password')
                           <div class="text-danger mt-3">{{ $message }}</div>
                        @enderror

                        <label for="new_password" class="form-label">Password baru</label>
                        <input class="form-control mb-3 @error('new_password') is-invalid @enderror" type="password" placeholder="Password baru" name="new_password"
                           id="new_password" required>
                        <p class="text-danger">*Panjang password minimal 8 karakter</p>
                        @error('new_password')
                           <div class="text-danger my-3">{{ $message }}</div>
                        @enderror

                        <label for="new_password_confirmation" class="form-label">Ketik ulang password baru</label>
                        <input class="form-control mb-3" type="password" placeholder="Ketik ulang password baru"
                           name="new_password_confirmation" id="new_password_confirmation" required>
                        @error('new_password_confirmation')
                           <div class="text-danger mt-3">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-xl-12 mx-auto pt-5">
               <h6 class="mb-0 text-uppercase">Ubah Data Profil</h6>
               <hr />
               <form method="post" action="{{ route('admin.edit_profile') }}" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="card">
                     <div class="card-body">
                        <label for="name" class="form-label">Nama</label>
                        <input class="form-control mb-3" type="text" placeholder="Nama" name="name" id="name"
                           value="{{ Auth::user()->name }}">

                        <label for="image" class="form-label">Gambar Profil</label>
                        <input type="file" class="dropify" accept="image/jpg, image/png, image/jpeg"
                           name="image" id="image" class="form-control mb-3"
                           data-default-file="{{ $user->image ? url('uploads/profile_image/'. $user->image) : url('uploads/no_image_profile.png') }}">
                        <p class="text-danger pt-3">*Gambar tidak boleh lebih dari 2048 KB (2 MB)</p>

                        <button type="submit" class="btn btn-primary">Ubah Data Profil</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
