
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Distributors</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ route('distributor.index') }}">All Distributors</a></li>
                    <li><a  href="{{ route('distributor.create') }}">Create Distributor</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('distributor_coupon.distributor_coupons.create') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Create Coupon</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ route('distributor_coupon.distributor_coupons.index') }}">Distributor C</a></li>
                    <li><a  href="">Create Products</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Units</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Units</a></li>
                    <li><a  href="">Create Units</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Purchase</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Purchase</a></li>
                    <li><a  href="">Create Purchase</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Departments</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Departments</a></li>
                    <li><a  href="">Create Departments</a></li>
                </ul>
            </li>
            
           {{--  <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Departments</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Departments</a></li>
                    <li><a  href="">Create Departments</a></li>
                </ul>
            </li> --}}
            
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Issue</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Issued Products</a></li>
                    <li><a  href="">Issue Product</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Vendors</span>
                </a>
                <ul class="sub">
                    <li><a  href="">All Vendors</a></li>
                    <li><a  href="">Create Vendor</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub">
                <li><a  href="{{ route('getreport') }}">Distributor Report</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Coupon Selection</span>
                </a>
                <ul class="sub">
                <li><a  href="{{ route('coupon_selections.index') }}">Coupon Selection</a></li>
                </ul>
            </li>
           

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end