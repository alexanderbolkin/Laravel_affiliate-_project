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
                                <h4 class="page-title">User&nbspGuid&nbspUpdate</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Atlax</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.summary')}}">admin</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('admin.userProfile.index')}}">Dashboard</a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endsection

                @section('content')
                <!-- <div class="col-xl-9 col-lg-8"> -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card-box">
                            <P>Current&nbspUserGuid</P>
                            <div class="btn-toolbar m-t-20" role="toolbar">
                                <div class="btn-group">
                                    <p class="btn btn-default waves-effect waves-light ">URL</p>
                                </div>
                                <div class="btn-group ml-1">
                                    <a href ="http://antlax.com/user_guide.pdf"  class="btn btn-primary  waves-effect waves-light" 
                                    style="background-color:white;color:#3b63da;border-color:white">http://antlax.com/user_guide.pdf</a>
                                        
                                </div>
                                <div class="btn-group ml-1">
                                <a href ="http://antlax.com/user_guide.pdf"  class="btn btn-primary  waves-effect waves-light" 
                                download    style="background-color:white;color:#3b63da;border-color:white">Download</a>
                                </div>

                                <div class="btn-group ml-1">
                                <a href ="#"  class="btn btn-primary  waves-effect waves-light" 
                                    style="background-color:white;color:#3b63da;border-color:white">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div><!-- End row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <!-- <h4 class="m-t-0 header-title" style="text-align:center;color:#459245"><b>Recent Message</b></h4> -->
                            <h4 class="text-muted m-b-30 font-14">Upload new user Guide below</h4>

                            <div class="row">
                                <div class="col-md-2 portlets">
                                </div>
                                <div class="col-md-8 portlets">
                                    <div class="m-b-30">
                                        <form action="#" class="dropzone dz-clickable" id="dropzone" style="background-color:#ffffff;">

                                            <div class="dz-default dz-message">
                                                <img src="{{asset('backend/dark/assets/images/pictures/upload.jpg')}}" class="img-responsive" alt="" 
                                                style="text-align:center;display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:60px;" /><br>
                                                <span class="btn btn-success  waves-effect waves-light" style="background-color:#42a746;">Choose&nbspfile&nbspto&nbspUpload</span><br>
                                                <span class="btn btn-default waves-effect waves-light">Or drag and drop them here</span>
                                            </div>
                                        </form>
                                        <div class="clearfix pull-right m-t-15">
                                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->
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


    