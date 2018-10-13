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
                                <h4 class="page-title" style="color:#459245">My Referrals</h4><br>

                                <h4 class="page-title" id="time"  style="margin-top:20px"></h4>

                                <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Altax</a></li>
                                    <li class="breadcrumb-item"><a href="#">My Referral</a></li>
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

                            <h4 class="m-t-0 header-title" style="text-align:center;color:#459245"><b>Referrals</b></h4>
                            <p class="text-muted m-b-30 font-14"></p>
                            <!-- <div class="row"> -->
                                <div class="col-12">
                                    <div class="form-group ">
                                        <label for="affiliate_id" class="col-md-4 col-form-label text-md-right">
                                       </label>

                                    </div>
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                
                                            <label class="col-7 col-form-label text-md-right">  This week Refferal&nbsp:&nbsp</label>
                                            <div class="col-5">
                                                    <p class="form-control" value="Some text value..." style="background-color:white;border-color:white">
                                                        {{ $weekReferrals}}
                                                    </p>
                                            </div>
                                            </div>
                                            

                                            <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
                                                <label class="col-7 col-form-label text-md-right">Total Earned this week&nbsp:&nbsp</label>
                                                <div class="col-5">

                                                    <p class="form-control" style="background-color:white;border-color:white">{{$weekBonous}}</p>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
                                                
                                                <label class="col-7 col-form-label text-md-right">All time Referrals count&nbsp:&nbsp</label>
                                                <div class="col-5">
                                                    <p class="form-control" style="background-color:white;border-color:white">{{$weekReferrals}}</p>
                                                </div>
                                            </div>

                                            <div class="form-group row" style="padding-bottom:0px !impportant;margin-bottom:0px !impportant">
                                                <label class="col-7 col-form-label text-md-right">All time Bonous&nbsp:&nbsp</label>
                                                <div class="col-5">
                                                    <p class="form-control"  style="background-color:white;border-color:white">{{$alltimeBonous}}</p>
                                                </div>
                                            </div>
                                        </form>
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
        <script src="{{asset('backend/dark/assets/pages/jquery.dashboard.js')}}"></script>

        

@endsection


    
        