<!--header start-->
<header class="header white-bg">
   <div class="sidebar-toggle-box">	<i class="fa fa-bars"></i>
   </div>
   <!--logo start-->
   <a href="{{ route('dashboard') }}" class="logo">Bhagat<span>Puran Singh</span></a>
   
   <div class="top-nav ">
      <!--search & user info start-->
      <ul class="nav pull-right top-menu">
        
         <!-- user login dropdown start-->
         <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <img alt="" src="/ad_asset/img/logo.png" style="width:50px;">
            <span class="username">{{Auth::user()->name}}</span>
            <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout dropdown-menu-right">
               <div class="log-arrow-up"></div>
               <li><a href="javacript:void(0);"><i class=" fa fa-suitcase"></i>Profile</a></li>
               <li><a href="{{ route('admin.changepassword') }}"><i class="fa fa-cog"></i> Password</a></li>
               <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> Log Out</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                                  </li>
            </ul>
         </li>
         <!-- user login dropdown end -->
      </ul>
   </div>
</header>
<!--header end-->