@extends('admin.layouts.master')
@section('title')
   Daftar Berita
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Berita</div>
            <div class="ps-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-auto">
                     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">Daftar Berita</li>
                  </ol>
               </nav>
            </div>
         </div>
         <!--end breadcrumb-->
         <h6 class="mb-0 text-uppercase">Data Berita</h6>
         <hr />
         <div class="card">
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Judul</th>
                           <th>Gambar</th>
                           <th>Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($listBerita as $dataBerita)
                           <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $dataBerita->judul }}</td>
                              <td><img src="{{ url('uploads/berita_image/' . $dataBerita->gambar) }}" alt="Gambar Berita"
                                    width="120px" height="120px"></td>
                              <td>
                                 <a href="{{ route('berita.edit', $dataBerita->id) }}" class="btn btn-primary"
                                    title="Edit Berita">Edit</a>
                                 |
                                 <a href="{{ route('berita.destroy', $dataBerita->id) }}" class="btn btn-danger"
                                    title="Hapus Berita" data-confirm-delete="true">Hapus</a>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>No.</th>
                           <th>Judul</th>
                           <th>Gambar</th>
                           <th>Opsi</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end page wrapper -->
@endsection
