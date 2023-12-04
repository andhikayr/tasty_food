@extends('layouts.master_index')
@section('title')
    Home
@endsection
@section('content')
    @php
        $data = App\Models\Berita::latest()->get();
        $first = $data->shift();
    @endphp
    <!-- bagian tentang -->
    <div class="container-fluid">
        <div class="text-center p-0 p-lg-5 m-5">
            <h2 class="fw-bold text-uppercase mb-4">tentang kami</h2>
            <div class="col-lg-6 col-12 mx-auto">
                <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                <p class="mx-auto" style="border-bottom: 3px solid black; width: 20%;"></p>
            </div>
        </div>
    </div>
    <!-- bagian tentang berakhir -->

    <!-- Bagian makanan -->
    <div class="container-fluid index-makanan-bg p-5">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col pt-5">
                    <div class="card border-0 index-makanan text-center pb-4">
                        <img src="{{ asset('ASET/img-1.png') }}">
                        <div class="card-header border-0 bg-white">
                            <h3 class="fw-bold text-uppercase">Lorem ipsum</h3>
                        </div>
                        <div class="card-body bg-white index-card-makanan">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col pt-5">
                    <div class="card border-0 index-makanan text-center mt-5 mt-sm-0 pb-4">
                        <img src="{{ asset('ASET/img-2.png') }}">
                        <div class="card-header border-0 bg-white">
                            <h3 class="fw-bold text-uppercase">Lorem ipsum</h3>
                        </div>
                        <div class="card-body bg-white index-card-makanan">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col pt-5">
                    <div class="card border-0 index-makanan text-center mt-5 mt-lg-0 pb-4">
                        <img src="{{ asset('ASET/img-3.png') }}">
                        <div class="card-header border-0 bg-white">
                            <h3 class="fw-bold text-uppercase">Lorem ipsum</h3>
                        </div>
                        <div class="card-body bg-white index-card-makanan">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col pt-5">
                    <div class="card border-0 index-makanan text-center mt-5 mt-lg-0 pb-4">
                        <img src="{{ asset('ASET/img-4.png') }}">
                        <div class="card-header border-0 bg-white">
                            <h3 class="fw-bold text-uppercase">Lorem ipsum</h3>
                        </div>
                        <div class="card-body bg-white index-card-makanan">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian makanan berakhir -->

    <!-- bagian berita -->
    <div class="container-fluid bg-light p-5">
        <div class="container pb-5 mb-3">
            <h2 class="fw-bold text-uppercase my-5 pt-3 pb-3 text-center">berita kami</h2>
            @if ($first)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card border-0 index-berita h-100">
                            <img src="{{ url('uploads/berita_image/' . $first->gambar) }}" class="card-img-top"
                                height="400px">
                            <div class="card-header border-0 bg-white">
                                <h3 class="fw-bold text-uppercase">{{ $first->judul }}</h3>
                            </div>
                            <div class="card-body bg-white">
                                <p class="card-text">{{ Str::limit($first->konten, 300) }}</p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('index.berita.show', $first->id) }}"
                                        class="link-warning text-capitalize text-decoration-none">baca selengkapnya</a>
                                    <a href="#" class="link-dark text-decoration-none fw-bold">...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            @foreach ($beritaLatest->skip(1)->take(2) as $berita)
                                <div class="col-lg-6 pt-4 pt-lg-0">
                                    <div class="card border-0 index-berita h-100">
                                        <img src="{{ url('uploads/berita_image/' . $berita->gambar) }}" class="card-img-top"
                                            height="200px">
                                        <div class="card-header border-0 bg-white">
                                            <h3 class="fw-bold text-uppercase">{{ Str::limit($berita->judul, 12) }}</h3>
                                        </div>
                                        <div class="card-body bg-white">
                                            <p>{{ Str::limit($berita->konten, 100) }}</p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('index.berita.show', $berita->id) }}"
                                                    class="link-warning text-capitalize text-decoration-none">baca
                                                    selengkapnya</a>
                                                <a href="#" class="link-dark text-decoration-none fw-bold">...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($beritaLatest->slice(3)->take(2) as $berita)
                                <div class="col-lg-6 pt-4">
                                    <div class="card border-0 index-berita h-100">
                                        <img src="{{ url('uploads/berita_image/' . $berita->gambar) }}"
                                            class="card-img-top" height="200px">
                                        <div class="card-header border-0 bg-white">
                                            <h3 class="fw-bold text-uppercase">{{ Str::limit($berita->judul, 12) }}</h3>
                                        </div>
                                        <div class="card-body bg-white">
                                            <p>{{ Str::limit($berita->konten, 100) }}</p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('index.berita.show', $berita->id) }}"
                                                    class="link-warning text-capitalize text-decoration-none">baca
                                                    selengkapnya</a>
                                                <a href="#" class="link-dark text-decoration-none fw-bold">...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center">Tidak ada berita apapun</p>
            @endif

        </div>
    </div>
    <!-- bagian berita berakhir -->

    <!-- Bagian galeri -->
    <div class="p-5">
        <div class="container">
            <h2 class="fw-bold text-uppercase mb-5 text-center py-3">galeri kami</h2>
            @if ($galeriLatest)
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                    @foreach ($galeriLatest as $data)
                        <div class="col">
                            <div class="card border-0 index-galeri">
                                <img src="{{ url('uploads/galeri_image/' . $data->gambar_galeri) }}" width="100%"
                                    height="400px">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 col-sm-auto mx-auto">
                        <a href="{{ route('index.galeri') }}"
                            class="btn btn-dark fw-bold text-uppercase w-100 rounded-0 py-3 my-5 px-5">lihat lebih
                            banyak</a>
                    </div>
                </div>
            @else
                
            @endif
        </div>
    </div>
    <!-- Bagian galeri berakhir-->

@endsection
