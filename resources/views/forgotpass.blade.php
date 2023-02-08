
<!DOCTYPE html>


<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Forgot Password</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href='{{asset("/assets/img/favicon/favicon.icon")}}' />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href='{{asset("/assets/vendor/fonts/boxicons.css")}}' />
    <link rel="stylesheet" href='{{asset("/assets/vendor/fonts/fontawesome.css")}}' />
    <link rel="stylesheet" href='{{asset("/assets/vendor/fonts/flag-icons.css")}}' />

    <!-- Core CSS -->
    <link rel="stylesheet" href='{{asset("/assets/vendor/css/rtl/core.css")}}" class="template-customizer-core-css' />
    <link rel="stylesheet" href='{{asset("/assets/vendor/css/rtl/theme-default.css")}}" class="template-customizer-theme-css' />
    <link rel="stylesheet" href='{{asset("/assets/css/demo.css")}}' />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href='{{asset("/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}' />
    <link rel="stylesheet" href='{{asset("/assets/vendor/libs/typeahead-js/typeahead.css")}}' />
    <!-- Vendor -->
<link rel="stylesheet" href='{{asset("/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css")}}' />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href='{{asset("/assets/vendor/css/pages/page-auth.css")}}'>
    <!-- Helpers -->
    <script src='{{asset("/assets/vendor/js/helpers.js")}}'></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src='{{asset("/assets/vendor/js/template-customizer.js")}}'></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src='{{asset("/assets/js/config.js")}}'></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
   

</head>

<body>

  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">

      <!-- Forgot Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">

<div class="ml-5">
     <img src='{{url("")}}/assets/img/logo.jpg' style="max-width:35%; padding-left:78px;">
     </div>
</span>
              <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2" style="text-align:center;">Forgot Password? 🔒</h4><br>
          <p class="mb-4" style="color: red; text-align:center;">* Contact Admin to reset password *</p>
          {{--<form id="formAuthentication" class="mb-3" action="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-reset-password-basic.html" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
            </div>--}}
            <a href="{{url('login')}}"><button class="btn btn-primary d-grid w-100">Back To Login</button></a>
     
          {{--<div class="text-center">
            <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
              Back to login
            </a>
          </div>--}}
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>
</div>


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src='{{asset("/assets/vendor/libs/jquery/jquery.js")}}'></script>
  <script src='{{asset("/assets/vendor/libs/popper/popper.js")}}'></script>
  <script src='{{asset("/assets/vendor/js/bootstrap.js")}}'></script>
  <script src='{{asset("/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}'></script>
  
  <script src='{{asset("/assets/vendor/libs/hammer/hammer.js")}}'></script>
  <script src='{{asset("/assets/vendor/libs/i18n/i18n.js")}}'></script>
  <script src='{{asset("/assets/vendor/libs/typeahead-js/typeahead.js")}}'></script>
  
  <script src='{{asset("/assets/vendor/js/menu.js")}}'></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src='{{asset("/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js")}}'></script>
<script src='{{asset("/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js")}}'></script>
<script src='{{asset("/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js")}}'></script>

  <!-- Main JS -->
  <script src='{{asset("/assets/js/main.js")}}'></script>

  <!-- Page JS -->
  <script src='{{asset("/assets/js/pages-auth.js")}}'></script>
  
</body>

</html>

<!DOCTYPE html>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="../../../../themeselection.com/products/sneat-bootstrap-html-admin-template/index.html">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="../../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../../fonts.gstatic.com/index.html" crossorigin>
    <link href="../../../../fonts.googleapis.com/css28ebe.css?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
<link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    
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

  <!-- Content -->

  
  
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="../../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/pages-auth.js"></script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-register-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:11:17 GMT -->
</html>
