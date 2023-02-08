<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Nuclues | Reports</title>
      <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
      <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
      <!-- Canonical SEO -->
      <link rel="canonical" href="themeselection.com/products/sneat-bootstrap-html-admin-template/index.php">
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="fonts.googleapis.com/index.php">
      <link rel="preconnect" href="fonts.gstatic.com/index.php" crossorigin>
      <link href="fonts.googleapis.com/css28ebe.css?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
      <!-- Icons -->
      <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
      <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
      <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="assets/css/demo.css" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
      <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
      <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
      <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
      <!-- Page CSS -->
      <!-- Helpers -->
      <script src="assets/vendor/js/helpers.js"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="assets/js/config.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
           dataLayer.push(arguments);
         }
         gtag('js', new Date());
         gtag('config', 'GA_MEASUREMENT_ID');
      </script>
      <!-- Custom notification for demo -->
      <!-- beautify ignore:end -->
   </head>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar  ">
         <div class="layout-container">
            <!-- Menu -->
            @include('import.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
            @include('import.navbar')
               <!-- / Navbar -->
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                     <h4 class="fw-bold py-3 ">
                        Reports  
                     </h4>
                     <div class="row">
                        <div class="col-md-3">
                           <div class="input-group input-group-merge">
                              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search Reports" aria-label="Search..." aria-describedby="basic-addon-search31" />
                           </div>
                        </div>
                       {{--<div class="col-md-9" style="text-align: end;">
                           <button type="button" class="btn btn-primary">
                           <span class="tf-icons bx bx-plus"></span>&nbsp; Configure Reports
                           </button>
                        </div>--}}
                     </div>
                     <!-- Invoice List Table -->
                     

                <div class="row mb-4 mt-3">
                <div class="col-sm-12">
                    <div class="card">
                    <!-- <h5 class="card-header">Cloning</h5> -->
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-4 col-12 mb-md-0 mb-4">
                                    <p>ALL COMPLIANCES</p>
                                    <ul class="list-group list-group-flush" id="clone-source-1">
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('clientgroup')}}">All Compliances by Client Group</a>
                                        <!-- <a href="">(Adani Group, Tata Group... </a> -->
                                    </li>
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('cliententity')}}">All Compliances by Entity Name</a>
                                    </li>
                                  
                                    </ul>
                                </div>
                                <div class="col-md-4 col-12 mb-md-0 mb-4">
                                    <p>UPCOMING COMPLIANCES</p>
                                    <ul class="list-group list-group-flush" id="clone-source-2">
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                         <a href="{{url('upcominggroup')}}">Upcoming Compliances by Client Group</a>
                                    </li>
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                       <a href="{{url('upcomingentity')}}">Upcoming Compliances by Entity Name</a>
                                    </li>
                                  
                                    </ul>
                                </div>
                                <div class="col-md-4 col-12 mb-md-0 mb-4">
                                    <p>OVERDUE COMPLIANCES</p>
                                    <ul class="list-group list-group-flush" id="clone-source-2">
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('overdue1')}}">Overdue Compliances Before Comments</a>
                                    </li>
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('overdue2')}}">Late Filed Compliances before Comments</a>
                                    </li>
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('overdue3')}}">Overdue Compliances with Comments</a>
                                    </li>
                                    <li class="list-group-item drag-item cursor-move d-flex justify-content-between align-items-center">
                                        <a href="{{url('overdue4')}}">Late Filed Compliances with Comments</a>
                                        
                                    </li>
                                    
                                    </ul>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
<!-- /Cloning Example ends -->

                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  @include('import.footer')

                  <!-- / Footer -->
                  <div class="content-backdrop fade"></div>
               </div>
               <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
         </div>
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
         <!-- Drag Target Area To SlideIn Menu On Small Screens -->
         <div class="drag-target"></div>
      </div>
      <!-- / Layout wrapper -->
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="assets/vendor/libs/jquery/jquery.js"></script>
      <script src="assets/vendor/libs/popper/popper.js"></script>
      <script src="assets/vendor/js/bootstrap.js"></script>
      <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="assets/vendor/libs/hammer/hammer.js"></script>
      <script src="assets/vendor/libs/i18n/i18n.js"></script>
      <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
      <script src="assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <script src="assets/vendor/libs/moment/moment.js"></script>
      <script src="assets/vendor/libs/datatables/jquery.dataTables.js"></script>
      <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
      <script src="assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
      <script src="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
      <script src="assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
      <script src="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
      <!-- Main JS -->
      <script src="assets/js/main.js"></script>
      <!-- Page JS -->
      <script src="assets/js/app-invoice-list.js"></script>
      <!-- Page JS -->
      <script src="assets/js/tables-datatables-advanced.js"></script>
   </body>
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:41 GMT -->
</html>