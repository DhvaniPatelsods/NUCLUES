<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:05:11 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Nuclues Dashboard</title>
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
      <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
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
 
                     <div class="row">

                        <div class="col-lg-6 mb-1 order-0">
                           <div class="card">
                              <div class="d-flex align-items-end row">
                                 <div class="col-sm-7">
                                    <div class="card-body">
                                       <h5 class="card-title text-primary">Total Client Groups</h5>
                                       <h1><?=count($group)?></h1>
                                    </div>
                                 </div>
                                   {{--<div class="col-sm-4 text-center text-sm-left">
                                  <div class="card-body pb-0 px-0 px-md-4">
                                       <img src="assets/img/avatars/group.png" height="120" data-app-dark-img="illustrations/group.png" data-app-light-img="illustrations/group.png">
                                    </div>
                                 </div>--}}
                              </div>
                           </div>
                           <br>
                          <div class="card">
                              <div class="d-flex align-items-end row">
                                 <div class="col-sm-7">
                                    <div class="card-body">
                                       <h5 class="card-title text-primary">Total Client Entities</h5>
                                       <h1><?=count($cliententity)?></h1>
                                    </div>
                                 </div>
                                 {{--<div class="col-sm-4 text-center text-sm-left">
                                    <div class="card-body pb-0 px-0 px-md-4">
                                       <img src="assets/img/avatars/entity.png" height="100" style="padding-bottom:18px;" width="150" data-app-dark-img="illustrations/entity.png" data-app-light-img="illustrations/entity.png">
                                    </div>
                                 </div>--}}
                              </div>
                           </div>
                       
                        <br>
                           <div class="card">
                              <div class="d-flex align-items-end row">
                                 <div class="col-sm-7">
                                    <div class="card-body">
                                       <h5 class="card-title text-primary">Total Compliance</h5>
                                       <h1><?=count($complience)?></h1>
                                    </div>
                                 </div>
                                 {{--<div class="col-sm-4 text-center text-sm-left">
                                    <div class="card-body pb-0 px-0 px-md-4">
                                       <img src="assets/img/avatars/country.png" height="100" style="padding-bottom:19px;" data-app-dark-img="avatars/country.png" data-app-light-img="avatars/country.png">
                                    </div>
                                 </div>--}}
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-20 col-6 mb-4">
                                 <div class="card" style="padding-bottom:11%;">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                            {{-- <img src="assets/img/icons/unicons/wallet-info.png"  class="rounded">--}}
                                          </div>
                                          
                                       </div>
                                        <h5 class="card-title text-primary">Undue Compliance</h5>
                                    
                                       <h1 class="card-title text-nowrap mb-1"><?=count($undue)?></h1>
                                    
                                    </div>
                                 </div>
                            <br><br>
                                 <div class="card" style="padding-bottom:9%;">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                       <div class="avatar flex-shrink-0">
                                              {{--<img src="assets/img/icons/unicons/wallet-info.png"  class="rounded">>--}}
                                          </div>
                                          
                                       </div>
                                     <h5 class="card-title text-primary">Completed Compliance</h5>
                                       <h1 class="card-title text-nowrap mb-1"><?=count($completed)?></h1>
                                       
                                    </div>
                                 </div>
                             </div>
                             <br>
                        <div class="col-lg-3 col-md-20 col-6 mb-4">
                                 <div class="card" style="padding-bottom:11%;">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                             {{--<img src="assets/img/icons/unicons/wallet-info.png"  class="rounded">--}}
                                          </div>
                                       </div>
                                      <h5 class="card-title text-primary">Overdue Compliance</h5>
                                       <h1 class="card-title text-nowrap mb-1"><?=count($overdue)?></h1>
                                    </div>
                                 </div><br><br>
                              <div class="card" style="padding-bottom:11%;">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                             {{--<img src="assets/img/icons/unicons/wallet-info.png"  class="rounded">--}}
                                          </div>
                                       </div>
                                       <h5 class="card-title text-primary">Delayed Compliance &nbsp;</h5>
                                       <h1 class="card-title text-nowrap mb-1"><?=count($delay)?></h1>
                                       
                                    </div>
                               </div>
                              </div>{{--
                        <div class="col-lg-6 mb-2 order-0">
                           <div class="card">
                              <div class="d-flex align-items-end row">
                                 <div class="col-sm-7">
                                    <div class="card-body">
                                       <h5 class="card-title text-primary">Total Compliance</h5>
                                       <h1>3489</h1>
                                    </div>
                                 </div>
                                 <div class="col-sm-5 text-center text-sm-left">
                                    <div class="card-body pb-0 px-0 px-md-4">
                                       <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>--}}
                        {{--<div class="col-lg-3 col-md-12 order-1">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                             <img src="assets/img/icons/unicons/wallet-info.png"  class="rounded">
                                          </div>
                                          <div class="dropdown">
                                             <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="bx bx-dots-vertical-rounded"></i>
                                             </button>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <span>Total Client Group</span>
                                       <h3 class="card-title text-nowrap mb-1">5547</h3>
                                       <small class="text-success fw-semibold"><i class='bx bx-up-arrow-'></i> +28.42%</small>
                                    </div>
                                
                              </div>--}}

                              
                        <!-- Total Revenue -->
                        <!--/ Total Revenue -->
                        <!-- <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                           <div class="row">
                              <div class="col-6 mb-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                             <img src="assets/img/icons/unicons/paypal.png" ="Credit Card" class="rounded">
                                          </div>
                                          <div class="dropdown">
                                             <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="bx bx-dots-vertical-rounded"></i>
                                             </button>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="d-block mb-1">Payments</span>
                                       <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                       <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-'></i> -14.82%</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 mb-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="card-title d-flex align-items-start justify-content-between">
                                          <div class="avatar flex-shrink-0">
                                             <img src="assets/img/icons/unicons/paypal.png" ="Credit Card" class="rounded">
                                          </div>
                                          <div class="dropdown">
                                             <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <i class="bx bx-dots-vertical-rounded"></i>
                                             </button>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="d-block mb-1">Payments</span>
                                       <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                       <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-'></i> -14.82%</small>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 mb-4">
                                 <div class="card">
                                    <div class="card-body pb-2">
                                       <span class="d-block fw-semibold mb-1">Revenue</span>
                                       <h3 class="card-title mb-1">425k</h3>
                                       <div id="revenueChart"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                    
                 

                     </div>
                     <br>
                     <div class="card">
  
                                       <h5 class="card-title text-primary" style="padding-left:15px; padding-top:10px;">COMPLIANCE MANAGEMENT</h5>

