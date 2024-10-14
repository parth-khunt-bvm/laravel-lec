 <!--sidebar wrapper -->
 <div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
       <div>
          <img src="{{  asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
       </div>
       <div>
          <h4 class="logo-text">Rocker</h4>
       </div>
       <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
       </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin-dashboard') }}" >
               <div class="parent-icon"><i class="bx bx-home"></i>
               </div>
               <div class="menu-title">Dashboard</div>
            </a>
         </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Assests</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.asset.asset-type.list') }}"><i class='bx bx-radio-circle'></i>Assest Type</a>
                </li>
                <li>
                    <a href="{{ route('admin.brand-data.brand')}}"><i class='bx bx-radio-circle'></i>Brand</a>
                </li>
                <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Supplier</a>
                </li>
                <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Assests Master</a>
                </li>
                <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Assests Allocation</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
 </div>
 <!--end sidebar wrapper -->
