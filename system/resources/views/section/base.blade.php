<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BonBon</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- star navbar -->
      @include('section.navbar')
      <!-- End navbar -->
      
      <div class="container-fluid page-body-wrapper">

        <!-- Start Sidebar -->
        @include('section.sidebar')
        <!-- End Sidebar -->

        <!-- start content -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

              <!-- page content -->
              @yield('content')
                <!-- page content -->

            </div>
          </div>
          <!-- end content -->

          <!-- start footer -->
          @include('section.footer')
          <!-- end footer -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('public')}}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('public')}}/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('public')}}/assets/js/off-canvas.js"></script>
    <script src="{{url('public')}}/assets/js/hoverable-collapse.js"></script>
    <script src="{{url('public')}}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('public')}}/assets/js/dashboard.js"></script>
    <script src="{{url('public')}}/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>