@extends('admin.layouts.master')
@section('title')
   Edit Berita
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Berita</div>
            <div class="ps-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-auto">
                     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page"><a href="{{ route('berita.index') }}">Daftar
                           Berita</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
                  </ol>
               </nav>
            </div>
         </div>
         <!--end breadcrumb-->
         <div class="row">
            <div class="col-xl-12 mx-auto">
               <h6 class="mb-0 text-uppercase">Ubah Berita</h6>
               <hr />
               <form method="post" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card">
                     <div class="card-body">
                        <label for="judul" class="form-label">Judul</label>
                        <input class="form-control mb-3" type="text" placeholder="Judul" name="judul" id="judul" value="{{ $berita->judul }}">
                        @error('judul')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="gambar" class="form-label">Gambar Berita</label>
                        <input type="file" class="dropify" accept="image/jpg, image/png, image/jpeg"
                           name="gambar" id="gambar" class="form-control mb-3" data-default-file="{{ url('/uploads/berita_image/'.$berita->gambar) }}">
                        <p class="text-danger pt-3">*Gambar tidak boleh lebih dari 2048 KB (2 MB)</p>
                        @error('gambar')
                           <div class="text-danger pb-3">{{ $message }}</div>
                        @enderror

                        <label for="konten" class="form-label">Konten</label>
                        <textarea name="konten" id="konten" rows="5" class="form-control mb-3">{{ $berita->konten }}</textarea>
                        @error('konten')
                           <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Ubah Berita</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
