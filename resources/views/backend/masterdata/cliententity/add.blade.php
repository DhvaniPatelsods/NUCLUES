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
          @include('import.navbar1')

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  Add New Client Entity
</h4>

<nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Master Data Management</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{url('client_entity')}}">Client Entity</a>
        </li>

        <li class="breadcrumb-item">
          <a href="javascript:void(0);">New Client Entity</a>
        </li>

      </ol>
    </nav>

  @if(session('status'))
   <div class="alert alert-danger">
  {{session('status')}}
  </div>
  @endif
<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <!-- <h5 class="card-header">FormValidation</h5> -->
      <div class="card-body">

        <form id="formValidationExamples" class="row g-3" action="{{route('client_entity.store')}}" method="POST" enctype="multipart/form-data">
             @csrf

          <!-- Account Details -->



         <div class="row  mt-2">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"> <span class="mandatory">*</span>Client Group </label>
               <select id="formValidationSelect2" name="client_group" class="form-select select2" data-allow-clear="true">
                 <option>Select Group</option>
                @foreach($group as $item)
               
                <option value="{{$item->id}}">{{$item->client_group}}</option>
                @endforeach
            </select>
             @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('client_group') }}</div>
                                 @endif
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Country</label>
                <select id="formValidationSelect2" name="country" class="form-select select2" data-allow-clear="true">
                     <option>Select country</option>
               @foreach($country as $item)
               
                <option value="{{$item->id}}">{{$item->country}}</option>
                @endforeach
                </select>
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('country') }}</div>
                                 @endif
            </div>

            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Client Entity Name</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Client Entity Name" name="client_entity_name" />
             @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('client_entity_name') }}</div>
                                 @endif
            </div>

            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Entity Type</label>
                <select id="formValidationSelect2" name="entity_type" class="form-select select2" data-allow-clear="true">
                    <option>Select ENtity Type</option>
                @foreach($entitytype as $item)
               
                <option value="{{$item->id}}">{{$item->type}}</option>
                @endforeach
                </select>
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('entity_type') }}</div>
                                 @endif
            </div>
         </div>
    <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span> Year End</label>
                <input type="date" id="formValidationName" class="form-control" placeholder="John Doe" name="year_end" />
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('year_end') }}</div>
                                 @endif
            </div>
            <div class="col-md-3">
                <br>
            <label class="switch switch-info">
            <span class="switch-label">
                                <label class="form-check-label" for="userManagementRead">
                                    Dormant
                                </label>
                            </span>

                            <input type="checkbox" class="switch-input" name="status" checked value="1" />
                            <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="bx bx-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="bx bx-x"></i>
                              </span>
                            </span>
                            <span class="switch-label">
                                <label class="form-check-label" for="userManagementRead">
                                    Active
                                </label>
                            </span>
                          </label>
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory">*</span> Date of Incorporation</label>
                <input type="date" id="formValidationName" class="form-control" placeholder="John Doe" name="date" />

               @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('date') }}</div>
                                 @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass"> Company Registration Number</label>
                <div class="input-group input-group-merge">
                    <input class="form-control" type="text" id="formValidationConfirmPass" name="company_rg_no" placeholder="Enter Company Registration Number" aria-describedby="multicol-confirm-password2" />
                </div>
                </div>
            </div>

         </div>


         <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"> VAT/GST Registration</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Enter VAT/GST Registration" name="gst_no" />
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationEmail"> Tax Registration Number</label>
                <input class="form-control" type="text" id="formValidationEmail" name="tax_rg_no" placeholder="Enter Tax Registration Number" />
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"> Withholding Tax Registration No</label>
                <input class="form-control" type="text" id="formValidationEmail" name="withholding_tax_rg_no" placeholder="Enter Withholding Tax Registration Number" />

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass"> Social Security Number</label>
                <input class="form-control" type="text" id="formValidationEmail" name="social_security_no" placeholder="Enter Social Security Number" />

                </div>
            </div>

         </div>

         <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"> Any Other Registration Number</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Enter Any Other Registration Number " name="anyother_no" />
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationName"> Scope Of Work</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Enter Any Other Registration Number " name="scope_work" />
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <label class="form-label" for="formValidationEmail"><span class="mandatory">*</span> CSD </label>
                <select id="formValidationSelect2" name="csd" class="form-select select2" data-allow-clear="true">
                 <option>Select CSD</option>
                @foreach($csd as $item)
               
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                </select>
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('csd') }}</div>
                                 @endif
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory">*</span> MAT Manager</label>
                <select id="formValidationSelect2" name="mat_manager" class="form-select select2" data-allow-clear="true">
                <option>Select MAT MANAGER</option>
                @foreach($mat as $item)
                
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
             @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('mat_manager') }}</div>
                                 @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationConfirmPass"><span class="mandatory">*</span>MAT SPV</label>
                <select id="formValidationSelect2" name="mat_spv" class="form-select select2" data-allow-clear="true">
                 <option>Select MAT SPV</option>
                 @foreach($spv as $item)
               
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
             @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('mat_spv') }}</div>
                                 @endif
                </div>
            </div>
             <div class="col-md-3">
               <label class="form-label" for="formValidationConfirmPass"><span class="mandatory"></span>Other User</label>
                <select id="formValidationSelect2" name="other_user" class="form-select select2" data-allow-clear="true">
                 <option>Select Other User</option>
                 @foreach($manager as $item)
               
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
              
            </div>

         </div>
         <h4 class="fw-bold py-3 mb-4">
   Affiliates Name 
