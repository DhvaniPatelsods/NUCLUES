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

@include('import.sidebar')

<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
@include('import.navbar1')
      <div class="content-wrapper">

          <div class="container-xxl flex-grow-1 container-p-y">
          @if(session('status'))
   <div class="alert alert-success">
  {{session('status')}}
  </div>
  @endif
<h4 class="fw-bold py-3 mb-4">
Client Entity
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
          <a href="javascript:void(0);"> Client Entity Information</a>
        </li>

      </ol>
     
    </nav>
<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <!-- <h5 class="card-header">FormValidation</h5> -->
      <div class="card-body">

        <form id="formValidationExamples" class="row g-3">
         <div class="row  mt-2">

            <div class="col-md-3">
                <label class="form-label" for="formValidationName">Client Group</label>
               <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly value="<?php $val=App\Models\client_group_master::where('id',$datas3->client_group)->first(); echo $val->client_group;?>" />
            </div>
            <div class="col-md-3">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span> Client Entity Name</label>
                <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly value="{{$datas3->client_entity_name}}" />
            </div>

            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Entity Type</label>
                <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly value="<?php $val=App\Models\entitytype::where('id',$datas3->entity_type)->first(); echo $val->type;?>" />
            </div>

            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Country</label>
               <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly value="<?php $val=App\Models\country::where('id',$datas3->country)->first(); echo $val->country;?>" />
            </div>
            <div class="col-md-2">
                <label class="form-label" for="formValidationSelect2"><span class="mandatory">*</span>Year End</label>
               <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly value="{{$datas3->year_end}}" />
            </div>


          

         </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<div class="card p-3 mt-3">
  
    <div class="card-datatable text-nowrap">
      <table class="dt-column-search table table-bordered">
        <thead>
          <tr>
          
            <th>Compliance Name</th>
            <th>Period End</th>
            <!-- <th>Entity Name</th> -->
            <th>Frequency</th>
            <th>Due Date</th>
            {{--<th>Entity Type</th>--}}
            <th>Form Name</th>
            {{--<th>Group Name</th>
            <th>Period End</th>--}}
            <th>Notes</th>
            <th>Status</th>
            <th>Actions</th>   
          </tr>

         
        </thead>
        <tfoot>
                  <form action="{{route('Information.store')}}" method="POST">
                    @csrf
                <input type="hidden" name="entity_id" value="{{$datas3->id}}"> 
                <input type="hidden" name="country" value="{{$datas3->country}}">
                        <input type="hidden" name="csd" value="{{$datas3->csd}}">
        
                <input type="hidden" name="mat_spv" value="{{$datas3->mat_spv}}">
        
                <input type="hidden" name="mat_manager" value="{{$datas3->mat_manager}}">
        
                  @foreach($check as $item)
                  <tr>
                   
                    <td><input type="hidden" name="complaince_name" value="{{$item->complaince_name}}">{{$item->complaince_name}}</td>
                    <td><input type="hidden" name="periodend" value="{{$item->periodend}}">{{$item->periodend}}</td>
        
                    <!-- <td>EFG Legal</td> -->
                    <td><input type="hidden" name="frequency" value="{{$item->frequency}}"><?php $val=App\Models\frequency::where('id',$item->frequency)->first(); echo $val->frequency?></td>
                     <td><input type="hidden" name="due_date" value="{{$item->due_date}}">{{$item->due_date}}</td>
                    <td><input type="hidden" name="form" value="{{$item->forms}}">{{$item->forms}}</td>
                    {{--<td><input type="hidden" name="entity_type" value="{{$item->entity_type}}"><?php $val=App\Models\entitytype::where('id',$item->entity_type)->first(); echo $val->type?></td>--}}
        
                    {{--<td><input type="hidden" name="form" value="{{$item->forms}}">{{$item->forms}}</td>--}}
                    
                     {{--<td><input type="hidden" name="group_name" value="{{$item->client_group}}"><?php $val=App\Models\client_group_master::where('id',$item->client_group)->first(); echo $val->client_group?></td>--}}
        
                    {{--<td><input type="hidden" name="periodend" value="{{$item->periodend}}">{{$item->periodend}}</td>--}}
        
                    <td><input type="hidden" name="notes" value="{{$item->notes}}">{{$item->notes}}</td>
                    <td>
                    {{-- @if($datastore->status == NULL)
                    --
                    @else
                    <span class="badge rounded-pill bg-label-success">{{ $datastore->status ? "" : $datastore->status }} </span>
                    @endif</td> --}}

                    <?php $val=App\Models\EntityStatus::where('entity_type', $item->entity_type)->first(); 
                    
                    if($item->status == 0) {

                      echo "<span class='badge rounded-pill bg-label-danger'> In Active </span>";
                     
                    } else {

                      echo "<span class='badge rounded-pill bg-label-success'> Active </span>";

                    }
                    
                    
                    ?> 
                    
                  
                    
                  </td>
                  {{--    <td><span class="badge rounded-pill bg-label-success">{{$item->status}}</span>--}}
        <td>
                     {{-- <input type="button" name="status" value="Active">Active  --}}
                        {{--<a href="{{url('/activecountry/'.$item->id)}}">--}}
                         {{--<td> <button type="submit" name="status" value="1"><i class="bx bx-check me-2" style="color: green;"></i></button>--}}
             </form>
                          <form action="{{url('cancelentity/'.$item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                             
                            <?php 
                    
                            if($item->status == 1) {
        
                              echo '<button type="submit" name="status"><i class="bx bx-x me-2" style="color: red;"></i></button>';
                             
                            } else {
        
                              echo '<button type="submit" name="status"><i class="bx bx-check me-2" style="color: green;"></i></button>';
        
                            }
                            
                            
                            ?> 

                                 

                                 
                         </form>
                          
                  </td>
                  
                  </tr>
             @endforeach
        
        
             
                </tfoot>
      </table>
    </a>
 
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

<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:41 GMT -->
</html>
