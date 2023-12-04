@extends('admin.layouts.master')
@section('title')
   Edit Gambar Galeri
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Gambar Galeri</div>
            <div class="ps-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-auto">
                     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page"><a href="{{ route('galeri.index') }}">Daftar
                           Gambar Galeri</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Edit Gambar Galeri</li>
                  </ol>
               </nav>
            </div>
         </div>
         <!--end breadcrumb-->
         <div class="row">
            <div class="col-xl-12 mx-auto">
               <h6 class="mb-0 text-uppercase">Ubah Gambar</h6>
               <hr />
               <form method="post" action="{{ route('galeri.update', $galeri->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card">
                     <div class="card-body">
                        <label for="gambar" class="form-label">Gambar Galeri</label>
                        <input type="file" class="dropify" accept="image/jpg, image/png, image/jpeg"
                           name="gambar_galeri" class="form-control mb-3" multiple data-default-file="{{ url('/uploads/galeri_image/'.$galeri->gambar_galeri) }}">
                        <p id="output" class="pt-3"></p>
                        <p class="text-danger">*Gambar tidak boleh lebih dari 2048 KB (2 MB)</p>
                        @error('gambar_galeri')
                           <div class="text-danger pb-3">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Ubah Gambar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
