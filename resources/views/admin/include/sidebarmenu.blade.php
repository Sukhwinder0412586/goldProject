
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
                    <li><a  href="{{ route('distributor_coupon.distributor_coupons.index') }}">Voucher Quantity</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Vouchers</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ route('distributor_coupon.distributor_coupons.index') }}">Voucher Quantity</a></li>
                    <li><a  href="{{ route('distributor_coupon.distributor_coupons.create') }}">Create Voucher</a></li>
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
            <!-- <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Distributor Coupon List</span>
                </a>
                <ul class="sub">
                <li><a  href="{{ route('distributor_coupon.distributor_coupons.index') }}">Coupon Selection</a></li>
                </ul>
            </li> -->
           

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end