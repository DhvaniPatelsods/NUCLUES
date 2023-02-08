<!DOCTYPE html>

I
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Country Complience </title>
    
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
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/fonts/boxicons.css' />
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/fonts/fontawesome.css' />
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/fonts/flag-icons.css' />

    <!-- Core CSS -->
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/css/rtl/core.css' class="template-customizer-core-css"/>
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/css/rtl/theme-default.css' class="template-customizer-theme-css" />
    <link rel="stylesheet" href='{{url("")}}/assets/css/demo.css' />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' />
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/libs/typeahead-js/typeahead.css' />
    <link rel="stylesheet" href='{{url("")}}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css'>
<link rel="stylesheet" href='{{url("")}}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css'>
<link rel="stylesheet" href='{{url("")}}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css'>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src='{{url("")}}/assets/vendor/js/helpers.js'></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src='{{url("")}}/assets/js/config.js'></script>
    
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
                     <h4 class="fw-bold py-3 mb-2">
                        Add Country Compliance
                     </h4>
                     @if(session('status'))
   <div class="alert alert-danger">
  {{session('status')}}
  </div>
  @endif
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1">
                           <li class="breadcrumb-item">
                              <a href="compliancemanagement.php">Master Data Management</a>
                           </li>
                           <li class="breadcrumb-item">
                              <a href="compliancemanagement.php">Country Complience</a>
                           </li>
                           <li class="breadcrumb-item">
                              <a href="javascript:void(0);">New Compliance</a>
                           </li>
                        </ol>
                     </nav>
                     <div class="row">
                        <!-- FormValidation -->
                        <div class="col-12">
                           <div class="card">
                              <!-- <h5 class="card-header">FormValidation</h5> -->
                              <div class="card-body">
                                 <form id="formValidationExamples" class="row g-3" action="{{url('importcompliences')}}" method="POST" enctype="multipart/form-data">
                                  @csrf

                                  <p class="font14 textLeft">
                    <strong>{{__("Instructions: ")}}</strong> <br/>
                    {{__("1. First line would be the heading of all the fields, don't change field's name in the heading.")}} <br/>
                    {{__("2.  Country Compliance are unique. Although  Country Compliance is required.")}} <br/>
                    {{__("3. Role ID = 1 for admin. For other role ids you can check the roles page.")}} <br/>
                    {{__("4. Status can be active/inactive")}} <br/>
                    {{__("5. Download the sample xlsx file and insert your data in this file for better and errors less results.")}} <br/>
                    <b><a href='{{url("")}}/excel/countrycompliance_import.xlsx' target="_blank">{{__('Sample Excel File')}}</a></b>
                  </p>
                                    <!-- Account Details -->
                                    <div class="row  mt-2">
                                       
                                       <div class="col-md-12">
                                          <label class="form-label" for="formValidationConfirmPass">Import Compliences</label>
                <div class="input-group input-group-merge">
                    <input class="form-control" type="file" id="formValidationConfirmPass" name="file" placeholder="Contact Person" aria-describedby="multicol-confirm-password2" />
                </div>
                                         
                                       </div>
                                       
                                       
                                    
                                   
                                    <div class="col-12 mt-5">
                                       <button type="submit" name="submitButton" class="btn btn-primary">Save</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- /FormValidation -->
                     </div>

                     
                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  @include('import.footer')                  <!-- / Footer -->
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
      <script src='{{url("")}}/assets/vendor/libs/jquery/jquery.js'></script>
  <script src='{{url("")}}/assets/vendor/libs/popper/popper.js'></script>
  <script src='{{url("")}}/assets/vendor/js/bootstrap.js'></script>
  <script src='{{url("")}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'></script>
  
  <script src='{{url("")}}/assets/vendor/libs/hammer/hammer.js'></script>
  <script src='{{url("")}}/assets/vendor/libs/i18n/i18n.js'></script>
  <script src='{{url("")}}/assets/vendor/libs/typeahead-js/typeahead.js'></script>
  
  <script src='{{url("")}}/assets/vendor/js/menu.js'></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src='{{url("")}}/assets/vendor/libs/moment/moment.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables/jquery.dataTables.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables-responsive/datatables.responsive.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables-buttons/datatables-buttons.js'></script>
<script src='{{url("")}}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js'></script>

  <!-- Main JS -->
  <script src='{{url("")}}/assets/js/main.js'></script>

  <!-- Page JS -->
  <script src='{{url("")}}/assets/js/app-invoice-list.js'></script>


  <!-- Page JS -->
  <script src='{{url("")}}/assets/js/tables-datatables-advanced.js'></script>
   </body>
</html>