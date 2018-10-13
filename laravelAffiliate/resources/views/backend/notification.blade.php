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
                                <h4 class="page-title" style="color:#459245">My Notification Inbox</h4><br>
                                <h4 class="page-title" style="margin-top:20px">2018/02/16 13:07:40</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Altax</a></li>
                                    <li class="breadcrumb-item"><a href="#">Notification</a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endsection

                @section('content')
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title" style="text-align:center;color:#459245"><b>Recent Message</b></h4>
                            <p class="text-muted m-b-30 font-14"></p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                <label class="col-5 col-form-label text-md-right">Dat&nbsp:</label>
                                                <div class="col-6">
                                                    <p class="col-form-label text-md-left" value="Some text value..." 
                                                    style="background-color:white;border-color:white">Friday, February 17, 2018</p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row">
                                                <label class="col-5 col-form-label text-md-right">Currency Symbol&nbsp:</label>
                                                <div class="col-6">
                                                    <p class="col-form-label text-md-left" value="Some text value..." 
                                                    style="background-color:white;border-color:white">GBP, USD</p>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-5 col-form-label text-md-right">Order&nbsp:</label>
                                                <div class="col-6">
                                                    <p class="col-form-label text-md-left" value="Some text value..." 
                                                    style="background-color:white;border-color:white">Buy</p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-5 col-form-label text-md-right">LotSize&nbsp:</label>
                                                <div class="col-6">
                                                    <p class="col-form-label text-md-left" value="Some text value..." 
                                                    style="background-color:white;border-color:white">Equity / 1000</p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-5 col-form-label text-md-right">StopLoss&nbsp:</label>
                                                <div class="col-6">
                                                    <p class=" col-form-label text-md-left" value="Some text value..." 
                                                    style="background-color:white;border-color:white">1.07538</p>
                                                </div>
                                                <div class="col-1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row" style="margin-top:50px;margin-botttom:0px !important;padding-botttom:0px !important">
                                                <label class="col-5 col-form-label text-md-right">Lot&nbspSize&nbspExplained&nbsp:</label>
                                            </div>

                                            <div class="form-group row" style="margin-botttom:0px !important;margin-top:0px">
                                                <label class="col-4 col-form-label col-md-offset-1 text-md-right" style="padding-botttom:0px !important"></label>
                                                <label class="col-5 col-form-label">If your equity is $10, divide $10 by 1000 and you get 0.01.So your LotSize will be 0.01</label>
                                            </div>

                                            <div class=" form-group row">
                                                <label class="col-4 col-form-label text-md-right">
                                                    <i class="ti-angle-double-left"></i> Previous
                                                </label>
                                                <div class="col-4 col-form-label text-md-right">Next
                                                    <i class="ti-angle-double-right"></i> 
                                                </div>
                                                <div class="col-3">
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
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
        <script src="{{asset('backend/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- skycons -->
        <script src="{{asset('backend/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{asset('backend/dark/assets/pages/jquery.dashboard.js')}}"></script>

@endsection


    
        