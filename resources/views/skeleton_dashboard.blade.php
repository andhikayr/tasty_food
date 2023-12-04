<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title') | Tasty Food Dashboard</title>
      <!--plugins-->
      <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
      <!-- loader-->
      <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
      <!-- Bootstrap CSS -->
      <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
      <!-- Theme Style CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
      <!-- Dropify -->
      <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
   </head>

   <body>
      @include('sweetalert::alert')
      <!--wrapper-->
      <div class="wrapper">
         @yield('master')
      </div>
      <!--end wrapper-->
      <!-- Bootstrap JS -->
      <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
      <!--plugins-->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
      <script src="{{ asset('assets/js/pace.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
      <script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
      <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
      <script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
      <script>
         $(function() {
            $(".knob").knob();
         });
         $('.dropify').dropify();
         $(document).ready(function() {
            $('#example').DataTable();
         });
         document.querySelector('#gambar_galeri').addEventListener('change', function(e) {
             var fileCount = e.target.files.length;
             document.querySelector('#output').textContent = 'Total gambar yang dipilih : ' + fileCount;
         });
      </script>
      <script src="{{ asset('assets/js/index.js') }}"></script>
      <!--app JS-->
      <script src="{{ asset('assets/js/app.js') }}"></script>
   </body>

</html>
