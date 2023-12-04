@extends('admin.layouts.master')
@section('title')
   Daftar Permintaan Kontak
@endsection
@section('content')
   <!--start page wrapper -->
   <div class="page-wrapper">
      <div class="page-content">
         <!--breadcrumb-->
         <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Permintaan Kontak</div>
            <div class="ps-3">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-auto">
                     <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">Daftar Permintaan Kontak</li>
                  </ol>
               </nav>
            </div>
         </div>
         <!--end breadcrumb-->
         <h6 class="mb-0 text-uppercase">Daftar Permintaan Kontak</h6>
         <hr />
         <div class="card">
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Subjek</th>
                           <th>Nama</th>
                           <th>E-Mail</th>
                           <th>Dikirim Sejak</th>
                           <th>Opsi</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($listContactRequest as $dataPermintaanKontak)
                           <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $dataPermintaanKontak->subject }}</td>
                              <td>{{ $dataPermintaanKontak->name }}</td>
                              <td>{{ $dataPermintaanKontak->email }}</td>
                              <td title="{{ $dataPermintaanKontak->created_at->formatLocalized('%d %B %Y %H:%M:%S') }}">{{ $dataPermintaanKontak->created_at->diffForHumans() }}</td>
                              <td>
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#itemModal{{ $dataPermintaanKontak->id }}" title="Lihat Data">Lihat
                                 </button>
                                 |
                                 <a href="{{ route('message_kontak.destroy', $dataPermintaanKontak->id) }}"
                                    class="btn btn-danger" title="Hapus Data" data-confirm-delete="true">Hapus</a>
                              </td>
                           </tr>
                           <!-- Modal -->
                           <div class="modal fade" id="itemModal{{ $dataPermintaanKontak->id }}" tabindex="-1"
                              role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="itemModalLabel">Detail Permintaan Kontak</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <p><strong>Subjek : </strong> {{ $dataPermintaanKontak->subject }}</p>
                                       <p><strong>Nama : </strong> {{ $dataPermintaanKontak->name }}</p>
                                       <p><strong>Email : </strong> {{ $dataPermintaanKontak->email }}</p>
                                       <p><strong>Dikirim Pada : <br></strong> {{ $dataPermintaanKontak->created_at->formatLocalized('%d %B %Y %H:%M:%S') }}</p>
                                       <p><strong>Message : <br></strong> {!! nl2br(e($dataPermintaanKontak->message)) !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>No.</th>
                           <th>Subjek</th>
                           <th>Nama</th>
                           <th>E-mail</th>
                           <th>Dikirim Sejak</th>
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
