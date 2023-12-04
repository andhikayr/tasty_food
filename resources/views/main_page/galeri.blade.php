@extends('layouts.master')
@section('title')
Galeri
@endsection
@section('judul_halaman')
<h1 class="fw-bold text-uppercase text-white">galeri kami</h1>
@endsection
@section('content')
<!-- Bagian galeri headline-->
<div class="container-fluid bg-light p-5">
	<div class="container py-5">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				@foreach($galeriCarousel as $carousel)
				<div class="carousel-item @if($loop->first) active @endif">
		    		<img src="{{ url('uploads/galeri_image/' . $carousel->gambar_galeri) }}" height="450px" class="index-galeri-headline d-block w-100">
		    	</div>
		    	@endforeach
	  		</div>
		  	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			    <img src="{{ asset('icon/iconizer-arrow-circle-left.svg') }}" width="80px" height="80px" class="arrow-icon-left">
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<img src="{{ asset('icon/iconizer-arrow-circle-right.svg') }}" width="80px" height="80px" class="arrow-icon-right">
			    <span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
<!-- Bagian galeri headline berakhir-->

<!-- Bagian galeri -->
<div class="container-fluid p-5">
	<div class="container py-5">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
			@foreach($galeri as $data)
			<div class="col">
				<div class="card border-0 index-galeri">
					<img src="{{ url('uploads/galeri_image/' . $data->gambar_galeri) }}" width="100%" height="200px">
				</div>
	        </div>
	        @endforeach
		</div>
	</div>
</div>
<!-- Bagian galeri berakhir-->
@endsection