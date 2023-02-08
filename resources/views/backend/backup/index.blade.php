<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Backup Restoration</title>
    
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
            
            
<h4 class="fw-bold py-3 mb-4">
Backup Restoration
</h4>


@if ($user->role == 0)
                
<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <!-- <h5 class="card-header">FormValidation</h5> -->
      <div class="card-body">

        <form id="formValidationExamples" class="row g-3">

          <!-- Account Details -->



         <div class="row">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName">Client Group</label>
               <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Client Group Name</option>
                <option value="Tata">Tata</option>
                <option value="Birala">Birala</option>
                <option value="Infosys">Infosys</option>
            </select>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Client Entity </label>
                <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Client Entity Name</option>
                <option value="TATA">TATA</option>
                <option value="TATA 123">TATA 123</option>
                 <option value="TATA 123">ALL</option>
                
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="formValidationName">User Name</label>
               <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Name</option>
                <option value="Tata">Miss Jesicca Archer</option>
                <option value="Birala">Mr. Roger D'cruz</option>
                <option value="Infosys">Mr. John Doe</option>
            </select>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Date</label>

                <input type="date" class="form-control" placeholder="Select Date">
                {{-- <select id="formValidationSelect2" type="date" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Date</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                </select> --}}
            </div>

            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Time</label>

                <input type="time" class="form-control" placeholder="Select Time">

                {{-- <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Time</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                </select> --}}
            </div>



          

         </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <br> 
<div class="row">
        <div class="col-md-3">
                           <button type="button" class="btn btn-primary">Restore Backup</button>
        </div>
                        
                       
</div>

@elseif($user->permissions[3]->create == 1)

<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <!-- <h5 class="card-header">FormValidation</h5> -->
      <div class="card-body">

        <form id="formValidationExamples" class="row g-3">

          <!-- Account Details -->



         <div class="row">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName">Client Group</label>
               <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Client Group Name</option>
                <option value="Tata">Tata</option>
                <option value="Birala">Birala</option>
                <option value="Infosys">Infosys</option>
            </select>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Client Entity </label>
                <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Client Entity Name</option>
                <option value="TATA">TATA</option>
                <option value="TATA 123">TATA 123</option>
                 <option value="TATA 123">ALL</option>
                
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="formValidationName">User Name</label>
               <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Name</option>
                <option value="Tata">Miss Jesicca Archer</option>
                <option value="Birala">Mr. Roger D'cruz</option>
                <option value="Infosys">Mr. John Doe</option>
            </select>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Date</label>

                <input type="date" class="form-control" placeholder="Select Date">
                {{-- <select id="formValidationSelect2" type="date" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Date</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                </select> --}}
            </div>

            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Time</label>

                <input type="time" class="form-control" placeholder="Select Time">

                {{-- <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
                <option value="">Select Time</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                </select> --}}
            </div>



          

         </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <br> 
<div class="row">
        <div class="col-md-3">
                           <button type="button" class="btn btn-primary">Restore Backup</button>
        </div>
                        
                       
</div>
    
@endif



<!-- Invoice List Table -->
<div class="card p-3 mt-3">
    
    <div class="card-datatable text-nowrap">
      <table class="dt-column-search table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Client Group</th>

            <th>Entity Name</th>
            <th>User</th>
            <th>Date</th>
            <th>Time</th>
            <th>Restored By</th>
            <th>Restored At</th>
            <th>Status</th>
          </tr>

         
        </thead>
        <tfoot>


          @foreach ($backups as $backup)

          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" >
              </div>
            </td>
            <td>{{ $backup->groups->client_group }}</td>

            <td>{{ $backup->entity_name }}</td>
             <th>Suraj</th>
            <td>{{ date('d-m-Y', strtotime($backup->date)) }}  </td>
            <td>{{ date('H:i A', strtotime($backup->time)) }}</td>
            <th>{{ $backup->users->name }}</th>
            <td>{{ date('F jS, y', strtotime($backup->date)) }}</td>
            <td>
              
              <span class="badge rounded-pill bg-label-success">Successful </span>
            
            </td>
          </tr>
              
          @endforeach
            
       
        
            
        </tfoot>
      </table>
    </div>
</div>
</div>

          
          

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
