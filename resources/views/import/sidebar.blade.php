<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="{{url('dashboad')}}" class="app-brand-link">
     

      <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2"></span> -->
     <div class="ml-5">
     <img src='{{url("")}}/assets/img/logo.jpg' style="max-width:40%; margin-left:50px;">
     </div>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->

    {{--@if ($user->role == 0)--}}
    <li class="menu-item active open">
      <a href="{{url('dashboad')}}" class="menu-link ">
        <i class="menu-icon tf-icons bx bx-key"></i>
        <div data-i18n="Dashboards">Dashboards</div>
      </a>
     
    </li>

                           {{-- @elseif($user->permissions[0]->read == 1)--}}
                            {{--<li class="menu-item active open">
                              <a href="{{url('dashboad')}}" class="menu-link ">
                                <i class="menu-icon tf-icons bx bx-key"></i>
                                <div data-i18n="Dashboards">Dashboards</div>
                              </a>
                             
                            </li>--}}
                            {{--@endif--}}


   

    <!-- Layouts -->
    

    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Manage &amp; System</span>
    </li>
    {{--<li class="menu-item">
      <a href="compliancemanagement.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar"></i>
        <div >Compliance Management</div>
      </a>
    </li>--}}

   

    @if ($user->role == 0)
    <li class="menu-item">
      <a href="{{url('reports')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-circle"></i>
        <div > Reports</div>
      </a>
    </li>

     @elseif($user->permissions[1]->read == 1)
     <li class="menu-item">
      <a href="{{url('reports')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user-circle"></i>
        <div > Reports</div>
      </a>
    </li>
     @endif




    @if ($user->role == 0)
    <li class="menu-item">
      <a href="{{url('activity')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-data"></i>
        <div > Activity Log</div>
      </a>
    </li>

     @elseif($user->permissions[6]->read == 1)
                            <li class="menu-item">
                              <a href="{{url('activity')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-data"></i>
                                <div > Activity Log</div>
                              </a>
                            </li>
     @endif
                            
 


    @if ($user->role == 0)
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-food-menu'></i>
        <div >Master Data Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('client_group')}}" class="menu-link">
            <div > Clients Group</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('client_entity')}}" class="menu-link">
            <div > Clients Entities</div>
          </a>
        </li>


        <li class="menu-item">
          <a href="{{url('country_complience')}}" class="menu-link">
            <div >Country Compliances</div>
          </a>
        </li>

      </ul>
    </li>
    @elseif($user->permissions[2]->read == 1)
    
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon tf-icons bx bx-food-menu'></i>
        <div >Master Data Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('client_group')}}" class="menu-link">
            <div > Clients Group</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('client_entity')}}" class="menu-link">
            <div > Clients Entities</div>
          </a>
        </li>


        <li class="menu-item">
          <a href="{{url('country_complience')}}" class="menu-link">
            <div >Country Compliances</div>
          </a>
        </li>

      </ul>
    </li>
        
    @endif



    @if ($user->role == 0)
    <li class="menu-item">
      <a href="{{url('backup')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-analyse"></i>
        <div > Backup Restoration</div>
      </a>
    </li>

                            @elseif($user->permissions[3]->read == 1)
                            <li class="menu-item">
                              <a href="{{url('backup')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bxs-analyse"></i>&nbsp;
                                <div > Backup Restoration</div>
                              </a>
                            </li>
                            @endif
  

  

 
    @if ($user->role == 0)
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user-plus"></i>
        <div data-i18n="User Management">User Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('user')}}" class="menu-link">
            <div >Users</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('role')}}" class="menu-link">
            <div >Roles</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('managerole')}}" class="menu-link">
            <div>Manage Roles</div>
          </a>
        </li>


      </ul>
    </li>

    @elseif($user->permissions[4]->read == 1)
    
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user-plus"></i>
        <div data-i18n="User Management">User Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{url('user')}}" class="menu-link">
            <div >Users</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('role')}}" class="menu-link">
            <div >Roles</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('managerole')}}" class="menu-link">
            <div>Manage Roles</div>
          </a>
        </li>


      </ul>
    </li>
        
    @endif


   

    @if ($user->role == 0)
    <li class="menu-item">
      <a href="{{url('ticket')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-question-mark"></i>
        <div>Raise Query</div>
      </a>
    </li>

                            @elseif($user->permissions[5]->read == 1)
                            <li class="menu-item">
                              <a href="{{url('ticket')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                                <div>Raise Query</div>
                              </a>
                            </li>
                            @endif


   



    {{--<li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div >Support</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="wizard-ex-checkout.php" class="menu-link">
            <div >Send Message</div>
          </a>
        </li>
       
      </ul>
    </li>--}}
    <!-- <li class="menu-item">
      <a href="modal-examples.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-window-open"></i>
        <div data-i18n="Modal Examples">Modal Examples</div>
      </a>
    </li> -->

   
  
  

</aside>

