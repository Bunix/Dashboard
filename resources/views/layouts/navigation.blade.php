<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('home') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard view</span></a>
            </li>
            <li class="{{ isActiveRoute('contact') }}">
                <a href="{{ url('/contact') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Contact view</span> </a>
            </li>
            <li class="{{ isActiveRoute('post') }}">
                <a href="{{ url('/post') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Post view</span> </a>
            </li>
        </ul>

    </div>
</nav>
