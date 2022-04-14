<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
           <a href="{{ route('form')}}" class="b-brand">
               <div class="b-bg">
                   <i class="feather icon-trending-up"></i>
               </div>
               <span class="b-title">Hello, {{ session('name')}}</span>
           </a>
           <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
       </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                
                <li class="nav-item">
                    <a href="{{ route('form')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Add New Form</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('formlist')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Forms</span></a>
                </li>
                
                <li data-username="Disabled Menu" class="nav-item "><a href="{{ route('logout')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->