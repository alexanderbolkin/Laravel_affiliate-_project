@extends('master.admin')
@section('header')
    
<link href="{{asset('backend/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
@endsection
<!-- ========== Left Sidebar Start ========== -->
@section('leftsidebar')
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                <ul>
                    
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="" class="waves-effect waves-primary"><i class="ti-home"></i><span> Dashboard </span></a>
                    </li>

                    <li>
                        <a href="{{route('admin.summary')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/summary.png')}}" class="img-responsive" alt="" 
                        
                        style="display: inline-block;font-size: 16px;margin-left:0px;margin-right: 5px; text-align: center; vertical-align: middle;width:40px;" />
                        <span> Summary</span><span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="{{route('admin.userguid.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userguid.png')}}" class="img-responsive" alt=""
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" />
                            <span> UserGuid</span><span class="menu-arrow"></span></a>
                    </li>

                    <li class="has_sub">
                        <a href="{{route('admin.userProfile.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/usermanagement.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:30px;" /><span> User Profile</span><span class="menu-arrow"></span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.notification.create')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Send Notification</span> <span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="{{route('admin.usermanagement.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userlist.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> User Management</span><span class="menu-arrow"></span></a>
                    </li>

                    <li class="has_sub">
                        <a href="{{route('admin.referralSetting.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Referral Setting</span> <span class="menu-arrow"></span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="{{route('admin.passwordchange.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/key.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:35px;" /><span>Update&nbspAccount</span> <span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="{{route('admin.blog.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userblog.png')}}" class="img-responsive" alt="" 
                        style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Blog Post </span><span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="{{route('logout')}}" class="waves-effect waves-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{asset('backend/dark/assets/images/pictures/logout.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> LogOut </span> <span class="menu-arrow"></span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
        <!-- Left Sidebar End -->
        @endsection
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        @section('navbar')
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title" style="color:#459245">User&nbspProfile</h4><br>
                                <h4 class="page-title" style="margin-top:20px">2018/02/16 13:07:40</h4>
                                <!-- <p class="page-title">User&nbspProfile</p> -->
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Atlax</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.summary')}}">admin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endsection

                @section('content')
                <div class="row">
                    <div class="col-sm-12 text-center" style="background-color:white">
                        <div class="home-wrapper" style="margin:5%">
                            <h5 class="home-text"><span class="rotate" style="opacity: 0.710518;color:#260894">Name</span></h5>
                            <h4 class="home-text"><span class="rotate" style="opacity: 0.710518;color:#0870af">Member Full Names</span>
                                <a href="">
                                    <img src="{{asset('backend/dark/assets/images/pictures/pencil.png')}}" 
                                    class="img-responsive" alt="" style="width:20px;height:20px"/>
                                </a>
                            </h4>
                            <p class="m-t-30 text-muted" style="opacity:1;font-size:18px;color:#260894 !important">Referral Information</p>

                            <!-- COUNTDOWN -->
                            <div class="row m-t-40">
                                <div class="col-sm-12 app-countdown">
                                    <div class="row">
                                        <div>
                                            <div>
                                                <span style="color:#0870af;font-size:18px">Today</span>
                                                <span style="color:#07396d;font-size:20px">20</span>
                                            </div>
                                            <div>
                                                <span style="color:#0870af;font-size:18px">This week</span>
                                                <span style="color:#07396d;font-size:20px">500</span>
                                            </div>
                                            <div>
                                                <span style="color:#0870af;font-size:18px">This month</span>
                                                <span style="color:#07396d;font-size:20px">3817</span>
                                            </div>
                                        </div>
                                        <div class="app-countdown-ms">
                                            <div><span style="color:#0870af;font-size:18px">This year</span>
                                                <span style="color:#07396d;font-size:20px">3817</span>
                                            </div>
                                            <div><span style="color:#0870af;font-size:18px">All time</span>
                                                <span style="color:#07396d;font-size:20px">20,846
                                                    <a href="">
                                                        <img src="{{asset('backend/dark/assets/images/pictures/pencil.png')}}" 
                                                        class="img-responsive" alt="" style="width:20px;height:20px"/>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /COUNTDOWN -->
                            <div class="row m-t-40">
                                <div class="col-sm-12 app-countdown">
                                    <div class="row">
                                        <div class="app-countdown-ms">
                                            <div>
                                                <span style="color:#260894;opacity:0.7;font-size:16px">Loan History</span>
                                                <span style="color:#07396d;font-size:20px">None
                                                    <a href="">
                                                        <img src="{{asset('backend/dark/assets/images/pictures/pencil.png')}}" 
                                                        class="img-responsive" alt="" style="width:20px;height:20px"/>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endsection

        @section('footer')

        <!-- Counter Up  -->
        <script src="{{asset('backend/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backend/plugins/counterup/jquery.counterup.min.js')}}"></script>
        <!-- circliful Chart -->
        <script src="{{asset('backend/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- skycons -->
        <script src="{{asset('backend/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

        <!-- Page js  -->
        <!-- <script src="{{asset('backend/dark/assets/pages/jquery.dashboard.js')}}"></script> -->
        <script src="{{asset('backend/plugins/dropzone/dist/dropzone.js')}}"></script>

@endsection


    