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
                                <h4 class="page-title" style="color:#459245">My Account Detail</h4><br>
                                <h4 class="page-title" style="margin-top:20px">{{Auth::user()->created_at}}</h4>
                                <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Altax</a></li>
                                    <li class="breadcrumb-item"><a href="#">My Account</a></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endsection

                @section('content')
                <div class="row">
                    <div class="col-xl-2">

                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title" style="text-align:center;color:#459245"><b>My Account</b></h4>
                                <!--<ul class="nav nav-tabs tabs-bordered">
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                           My Account
                                        </a>
                                    </li>
                                </ul> -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings" aria-expanded="true">
                                    <form action="{{route('backend.updateProfile',Auth::user()->id)}}" class="form-horizontal" method="post" >
                                        {{csrf_field()}}
                                            <div class="form-group row">
                                                <label for="username" class="col-md-3 col-form-label text-md-right">Full Name</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{Auth::user()->username}}" name="username" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="birthday" class="col-md-3 col-form-label text-md-right">Date of Birth</label>
                                                <div class="col-md-7">
                                                    <?php 
                                                        $time = strtotime(Auth::user()->birthday);
                                                        $newformat = date('Y-m-d',$time);
                                                    ?>
                                                    <input type="date" value="{{$newformat}}" name="birthday" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="country" class="col-md-3 col-form-label text-md-right">Country</label>
                                                <div class="col-md-7">
                                                    <select  type="text" class="form-control"  name="country" value="{{Auth::user()->country}}">
                                                        <option >United States of America</option>
                                                        <option >Russia</option>
                                                        <option >China</option>
                                                        <option >France</option>
                                                        <option >German</option>
                                                    </select>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row">
                                                <label for="state" class="col-md-3 col-form-label text-md-right">State</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{Auth::user()->state}}" name="state" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="address" class="col-md-3 col-form-label text-md-right">Address</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{Auth::user()->address}}" name="address" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="username" class="col-md-3 col-form-label text-md-right">UserName</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{Auth::user()->username}}" name="user_identification" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                                                <div class="col-md-7">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{Auth::user()->password}}" style="color:black">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row mb-0">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-7 ">
                                                    <button type="submit" class="btn btn-primary">Update profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
        <script src="{{asset('backend/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- skycons -->
        <script src="{{asset('backend/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{asset('backend/dark/assets/pages/jquery.dashboard.js')}}"></script>

@endsection


    
        