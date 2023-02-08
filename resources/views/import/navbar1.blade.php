<div>{{--<form action="{{url('selectentity')}}" method="get">--}}
  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="col-md-8">
        <div class="input-group input-group-merge">
                             {{--<span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search By Client Entity" aria-label="Search..." aria-describedby="basic-addon-search31" name="entity_type" />--}}
                           </div>

                         </div>

&nbsp; &nbsp;
                    <div class="col-md-1">
                      {{--<button type="submit" class="btn btn-primary"></span> Search</button>--}}
                    </div>
        <!-- /Search -->
{{--</form>--}}
              
  &nbsp;&nbsp;
&nbsp;

          <div>
          <form action="{{url('selectyear')}}" method="get">
             <div class="input-group input-group-merge">
             {{-- <div class="avatar avatar-online">
                <img src="assets/img/avatars/1.png"  class="w-px-40 h-auto rounded-circle">
              </div>--}}
            </a>
           <select data-allow-clear="true" name="complation_date" class="form-control select2" style="padding-right: 5px;">
                                             <option value="2022">2022 </option>
                                             <option value="2025">2025</option>
                                             <option value="2024">2024</option>
                                             <option value="2023">2023</option>
                                             <option value="2022">2022</option>
                                             <option value="2021">2021</option>
                                             <option value="2020">2020</option>
                                             <option value="2019">2019</option>
                                            
                                          </select>
                                    
                                          <button style="background-color: White; border-color:white;"><span class="bx bx-search"> </span></button>
</div>
</div>
                                    
                
           
          </li>
          </form>
          <!--/ User -->

          <!-- Notification -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
        
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Notification</h5>
                  <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
               <ul class="list-group list-group-flush">
                   @foreach($notification as $item)
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src='{{url("")}}/assets/img/avatars/blank.jpg'  class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <p class="mb-0">{{$item->activity}}</p>
                        <small class="text-muted">{{$item->date}} / {{$item->time}}</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                 @endforeach
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top">
                <a href="{{url('activity')}}" class="dropdown-item d-flex justify-content-center p-3">
                  View all notifications
                </a>
              </li>
            </ul>
          </li>
          <!--/ Notification -->
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
               <img src='{{url("")}}/assets/img/avatars/blank.jpg'  class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.php">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src='{{url("")}}/assets/img/avatars/blank.jpg'  class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{url('userprofile')}}">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="{{url('security')}}">
                  <i class="bx bx-cog me-2"></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>
            
              <li>
               
                <div class="dropdown-divider"></div>
              </li>
              @if(auth()->check())
              <li>
                 <a class="dropdown-item" href="{{url('userlogout')}}">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Logout</span>
                </a>
                  
             
              </li>
              @endif
            </ul>
          </li>
          <!--/ User -->
          
          

        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>
      
      
</nav>

