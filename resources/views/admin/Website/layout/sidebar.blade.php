<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div" >
            
                <div class="main-menu-header">
                    <a href="{{ route('admin_home') }}">
                    <div style="font-size: 25px">
                    <span><i class="feather icon-home" style="padding-right: 5px;"></span></i> 
                    Admin Page </div>
                    </a>
                </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-bar-chart"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">System Management</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin_list_accounts') }}" target="">Accounts</a></li>
                        <li><a href="{{ route('admin_events') }}" target="">Events</a></li>
                    </ul>
                </li>
            </ul>

            </div>
            
        </div>
    </div>
</nav>
