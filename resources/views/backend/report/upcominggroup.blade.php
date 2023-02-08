<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Nuclues</title>
    
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
            
            
<h4 class="fw-bold ">
   UPCOMING COMPLIANCES BY CLIENT GROUP  
</h4>

<nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="{{url('dashboad')}}">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{url('reports')}}">Reports</a>
        </li>
        <li class="breadcrumb-item active">Upcoming Compliances by Client Groups</li>
      </ol>
    </nav>
 {{--<form method="get" action="{{url('searchupcomingentity')}}">--}}
  <form action="{{url('searchupcoming')}}" method="get">
<div class="row">
 
    {{--<div class="col-md-2">
                            <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true" name="due_date">
                                             <option value="">Filter</option>
                                             <option value="">7 Days</option>
                                             <option value="">15 Days</option>
                                             <option value="">30 Days</option>
                                             <option value="">3 Month</option>
                                             <option value="">6 Month</option>
                                            
                                            <option value=""><a href="">Custom Range</a></option>
                                          </select>
                        </div>
                        <div class="col-md-1">
                           <button type="search" class="btn btn-secondary">
                          Search
                           </button>
                        </div>--}}

                        {{--<div class="col-md-3">
                           <div class="input-group input-group-merge">
                              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search User by Group Name" aria-label="Search..." aria-describedby="basic-addon-search31" />
                           </div>
                        </div>--}}
                        {{--<div class="col-md-9" style="text-align: end;">
                           <button type="button" class="btn btn-primary">
                           <span class="tf-icons bx bx-plus"></span>&nbsp; Download Reports
                           </button>
                        </div>
                     </div>
</form>--}}
<div class="col-md-2">
  <input type="date" name="fromDate" class="form-control">
  </div>
  <div class="col-md-2">
  <input type="date" name="toDate" class="form-control">
  </div>
   <div class="col-md-1">
 <button type="search" class="btn btn-primary">search</button>
  </div>
  <div class="col-md-7" style="text-align: end;"><a href="{{url('exportupcominggroup')}}">
                           <button type="button" class="btn btn-primary">
                           <span class="tf-icons bx bx-plus"></span>&nbsp; Download Reports
                           </button></a>
                        </div>
</div>


</form>
<!-- Invoice List Table -->
<div class="card p-3 mt-3">
    <h5 class="card-header">
        
    </h5>
    <div class="card-datatable text-nowrap">
    <table class="dt-column-search table table-bordered">
        <thead>
          <tr>
            <th></th>
           <th>Client Group </th>
           <th>Country</th>
            <th>Client Entity Name</th>
            <th> Entity Type</th>
            <th>csd</th>
            <th>Mat Manager</th>
            <th>Mat Spv</th>
            <th>Compliance Name</th>
            <th>Period ENd</th>
            <th>Frequency</th>
            <th>Form Name</th>

            <th>Due Date</th>
            <th>Extended Due Date</th>
            <th>Completion Date</th>
            {{--<th>Assigned To</th>
            <th>Last Updated By</th>--}}
            <th>Comment For Delay</th>
            <th>Notes</th>   
            <th>
               Actions
            </th> 
          
          </tr>
</thead>
        <tfoot>
           @foreach($upcominggroup as $item)
           <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" >
              </div>
            </td>
            <td><?php $val=App\Models\client_group_master::where('id',$item->group_name)->first(); echo $val->client_group;?></td>
            <td><?php $val=App\Models\country::where('id',$item->country)->first(); echo $val->country;?></td>
           <td>{{ empty($item->client_entity_name)? "-" : $item->client_entity_name }}</td>
            <td><?php $val=App\Models\entitytype::where('id',$item->entity_type)->first(); echo $val->type;?></td>
            <td><?php $val=App\Models\User::where('id',$item->csd)->first(); echo $val->name;?></td>
            <td><?php $val=App\Models\User::where('id',$item->mat_manager)->first(); echo $val->name;?></td>
            <td><?php $val=App\Models\User::where('id',$item->mat_spv)->first(); echo $val->name;?></td>
            <td>{{$item->complaince_name}}</td>
            <td>{{$item->periodend}}</td>
            <td>{{$item->form}}</td>
            <td>{{$item->frequency}}</td>
             <td>{{$item->due_date}}</td>
            <td>{{$item->extended_date}}</td>
            
            <td>{{ empty($item->complation_date)? "-" : $item->complation_date }}</td>
            {{--<td><?php $val=App\Models\User::where('id',$item->mat_spv)->first(); echo $val->name;?></td>
            <td>@if($item->updated_by == Null)
              --
              @else
              <?php $val=App\Models\User::where('id',$item->updated_by)->first(); echo $val->name?>
              @endif
            </td>--}}
            <td>{{ empty($item->completion_delay)? "-" : $item->completion_delay }}</td>
            
            
            <td>{{$item->notes}}</td>

            
              <td>
                <a href="{{url('/edit-information/'.$item->id)}}"> <i class="bx bx-edit me-2" style="color: blue;"></i></a>

                <a href="{{url('deletemanage/'.$item->id)}}"><i class="bx bx-trash me-2" style="color: red;"></i></a>
 
             </td>
          
           
            
          </tr>
        
            @endforeach
        </tfoot>
      </table>
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
