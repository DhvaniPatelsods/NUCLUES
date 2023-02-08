<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Manage Roles</title>
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
      <div class="layout-wrapper layout-content-navbar  ">
         <div class="layout-container">
            <!-- Layout wrapper -->
            @include('import.sidebar')
            <!-- / Menu -->
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
                        Role Permissions 
                     </h4>
                     <div class="row">
                        <div class="col-md-3">
                           <form   action="" method="POST">
                              @csrf
                              @if(Session::has('role_id'))
                              @php  $roleid =  Session::get('role_id') @endphp
                              @endif
                              
                              <select id="role" class="form-select select2" name="role"  onchange="getRole()" data-allow-clear="true" >
                                 <option label="Choose one"></option>
                                 @foreach ($roles as $role)
                                 <option @php echo ($role->id ==$roleid) ? 'selected' : ''; @endphp  value="{{ $role->id }}">{{ $role->role }} </option>
                                 @endforeach
                              </select>
                           </form>
                        </div>
                     </div>
                     <!-- component-section -->
                     <div class="row">
                        <div class="col-md-9">
                           <table  class="table m-3" style="border: 1px solid lightgray;">
                              <thead>
                                 <tr>
                                    {{--<th style="margin: 20px">ID</th>--}}
                                    <th style="margin: 20px">Module Name</th>
                                    <th style="margin: 20px">Permission</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 @foreach ($permissions as $permission)
                                
                                    <tr>
                                      {{-- <td>
                                          <h6>{{ $permission->id }}</h6>
                                       </td>--}}
                                       <td>
                                          <h6>{{ ucwords($permission->modules->module_name) }}</h6>
                                       </td>
                                       <td style="display: flex" class="mt-3">
                                          {{-- <input type="hidden" name="module_id" value="{{$permission->module_id}}"> --}}

                                          <form action="{{ route('admin.role_permission_update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                                             @csrf
                                          
                                          <input class="form-check-input submit" type="hidden"  value="{{$permission->create}}"  name="create">

                                          <input class="form-check-input submit" type="checkbox" onchange="submit()"
                                          @if ($permission->create == 1)
                                          checked
                                          @endif
                                          >&nbsp;
                                          Create
                                          &nbsp;

                                          </form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <form action="{{ route('admin.role_permission_update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                                             @csrf
                                          <input class="form-check-input submit" type="hidden"  value="{{$permission->read}}"  name="read">

                                          <input class="form-check-input submit" type="checkbox" onchange="submit()"  
                                          @if ($permission->read == 1)
                                          checked
                                          @endif
                                          >&nbsp;
                                          Read&nbsp;

                                          </form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <form action="{{ route('admin.role_permission_update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                                             @csrf

                                          <input class="form-check-input submit" type="hidden"  value="{{$permission->update}}"  name="update">

                                          <input class="form-check-input submit" type="checkbox" onchange="submit()" 
                                          @if ($permission->update == 1)
                                          checked
                                          @endif
                                          >&nbsp;
                                          Update&nbsp;

                                          </form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                                          <form action="{{ route('admin.role_permission_update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                                             @csrf


                                          <input class="form-check-input submit" type="hidden"  value="{{$permission->delete}}"  name="delete" 
                                       
                                          >
                                          <input class="form-check-input submit" type="checkbox" onchange="submit()" 
                                          @if ($permission->delete == 1)
                                          checked
                                          @endif
                                          >&nbsp;
                                          Delete&nbsp;

                                          </form>


                                       </td>
                                    </tr>
                                 
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!-- Menu -->
               </div>
               <!-- / Content -->
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

<script>
  $(document).on('click', '.switch', function () {
          $('form').submit();
      });
</script>
      <script>
         function getRole(){
         
         var role = $('#role').val();
         
         window.location.href = '/managerole/'+role;
         
         }
         
      </script>
   </body>
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:41 GMT -->
</html>