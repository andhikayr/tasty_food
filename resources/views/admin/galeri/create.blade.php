@extends('admin.layouts.master')
@section('title')
    Tambah Gambar Galeri
@endsection
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tambah Gambar Galeri</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb my-auto">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('galeri.index') }}">Daftar
                                    Gambar Galeri</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Gambar Galeri</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Input Gambar</h6>
                    <hr />
                    <form method="post" action="{{ route('galeri.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <label for="gambar" class="form-label">Gambar Galeri</label>
                                <input type="file" class="dropify" accept="image/jpg, image/png, image/jpeg"
                                    name="gambar_galeri[]" id="gambar_galeri" class="form-control mb-3" multiple
                                    data-show-remove="false">
                                <p id="output" class="pt-3"></p>
                                <p>Anda dapat memilih lebih dari satu gambar</p>
                                <p class="text-danger">*Gambar tidak boleh lebih dari 2048 KB (2 MB)</p>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $message)
                                        <div class="text-danger pb-3">{{ $message }}</div>
                                    @endforeach
                                @endif

                                <button type="submit" class="btn btn-primary">Simpan Gambar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
