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

                                    <form method="post" action="{{url('/user/'.$user->id.'/update')}}"  class="form-control">
                                            {{ csrf_field() }}
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
                                                    <select  type="text" class="form-control"  name="country">
                                                        <!-- <option >United States of America</option>
                                                        <option >Russia</option>
                                                        <option >China</option>
                                                        <option >France</option>
                                                        <option >German</option> -->
                                                        <option value="United States of America" 
                                                        @if(Auth::user()->country=='United States of America') selected @endif>United States of America
                                                        </option>
                                                        <option value="Russia" 
                                                        @if(Auth::user()->country=='Russia') selected @endif>Russia
                                                        </option>
                                                        <option value="China" 
                                                        @if(Auth::user()->country=='China') selected @endif>China
                                                        </option>
                                                        <option value="France" 
                                                        @if(Auth::user()->country=='France') selected @endif>France
                                                        </option>
                                                        <option value="German" 
                                                        @if(Auth::user()->country=='German') selected @endif>German
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="username" class="col-md-3 col-form-label text-md-right">UserName</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{Auth::user()->username}}" name="user_identification" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="referral" class="col-md-3 col-form-label text-md-right">Referral</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{$referrals[0]->alltime_referral}}" name="alltime_referral" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="form-group row">
                                                <label for="address" class="col-md-3 col-form-label text-md-right">Address</label>
                                                <div class="col-md-7">
                                                    <input type="text" value="" name="qualified_loan" class="form-control">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                                                <div class="col-md-7">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{Auth::user()->password}}" style="color:black">
                                                </div>
                                            </div> -->
                                            

                                            <div class="form-group row mb-0">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-7 ">
                                                <a href="{{route('admin.usermanagement.index')}}"  class="btn btn-primary">Back</a>
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


    
        