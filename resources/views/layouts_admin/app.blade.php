
<!DOCTYPE html>
<html lang="en">


<head>
@include('layouts_admin.head')

</head>

<body>

@include('layouts_admin.preloader')

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr">D</b>
                    <span class="brand-title"><b>GeCom</b></span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="bi bi-menu-app"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                        </div>
                        <input type="search" class="border-0" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">

                    <ul class="clearfix">
                        <li class="icons d-none d-md-flex">
                            <a href="javascript:void(0)" class="window_fullscreen-x">
                                <i class="icon-frame"></i>
                            </a>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="bi bi-envelope"></i>
                                <span class="badge badge-danger">3</span>
                            </a>
                            <div class="drop-down animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{asset('layouts_admin/assets/images/avatar/1.jpg')}}" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey, What's up! You have a good news !!!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{asset('layouts_admin/assets/images/avatar/2.jpg')}}" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{asset('layouts_admin/assets/images/avatar/3.jpg')}}" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{asset('layouts_admin/assets/images/avatar/4.jpg')}}" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">And what do you do?</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-center bg-primary px-4 text-white" href="email-inbox.html">
                                        <span>See all messagese </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="bi bi-bell"></i>
                                <span class="badge badge-primary">3</span>
                            </a>
                            <div class="drop-down animated flipInX dropdown-notfication">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                        <span>All Notifications</span>
                                        <span><i class="icon-settings"></i></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <div class="user-img c-pointer-x">
                                <span class="activity active"></span>
                                <img src="{{asset('layouts_admin/assets/images/user/1.png')}}" height="40" width="40" alt="avatar">
                            </div>
                            <div class="drop-down dropdown-profile animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-calender"></i> <span>My Calender</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-envelope-open"></i> <span>My Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-paper-plane"></i> <span>My Tasks</span><div class="badge badge-pill bg-dark">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-check"></i> <span>Online</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts_admin.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts_admin.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        @include('layouts_admin.sidebar_start')
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('layouts_admin.js')

</body>

</html>