@extends('master.backend')
@section('header')
    <link href="{{asset('backend/plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />
    
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
                        <li >
                            <a href="{{route('home')}}" class="waves-effect waves-primary">
                                <i class="ti-home" style="margin-right: 25px;"></i>
                            <span> Dashboard </span><span class="menu-arrow">
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{route('backend.myAccount')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/gear.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> My Account </span><span class="menu-arrow"></span></a>
                        </li>
                   
                        <li class="has_sub">
                            <a href="{{route('backend.setupInstroduction')}}" class="waves-effect waves-primary">
                                <img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" />
                                <span> Setup Instructions</span><span class="menu-arrow"></span></a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('backend.notification')}}" class="waves-effect waves-primary"><span class="badge badge-pink noti-icon-badge" style="margin-top:-16px;padding:4px 2px;">4</span><img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:20px;" /></i></i><span> Notification Inbox </span> <span class="menu-arrow"></span></a>
                        </li>
                        
                        <li class="has_sub">
                            <a href="{{route('backend.myreferrals')}}" class="waves-effect waves-primary">
                                <img src="{{asset('backend/dark/assets/images/pictures/reach.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" />
                                <span> My Referrals</span><span class="menu-arrow"></span>
                            </a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('backend.socialPromotion')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/share.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> SocialPromotion</span><span class="menu-arrow"></span></a>
                        </li>

                        <li class="has_sub">
                            <a href="{{route('backend.referralContest')}}" class="waves-effect waves-primary">
                                <img src="{{asset('backend/dark/assets/images/pictures/contest1.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Refferal Contest</span><span class="menu-arrow"></span></a>
                        </li>
                    
                        <li>
                            <a href="{{route('logout') }}" class="waves-effect waves-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{asset('backend/dark/assets/images/pictures/logout.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> LogOut </span> <span class="menu-arrow"></span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
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
                                <!-- <img src="{{asset('backend/dark/assets/images/pictures/phone.png')}}" class="img-responsive" alt="" style="width:20px;height:20px"/> -->
                                <h4 class="page-title" style="color:#459245">My Dashboard</h4><br>
                                <h4 class="page-title" style="margin-top:20px">{{Auth::user()->created_at}}</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Altax</a></li>
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endsection

                @section('content')
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-box" style="background-color:#b8a8ce">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Settings</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{asset('backend/dark/assets/images/pictures/setting.png')}}" class="img-responsive" alt="" style="width:88%;" />
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                        <h4 class="text-success" style="color:#fff !important;margin-top:100px">Settings</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card-box" style="background-color:#e35b5b">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Notifications</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" style="width:88%;" />
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                        <h4 class="text-success" style="color:#fff !important;margin-top:100px">Unread:5</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box" style="background-color:#3598dc">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Referrals</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{asset('backend/dark/assets/images/pictures/reach.png')}}" class="img-responsive" alt="" style="width:92%;" />
                                    </div>
                                    <div class="col-sm-7">
                                        <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                        <h4 class="text-success" style="color:#fff !important;margin-top:20px;">Refferal&nbspEarnings:&nbsp$965</h4>
                                        <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important;">This&nbspmonth&nbsp:&nbsp195</h4>
                                        <h4 class="text-success" style="color:#fff !important;">All&nbsptime&nbsp:&nbsp1050</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#fff;border-color:#fff">
                            <div class="row">
                                <p class="text-success" style="color:black !important;margin-top:20px;font-size:20px">Dashboard</p><hr style="background-color:#ddd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#3598dc">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" style="width:88%;" />
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Set&nbspUp</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Instruction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#e35b5a;">
                            <div class="row">
                            <div class="col-sm-6">
                                    <img src="{{asset('backend/dark/assets/images/pictures/faq.png')}}" class="img-responsive" alt="" style="width:90%;" />
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Questions</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Answered</h4>
                                </div>
                                <!-- <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#3bafda" data-bgcolor="#505A66"></div>
                                <h3 class="text-primary counter m-t-10">5685</h3>
                                <p class="text-muted text-nowrap m-b-10">Daily visitors</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#32c5d2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('backend/dark/assets/images/pictures/share.png')}}" class="img-responsive" alt="" style="width:90%;" />
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important;padding-top:10px">SocialSharing</h4>
                                    <!-- <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Sharing</h4> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#8e44ad">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('backend/dark/assets/images/pictures/person.png')}}" class="img-responsive" alt="" style="width:90%;" />
                                </div>
                                <div class="col-sm-3">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Referral</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Contest</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end content -->
        @endsection

        @section('footer')

        <!-- Counter Up  -->
        <script src="{{asset('backend/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backend/plugins/counterup/jquery.counterup.min.js')}}"></script>
        <!-- circliful Chart -->
        <!-- <script src="{{asset('backend/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script> -->
        <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- skycons -->
        <script src="{{asset('backend/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{asset('backend/dark/assets/pages/jquery.dashboard.js')}}"></script>

        
@endsection


    
        