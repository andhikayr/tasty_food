@extends('admin.layouts.master')
@section('title')
   List Gambar Galeri
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">List Gambar Galeri</div>
            <div class="ps-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-auto">
                     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">List Gambar Galeri</li>
                  </ol>
               </nav>
            </div>
         </div>
         <!--end breadcrumb-->
         <h6 class="mb-0 text-uppercase">List Gambar Galeri</h6>
         <hr />
         <div class="card">
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Gambar</th>
                           <th>Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($galeri as $data)
                           <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>
                                 <img src="{{ url('uploads/galeri_image/' . $data->gambar_galeri) }}" alt="Gambar Galeri"
                                    width="240px" height="240px" style="object-fit: cover;">
                              </td>
                              <td>
                                 <a href="{{ route('galeri.edit', $data->id) }}"
                                    class="btn btn-primary" title="Edit Data">Edit</a>
                                 |
                                 <a href="{{ route('galeri.destroy', $data->id) }}"
                                    class="btn btn-danger" title="Hapus Data" data-confirm-delete="true">Hapus</a>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>No.</th>
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
