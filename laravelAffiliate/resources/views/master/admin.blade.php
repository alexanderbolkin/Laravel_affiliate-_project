<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/minton/dark/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 03:41:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="userId" content="{{Auth::check() ? Auth ::user()->id : ''}}">
    
    
    <meta name="author" content="Coderthemes">


    <link rel="shortcut icon" href="{{asset('backend/dark/assets/images/favicon_1.ico')}}">
    <title>Atlax.com</title>

         @yield('header')
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{asset('backend/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/dark/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/dark/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/dark/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    
    <script src="{{asset('backend/dark/assets/js/modernizr.min.js')}}"></script>
        <script>
            var ajax_url = "{{URL('/')}}";
        </script>
</head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/" class="logo"><i class="mdi mdi-radar"></i> <span>Atlax</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item notification-list hide-phone">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li>
                        <!-- <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#"><img src="{{asset('backend/dark/assets/images/pictures/summary1.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;"></a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <img src="{{asset('backend/dark/assets/images/pictures/userguid.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;">
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <img src="{{asset('backend/dark/assets/images/pictures/userlist.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;">
                            </a>
                        </li> -->

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                               
                                <div class="dropdown-item noti-title">
                                    <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>
                            </div>
                        </li>
<!-- 

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;width:50px;">
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <img src="{{asset('backend/dark/assets/images/pictures/key.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;width:50px;">
                            </a>
                        </li>

                        <li class="list-inline-item notification-list hide-phone">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <img src="{{asset('backend/dark/assets/images/pictures/userblog.png')}}" class="img-responsive" alt="" style="font-size: 18px; padding: 0 12px; vertical-align: middle;width:50px;">
                            </a>
                        </li> -->
                        <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="mdi mdi-dots-horizontal noti-icon"></i>
                            </a>
                        </li>


                        


                        
                        <!-- <notification v-bind:notifications="notifications"></notification> -->
                        <!-- <notification v-bind:notifications="notifications"></notification> -->

                        <!-- <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"  aria-haspopup="false" aria-expanded="false">Notifications
                            <i class="mdi mdi-bell noti-icon"></i><span class="badge badge-pink noti-icon-badge">5</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    
                                </li>
                            </ul>
                        </li> -->
                        
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('backend/dark/assets/images/users/avatar-8.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview" style="background-color:white">
                               
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <a href="{{route('backend.dashboard')}}" class=" -item notify-item">
                                    <i class="mdi mdi-account-star-variant"></i> <span>UserDashboard</span>
                                </a>
                               
                                

                                <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            @yield('leftsidebar')
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            @yield('navbar')
            <!-- ============================================================== -->
            @yield('content')
                    </div>
                </div>
            </div>
            <!-- end content -->
            
            <footer class="footer" style="left:1px;border:1px solid #ddd">
                2016 - 2018 © <span class="hide-phone">- Atlax.com</span>
            </footer>
        </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar" style="background-color:white">
                <div class="" style="background-color:white">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" style="background-color:white">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages-2">
                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->
        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        
        <!-- Plugins  -->
        <script src="{{asset('backend/dark/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/detect.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/waves.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('backend/plugins/switchery/switchery.min.js')}}"></script>
        
         @yield('footer')
        <!-- Custom main Js -->
        <script src="{{asset('backend/dark/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.app.js')}}"></script>
    </body>
<!-- Mirrored from coderthemes.com/minton/dark/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 03:41:40 GMT -->
</html>