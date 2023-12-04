@extends('layouts.master')
@section('title')
   {{ $beritaDetail->judul }}
@endsection
@section('judul_halaman')
   <h1 class="fw-bold text-uppercase text-white">berita kami</h1>
@endsection
@section('content')
<div class="px-5">
   <div class="container-fluid py-5">
      <div class="container">
         <h1 class="fw-bold">{{ $beritaDetail->judul }}</h1>
         <img class="py-3" src="{{ url('uploads/berita_image/' . $beritaDetail->gambar) }}" width="30%" style="object-fit: cover;">
         <p>{!! nl2br(e($beritaDetail->konten)) !!}</p>
         <p class="text-secondary">Berita ini dibuat pada {{ $beritaDetail->created_at->format('d F Y H:i') }}</p>
         <div class="d-flex justify-content-between pt-4">
            @if($previous)
               <div>
                  <a href="{{ URL::to('berita/show/' . $previous->id) }}" class="text-decoration-none">Berita Lebih Terdahulu</a>
                  <p class="text-gray mt-2">{{ $previous->judul }}</p>
               </div>
            @endif
            @if($next)
               <div>
                  <a href="{{ URL::to('berita/show/' . $next->id) }}" class="text-decoration-none">Berita Lebih Baru</a>
                  <p class="text-gray mt-2">{{ $next->judul }}</p>
               </div>
            @endif
         </div>
      </div>
   </div>
</div>
@endsection