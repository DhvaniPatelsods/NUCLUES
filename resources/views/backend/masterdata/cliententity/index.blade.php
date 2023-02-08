<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:31 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Client Entity</title>
    
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
  Client Entity 
</h4>
@if(session('status'))
   <div class="alert alert-success">
  {{session('status')}}
  </div>
  @endif
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Master Data Management</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Client Entity</a>
        </li>

       
      </ol>
    </nav>

                      <div class="row">
                        <div class="col-md-3">
                           <div class="input-group input-group-merge">
                              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search User by Client Entity" aria-label="Search..." aria-describedby="basic-addon-search31" />
                           </div>
                        </div>
                        <div class="col-md-9" style="text-align: end;">
                         
                      @if ($user->role == 0)
                          
                      <a href="{{url('createentity')}}">
                        <button type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Import Entity
                        </button>
                      </a>
                    
                       <a href="{{url('expertentity')}}">
                        <button type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-plus"></span>&nbsp; Export Entity
                        </button>
                      </a>
                        
                         <a href="{{url('client_entity/create')}}">
                          <button type="button" class="btn btn-primary">
                          <span class="tf-icons bx bx-plus"></span>&nbsp; Add Client Entity
                          </button>
                        </a>
           
                        @elseif($user->permissions[2]->create == 1)

                        <a href="{{url('createentity')}}">
                          <button type="button" class="btn btn-primary">
                          <span class="tf-icons bx bx-plus"></span>&nbsp; Import Entity
                          </button>
                        </a>
                      
                         <a href="{{url('expertentity')}}">
                          <button type="button" class="btn btn-primary">
                          <span class="tf-icons bx bx-plus"></span>&nbsp; Export Entity
                          </button>
                        </a>
           
                                
                          <a href="{{url('client_entity/create')}}">
                            <button type="button" class="btn btn-primary">
                            <span class="tf-icons bx bx-plus"></span>&nbsp; Add Client Entity
                            </button>
                          </a>
                             
                        @endif
                        </div>
                     </div>

<!-- Invoice List Table -->


<!-- Column Search -->
<div class="card p-3 mt-3">
  
    <div class="card-datatable text-nowrap">
      <table class="dt-column-search table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Client Group</th>
            <th>Entity Name</th>
            <th>Country</th>
            <th>Entity Type</th>
            <th>Year End</th>
            <th>Status</th>
            <th>Date Of Incorporation</th>
            <th>Company Registation Number</th>
            <th>Tax Registation Number</th>
            <th>VAT/GST Registation Number</th>
            <th>Witholding Tax Registation Number</th>
            <th>Social Security Number</th>
            <th>Other Registation Number</th>
            <th>Scope Of Work</th>
            <th>CSD</th>
            <th>Mat Manager</th>
            <th>Mat Spv</th>
            <th>Affiliate Name</th>
            <th>Affiliate EMail</th>
            <th>Affiliate Phone</th>
            <th>Actions</th>
          </tr>

         
        </thead>
        <tfoot>
          <?php $i=0 ?>
          @foreach($master as $item)
            
          <tr>
                <?php $i++ ?>
            <td>
              <div class="form-check"><label>{{$i}}</label>
                <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" >
              </div>
            </td>
            <td><?php $val=App\Models\client_group_master::where('id',$item->client_group)->first(); echo $val->client_group?></td>
            <td>{{$item->client_entity_name}}</td>
            <td><?php $val=App\Models\country::where('id',$item->country)->first(); echo $val->country;?></td>
            <td><?php $val=App\Models\entitytype::where('id',$item->entity_type)->first(); echo $val->type;?></td>
            <td>{{$item->year_end}}</td>
<td>
              @if($item->status == 1)
              <span class="badge rounded-pill bg-label-success">Active</span>
              @else
               <span class="badge rounded-pill bg-label-danger">In Active</span>
               @endif
            </td>            <td>{{$item->date}}</td>
            <td>{{$item->company_rg_no}}</td>
            <td>{{$item->tax_rg_no}}</td>
            <td>{{$item->gst_no}}</td>
            <td>{{$item->withholding_tax_rg_no}}</td>
            <td>{{$item->social_security_no}}</td>
            <td>{{$item->anyother_no}}</td>
            <td>{{$item->scope_work}}</td>
            <td><?php $val=App\Models\User::where('id',$item->csd)->first(); echo $val->name?></td>
            <td><?php $val=App\Models\User::where('id',$item->mat_manager)->first(); echo $val->name?></td>
             <td><?php $val=App\Models\User::where('id',$item->mat_spv)->first(); echo $val->name?></td>
            <td>{{$item->affiliate_name}}</td>
            <td>{{$item->affiliate_email}}</td>
            <td>{{$item->affiliate_phone}}</td>

            <td>

              @if ($user->role == 0)
              <a href="{{url('backup-entity/'.$item->client_entity_name,$item->id)}}"><i class="bx bxs-analyse me-2" style="color: blue;" value="{{$item->id}}"></i> 

                
              <a href="{{url('view/'.$item->entity_type,$item->id)}}"><i class="bx bx-info-circle me-2" style="color: green;" value="{{$item->id}}"></i> 
                <a href="{{url('client_entity/'.$item->id.'/edit')}}"><i class="bx bx-edit me-2" style="color: blue;"></i>
                </a>
                         {{-- <input type="hidden" ><a href="{{url('viewid?id='.$item->id)}}"></a>--}}
             
              @elseif($user->permissions[2]->update == 1)
              
              <a href="{{url('backup-entity/'.$item->client_entity_name,$item->id)}}"><i class="bx bxs-analyse me-2" style="color: blue;" value="{{$item->id}}"></i> 

              <a href="{{url('view/'.$item->entity_type,$item->id)}}"><i class="bx bx-info-circle me-2" style="color: green;" value="{{$item->id}}"></i> 
                <a href="{{url('client_entity/'.$item->id.'/edit')}}"><i class="bx bx-edit me-2" style="color: blue;"></i>
                </a>
                         {{-- <input type="hidden" ><a href="{{url('viewid?id='.$item->id)}}"></a>--}}
             </a>
                  
              @endif



              @if ($user->role == 0)
                
              <a href="{{url('delete-entity/'.$item->id)}}">
                <i class="bx bx-trash me-2" style="color: red;"></i>
             </a>

              @elseif($user->permissions[2]->delete == 1)

                      <a href="{{url('delete-entity/'.$item->id)}}">
                         <i class="bx bx-trash me-2" style="color: red;"></i>
                      </a>
                  
              @endif

              



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
   <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->
<script src="assets/js/tables-datatables-advanced.js"></script>
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
  
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-invoice-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:09:41 GMT -->
</html>
