
<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-account-settings-security.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:10:50 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Nuclues - Security </title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="themeselection.com/products/sneat-bootstrap-html-admin-template/index.html">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="fonts.googleapis.com/index.html">
    <link rel="preconnect" href="fonts.gstatic.com/index.html" crossorigin>
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
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-account-settings.css" />
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
            <!-- . Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               @include('import.navbar1')
  

  
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Security
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      {{--<li class="nav-item"><a class="nav-link" href="profile.php"><i class="bx bx-user me-1"></i> My Profile</a></li>--}}
      <li class="nav-item"><a class="nav-link active" href="{{url('security')}}"><i class="bx bx-lock- me-1"></i> Security</a></li>
    </ul>
    <!-- Change Password -->
    <div class="card mb-4">
      <h5 class="card-header">Change Password</h5>
      <div class="card-body">
        
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="currentPassword">Current Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="text" name="password"  value="{{$security->real_password}}" readonly />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
          </div>
          
          <div class="row">
            <form  method="POST" action="{{url('userpassword/'.$security->id)}}">
          @csrf
          @method('PUT')
            <div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="newPassword">New Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" name="password"   />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            {{--<div class="mb-3 col-md-6 form-password-toggle">
              <label class="form-label" for="confirmPassword">Confirm New Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" name="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>--}}
            <div class="col-12 mb-4">
              <p class="fw-semibold mt-2">Password Requirements:</p>
              <ul class="ps-3 mb-0">
                <li class="mb-1">
                  Minimum 8 characters long - the more, the better
                </li>
                <li class="mb-1">At least one lowercase character</li>
                <li>At least one number, symbol, or whitespace character</li>
              </ul>
            </div>
            <div class="col-12 mt-1">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--/ Change Password -->

    
    <!-- Modal -->
    <!-- Enable OTP Modal -->
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-5">Enable One Time Password</h3>
        </div>
        <h6>Verify Your Mobile Number for SMS</h6>
        <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
        <form id="enableOTPForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">+1</span>
              <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Enable OTP Modal -->

    <!--/ Recent Devices -->

  </div>
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
  <script src="assets/vendor/libs/select2/select2.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/pages-account-settings-security.js"></script>
<script src="assets/js/modal-enable-otp.js"></script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/pages-account-settings-security.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:10:51 GMT -->
</html>