</h4>

         <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span> Affiliates Name</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Affliate's Name 1" name="affiliate_name" />
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('affiliate_name') }}</div>
                                 @endif
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationEmail"><span class="mandatory">*</span> Affiliates Email ID</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affiliate_email" placeholder="Enter Affliate's Email ID 1" />
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('affiliate_email') }}</div>
                                 @endif
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory">*</span> Affiliates Contact Number</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affiliate_phone" placeholder="Enter Affliate's Account Number 1" />
                 @if (count($errors) > 0)
                                 <div class="noti alert  alert text-danger">{{ $errors->first('affiliate_phone') }}</div>
                                 @endif
</div>

            </div>
           {{--<br>
             <h6 class="py-3 mb-4">
  Add MoreAffliates's  (Optional *)
</h6>

         <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"><span class="mandatory">*</span> Affiliates Name</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Affliate's Name 2" name="affilate_name2" />
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationEmail"><span class="mandatory">*</span> Affiliates Email ID</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affilate_email2" placeholder="Enter Affliate's Email ID 2" />
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory">*</span> Affiliates Contact Number</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affilate_phone2" placeholder="Enter Affliate's Account Number 2" />
</div>
            </div>--}}
            
            
            <div class="col-md-3">
                  <label class="form-label" for="formValidationName"> Responsibility</label>
                <textarea type="text" id="formValidationName" class="form-control" placeholder="Enter Responsibility 1" name="responsibility" /></textarea>
          
                </div>
                </div>
          {{-- <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory"></span></label>
            <input class="form-control" type="button" id="formValidationEmail" name="formValidationEmail" />
          </div>
         

         </div>
         
--}}

 <div class="row mt-4">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName"><span class="mandatory"></span> Affiliates Name</label>
                <input type="text" id="formValidationName" class="form-control" placeholder="Affliate's Name 2" name="affiliate_name2" />
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationEmail"><span class="mandatory"></span> Affiliates Email ID</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affiliate_email2" placeholder="Enter Affliate's Email ID 2" />
            </div>

            <div class="col-md-3">
                <div class="form-password-toggle">
                <label class="form-label" for="formValidationPass"><span class="mandatory"></span> Affiliates Contact Number</label>
                <input class="form-control" type="text" id="formValidationEmail" name="affiliate_phone2" placeholder="Enter Affliate's Account Number 2" />
</div>
            </div>
 <div class="col-md-3">
                  <label class="form-label" for="formValidationName"> Responsibility</label>
                <textarea type="text" id="formValidationName" class="form-control" placeholder="Enter Responsibility 2" name="responsibility2" /></textarea>
          
                </div>
         </div>
         



          

 <div class="col-12 mt-5">
            <button type="submit" name="submitButton" class="btn btn-primary">Add Affiliates </button>
        
         
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
