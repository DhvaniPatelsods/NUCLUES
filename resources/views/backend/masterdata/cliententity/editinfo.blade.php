<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Client Entity </title>
    
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
             @include('import.navbar1')

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  Edit Compliance Management
</h4>

<nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Master Data Management</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{url('dashboad')}}">Dashboard</a>
        </li>

    
      </ol>
    </nav>
<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <!-- <h5 class="card-header">FormValidation</h5> -->
      <div class="card-body">
<form id="formValidationExamples" class="row g-3" 
                                  action="{{url('update-information/'.$editinfo->id)}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                            @method('PUT')
         <div class="row  mt-2">

            <div class="col-md-6">
                <label class="form-label" for="formValidationName"> Client Group </label>
              <input type="text" name="group_name" value="{{$editinfo->group_name}} <?php $val=App\Models\client_group_master::where('id',$editinfo->group_name)->first(); echo $val->client_group;?>" readonly class="form-control">
            </div>
<div class="col-md-6">
                <label class="form-label" for="formValidationName">Country</label>
              <input type="text" name="country" value="{{$editinfo->country}} <?php $val=App\Models\country::where('id',$editinfo->country)->first(); echo $val->country;?>" readonly class="form-control">
            </div>
            
         
            
           
</div>
<div class="row  mt-2">
     <div class="col-md-6">
                <label class="form-label" for="formValidationName">Client Entity Name</label>
              <input type="text" name="" value="TATA 1" readonly class="form-control">
            </div>
               <div class="col-md-6">
                <label class="form-label" for="formValidationName">Compliance Name</label>
              <input type="text" name="complaince_name" value="{{$editinfo->complaince_name}}" readonly class="form-control">
            </div>
            
         </div>
         
         <div class="row  mt-2">
             
         <div class="col-md-6">
                <label class="form-label" for="formValidationName">Period End</label>
              <input type="text" name="periodend" value="{{$editinfo->periodend}}" readonly class="form-control">
            </div>
<div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory"></span> Frequency</label>
              <input type="" id="formValidationName" class="form-control" placeholder="John Doe" name="frequency" value="{{$editinfo->frequency}} <?php $val=App\Models\frequency::where('id',$editinfo->frequency)->first(); echo $val->frequency;?>" readonly />
            </div>
            
         </div>


         <div class="row mt-4">

           {{-- <div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span> Frequency</label>
              <input type="" id="formValidationName" class="form-control" placeholder="John Doe" name="frequency" value="{{$editinfo->frequency}} <?php $val=App\Models\frequency::where('id',$editinfo->frequency)->first(); echo $val->frequency;?>" readonly />
            </div>--}}
<div class="col-md-6">
                <label class="form-label" for="formValidationName">Form Name</label>
              <input type="text" name="form" value="{{$editinfo->form}}" readonly class="form-control">
            </div>
            <div class="col-md-6">
           
  <label class="form-label" for="formValidationName"><span class="mandatory">*</span>DUE DATE</label>
              <input type="" id="formValidationName" class="form-control" placeholder="John Doe" name="due_date" value="{{$editinfo->due_date}}" readonly />
            </div>
          
</div>
<div class="row mt-4">
      <div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory"></span>EXTENDED DUE DATE</label>
              <input type="date" id="formValidationName" class="form-control" name="extended_date" value="{{$editinfo->extended_date}}"  />
            </div>
<div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span>COMPLETION DATE</label>
              <input type="date" id="formValidationName" class="form-control" name="complation_date" value="{{$editinfo->complation_date}}"  />
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-md-12">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span>Attachment</label>
              <input type="file" id="formValidationName" class="form-control" name="attacment" value="{{$editinfo->attacment}}"  />
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span>Notes</label>
              <textarea type="text" id="formValidationName" class="form-control" value="Sample Notes" name="notes" value="{{$editinfo->notes}}" readonly /></textarea>
            </div>
             <div class="col-md-6">
                <label class="form-label" for="formValidationName"><span class="mandatory"></span>COMMENTS FOR DELAY</label>
              <textarea type="text" id="formValidationName" class="form-control" name="completion_delay" value="{{$editinfo->completion_delay}}"  /></textarea>
            </div>
            
            </div>

 <div class="row mt-4">

            


            <div class="col-md-6">
           

</div>
<input type="hidden" name="status" value="{{$editinfo->status}}">

            <div class="col-md-6">
           

</div>
            <div class="input-group input-group-merge">
                    <input class="form-control" type="hidden" id="formValidationConfirmPass" name="updated_by" value="<?=Auth::user()->id?>" />
                </div>

          {{-- <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory"></span></label>
            <input class="form-control" type="button" id="formValidationEmail" name="formValidationEmail" />
          </div>
         

         </div>
--}}
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
  <script src='{{url("")}}/assets/vendor/libs/select2/select2.js'></script>
<script src='{{url("")}}/assets/vendor/libs/bootstrap-select/bootstrap-select.js'></script>
<script src='{{url("")}}/assets/vendor/libs/moment/moment.js'></script>
<script src='{{url("")}}/assets/vendor/libs/flatpickr/flatpickr.js'></script>
<script src='{{url("")}}/assets/vendor/libs/typeahead-js/typeahead.js'></script>
<script src='{{url("")}}/assets/vendor/libs/tagify/tagify.js'></script>
<script src='{{url("")}}/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js'></script>
<script src='{{url("")}}/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js'></script>
<script src='{{url("")}}/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js'></script>

  <!-- Main JS -->
  <script src='{{url("")}}/assets/js/main.js'></script>

  <!-- Page JS -->
  <script src='{{url("")}}/assets/js/form-validation.js'></script>
  
</body>

</html>
