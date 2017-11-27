<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="{{asset('css/style.css')}}"> Use this if you are using the condenser mix in the webpack.mix file.-->
        <!--Use these below stylesheets if you need to identify where a particular style is coming from-->
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="{{asset('css/pace.css')}}">
        <link rel="stylesheet" href="{{asset('css/uniform.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!--<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> Using a cdn for now-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="{{asset('css/line-icons.css')}}"> Using a cdn for now-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" href="{{asset('css/menu_cornerbox.css')}}">
        <!--<link rel="stylesheet" href="{{asset('css/waves.css')}}"> using a cdn for now-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.css">
        <link rel="stylesheet" href="{{asset('css/switchery.css')}}">
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- ENDSTYLESHEETS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <body class="compact-menu">
    <div class="overlay"></div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="/" class="logo-text"><span>IRIS</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>	
                                <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                    <p class="task-details">New user registered</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">3 Charts refreshed</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                    <p class="task-details">2 Missed calls</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="user-name">user<i class="fa fa-angle-down"></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                    <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                    <li role="presentation"><a href="login.html"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <ul class="menu accordion-menu">
                    <li class="active"><a href="/" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Home</p><span class="active-page"></span></a></li>
                    <li><a href="/equipment" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Tasks</p></a></li>
                    <li><a href="/dashboards" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Dashboards</p></a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Equipment</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="/equipment">Equipment List</a></li>
                            <li><a href="/equipment/groups">Groups</a></li>
                            <li><a href="/equipment/locations">Locations</a></li>
                            <li><a href="/equipment/suppliers">Suppliers</a></li>
                            <li><a href="/reports?subject=equipment">Reports</a></li>
                            <li><a href="/dashboards?subject=equipment">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Fleet</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="/vehicles">Vehicles</a></li>
                            <li><a href="/vehicles/vel">Equipment Lists</a></li>
                            <li><a href="/vehicles/bookings">Bookings</a></li>
                            <li><a href="/calendar?filter=fleet">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Calendar</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="/calendar">Calendar</a></li>
                            <li><a href="/calendar/events">Event List</a></li>
                        </ul>
                    </li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Administration</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="/admin/users">Users</a></li>
                            <li><a href="/admin/settings">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">IRIS - NSWSES Hornsby</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>$(window).on('load', function(){this.$ = jQuery;});</script>
    </body>
    
</html>