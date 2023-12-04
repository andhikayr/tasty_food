@extends('layouts.master')
@section('title')
    Berita
@endsection
@section('judul_halaman')
    <h1 class="fw-bold text-uppercase text-white">berita kami</h1>
@endsection
@section('content')
    <!-- Bagian berita headline-->
    @if ($beritaLatest)
        <div class="container-fluid bg-light p-5">
            <div class="container">
                @foreach ($beritaLatest as $data)
                    <div class="row py-5">
                        <div class="col-lg-6">
                            <img src="{{ url('uploads/berita_image/' . $data->gambar) }}" width="100%" height="500px"
                                class="index-berita">
                        </div>
                        <div class="col-lg-6 m-auto">
                            <h3 class="fw-bold text-uppercase mb-4 mt-4 mt-lg-0">{{ $data->judul }}</h3>
                            <p>{{ Str::limit($data->konten, 600) }}</p>
                            <a href="{{ route('index.berita.show', $data->id) }}"
                                class="btn btn-dark fw-bold text-uppercase px-3 px-lg-5 rounded-0 py-3">baca
                                selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center">Tidak ada berita terbaru</p>
    @endif
    <!-- Bagian berita berakhir-->

    <!-- Bagian berita lainnya-->
    <div class="p-5">
        <div class="container pb-5">
            <h3 class="fw-bold text-uppercase pb-5">berita lainnya</h3>
            @if ($beritaAll)
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @foreach ($beritaAll->skip(1) as $data)
                        <div class="col">
                            <div class="card index-berita h-100">
                                <img src="{{ url('uploads/berita_image/' . $data->gambar) }}" width="100%" height="200px">
                                <div class="card-header border-0 bg-white">
                                    <h3 class="fw-bold text-uppercase mt-3">{{ Str::limit($data->judul, 18) }}</h3>
                                </div>
                                <div class="card-body bg-white">
                                    <p class="card-text">{{ Str::limit($data->konten, 70) }}</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('index.berita.show', $data->id) }}"
                                            class="link-warning text-capitalize text-decoration-none">baca
                                            selengkapnya</a>
                                        <a href="#" class="link-dark text-decoration-none fw-bold">...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-5">
                    {{ $beritaAll->links() }}
                </div>
            @else
                <p class="text-center">Tidak ada berita yang tersedia</p>
            @endif
        </div>
    </div>
    <!-- Bagian berita lainnya berakhir-->
@endsection
