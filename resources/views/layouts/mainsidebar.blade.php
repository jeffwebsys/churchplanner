<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
              
                <ul class="pcoded-submenu">
                    @if(auth()->user()->role == 'admin')
                    <li class="active">
                        <a href="/users">
                            <span class="pcoded-mtext">Users</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="dashboard-crm.htm">
                            <span class="pcoded-mtext">Announcements</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="dashboard-analytics.htm">
                            <span class="pcoded-mtext">Events</span>
                            <span class="pcoded-badge label label-info ">NEW</span>
                        </a>
                    </li>
                    @endif

                    <li class=" ">
                        <a href="dashboard-analytics.htm">
                            <span class="pcoded-mtext">Bible Verses</span>
                            <span class="pcoded-badge label label-info ">NEW</span>
                        </a>
                    </li>
                </ul>
              

            </li>
           
           
       
        

        <div class="pcoded-navigatio-lavel">Support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                    <span class="pcoded-mtext">Documentation</span>
                </a>
            </li>
            <li class="">
                <a href="#" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                    <span class="pcoded-mtext">Submit Issue</span>
                </a>
            </li>
        </ul>
    </div>
</nav>