</hr>
      <ul class="nav nav-pills" role="tablist" style="padding-top:12px; padding-bottom:19px;">
          
      &nbsp;   &nbsp;<li>
          {{--<select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">--}}

            <form action="{{ route('filter') }}" method="get">
               @csrf
               <select name="days" class="form-control select-box select2" onchange="this.form.submit()" >
                                             <option value="">Filter</option>
                                             <option value="7">7 Days</option>
                                             <option value="15">15 Days</option>
                                             <option value="30">30 Days</option>
                                             <option value="90">3 Month</option>
                                             <option value="120">6 Month</option>
                                             <option value="range"><u class="color:black">Custom Range</u></option>
                     </select>

                  </form>
        </li>

      &nbsp;&nbsp;
        {{-- <div class="col-md-2">
                           <div class="input-group input-group-merge">
                              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search User by Client Group" aria-label="Search..." aria-describedby="basic-addon-search31" />
                           </div>
                        </div>--}}
     
     


     <div class="col-md-10" style="text-align: end;">
        
      @if ($user->role == 0)

      <a href="{{url('client_group/create')}}">
         <button type="button" class="btn btn-primary"><span class="tf-icons bx bx-plus"></span> Create Master Group
          </button></a>
     
    
       <a href="{{url('client_entity/create')}}">
         <button type="button" class="btn btn-primary"><span class="tf-icons bx bx-plus"></span> Create Master Entity</button>
       </a>
      
       
       <a href="{{url('country_complience/create')}}">
         <button type="button"  class="btn btn-primary"><span class="tf-icons bx bx-plus"></span>Create Compliance</button></a>
       
          
      @elseif($user->permissions[2]->create == 1)

      <a href="{{url('client_group/create')}}">
         <button type="button" class="btn btn-primary"><span class="tf-icons bx bx-plus"></span> Create Master Group
          </button></a>
     
    
       <a href="{{url('client_entity/create')}}">
         <button type="button" class="btn btn-primary"><span class="tf-icons bx bx-plus"></span> Create Master Entity</button>
       </a>
      
       
       <a href="{{url('country_complience/create')}}">
         <button type="button"  class="btn btn-primary"><span class="tf-icons bx bx-plus"></span>Create Compliance</button></a>
       
          
      @endif
</div>
     
   


 
 
 <div class="card p-3 mt-3">    

    <div class="card-datatable text-nowrap">
      <table class="dt-column-search table table-bordered">
       <thead>
          <tr>
            <th></th>
           <th>Client Group </th>
           <th>Country</th>
            <th>Client Entity Name</th>
            <th>Compliance Name</th>
            <th>Period ENd</th>
            <th>Frequency</th>
            <th>Form Name</th>
            
            <th>Due Date</th>
            <th>Extended Due Date</th>
            <th>Completion Date</th>
            <th>Comment For Delay</th>
            <th>Notes</th>
            <th>Attachments</th>
            {{--<th>Created By</th>
            <th>Updated By</th>--}}

            <th>Actions</th>
          </tr>
</thead>
       <tfoot>

         @if ($user->role == 0)


         @foreach($info as $item)
         <tr>
           <td>
            <div class="form-check">
               <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" >
             </div>
             </div>
           </td>
           <td><?php $val=App\Models\client_group_master::where('id',$item->group_name)->first(); echo $val->client_group;?></td>
           <td><?php $val=App\Models\country::where('id',$item->country)->first(); echo $val->country;?></td>
           <td>{{ empty($item->client_entity_name)? "-" : $item->client_entity_name }}</td>
           <td>{{$item->complaince_name}}</td>
           <td>{{$item->periodend}}</td>
           <td><?php $val=App\Models\frequency::where('id',$item->frequency)->first(); echo $val->frequency;?></td>
           <td>
             {{$item->form}}
              </td>
              
              <td>{{$item->due_date}}</td>
              <td>{{$item->extended_date}}</td>
           <td>{{ empty($item->complation_date)? "-" : $item->complation_date }}</td>
           <td>{{ empty($item->completion_delay)? "-" : $item->completion_delay }}</td>
           <td>{{$item->notes}}</td>
           
           <td>{{$item->attacment}}</td>
           {{-- <td>{{ $item->created_by }}</td>
           <td>{{ $item->updated_by }}</td> --}}
           {{--<td>@if($item->updated_by == 0)
               --
               @else
               <?php $val=App\Models\User::where('id', $item->created_by)->first();  echo $val->name;?>@endif</td>
           
           
           <td>
               @if($item->updated_by == 0)
               --
               @else
               
               <?php $val=App\Models\User::where('id', $item->updated_by)->first();  echo ($val->name == 0)? "" : $val->name;?>
               @endif
               </td> --}}
           <td>

              @if ($user->role == 0)
               
              <a href="{{url('/edit-information/'.$item->id)}}"> <i class="bx bx-edit me-2" style="color: blue;"></i></a>

    
                  @elseif($user->permissions[2]->update == 1)
    
                  <a href="{{url('/edit-information/'.$item->id)}}"> <i class="bx bx-edit me-2" style="color: blue;"></i></a>

    
                  @endif


                  @if ($user->role == 0)
                  <a href="{{url('deletemanage/'.$item->id)}}"><i class="bx bx-trash me-2" style="color: red;"></i></a>

        
                      @elseif($user->permissions[2]->delete == 1)
        
                      <a href="{{url('deletemanage/'.$item->id)}}"><i class="bx bx-trash me-2" style="color: red;"></i></a>

        
                      @endif




           </td>
           
         </tr>
       
           @endforeach


             
         @else

         @foreach($info as $item)
         <tr>
           <td>
            <div class="form-check">
               <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" >
             </div>
             </div>
           </td>
           <td><?php $val=App\Models\client_group_master::where('id',$item->group_name)->first(); echo $val->client_group;?></td>
           <td><?php $val=App\Models\country::where('id',$item->country)->first(); echo $val->country;?></td>
           <td><?php $val=App\Models\client_entity_master::where('id',$item->entity_id)->first(); echo $val->client_entity_name;?></td>
           <td>{{$item->complaince_name}}</td>
           <td>{{$item->periodend}}</td>
           <td><?php $val=App\Models\frequency::where('id',$item->frequency)->first(); echo $val->frequency;?></td>
           <td>
             {{$item->form}}
              </td>
              
              <td>{{$item->due_date}}</td>
              <td>{{$item->extended_date}}</td>
           <td>{{ empty($item->complation_date)? "-" : $item->complation_date }}</td>
           <td>{{ empty($item->completion_delay)? "-" : $item->completion_delay }}</td>
           <td>{{$item->notes}}</td>
           
           <td>{{$item->attacment}}</td>
           {{-- <td>{{ $item->created_by }}</td>
           <td>{{ $item->updated_by }}</td> --}}
           {{--<td>@if($item->updated_by == 0)
               --
               @else
               <?php $val=App\Models\User::where('id', $item->created_by)->first();  echo $val->name;?>@endif</td>
           
           
           <td>
               @if($item->updated_by == 0)
               --
               @else
               
               <?php $val=App\Models\User::where('id', $item->updated_by)->first();  echo ($val->name == 0)? "" : $val->name;?>
               @endif
               </td> --}}
           <td>

              @if ($user->role == 0)
               
              <a href="{{url('/edit-information/'.$item->id)}}"> <i class="bx bx-edit me-2" style="color: blue;"></i></a>

    
                  @elseif($user->permissions[2]->update == 1)
    
                  <a href="{{url('/edit-information/'.$item->id)}}"> <i class="bx bx-edit me-2" style="color: blue;"></i></a>

    
                  @endif


                  @if ($user->role == 0)
                  <a href="{{url('deletemanage/'.$item->id)}}"><i class="bx bx-trash me-2" style="color: red;"></i></a>

        
                      @elseif($user->permissions[2]->delete == 1)
        
                      <a href="{{url('deletemanage/'.$item->id)}}"><i class="bx bx-trash me-2" style="color: red;"></i></a>

        
                      @endif




           </td>
           
         </tr>
       
           @endforeach
             
         @endif


         
        </tfoot>
      </table>
    </div>
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

      <script>
         $(document).on('change', 'select.select-box', function (e) {
    $(this).closest('form').submit();
});
      </script>
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

   </body>
   <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Sep 2022 06:08:20 GMT -->
</html>