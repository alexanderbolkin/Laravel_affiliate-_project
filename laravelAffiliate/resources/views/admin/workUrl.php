@extends('master.admin')
@section('header')
    
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
                        <a href="{{route('admin.userguid.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userguid.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" />
                            <span> UserGuid</span><span class="menu-arrow"></span></a>
                    </li>
                    
                    <li class="has_sub">
                        <a href="{{route('admin.userProfile.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userlist.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:30px;" /><span> User List</span><span class="menu-arrow"></span>
                        </a>
                        <!-- <ul class="list-unstyled">
                            <li><a href="{{route('admin.userlist.alltime')}}"><span>All&nbsptime&nbspUser</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.userlist.today')}}"><span>Today&nbspUser</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.userlist.aweek')}}"><span>A&nbspweek&nbspUser</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.userlist.amonth')}}"><span>A&nbspmonth&nbspUser</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.userlist.country')}}"><span>Country&nbspUser</span><span class="menu-arrow"></span></a></li>
                        </ul> -->
                    </li>


                    <li>
                        <a href="{{route('admin.notification.create')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Send Notification</span> <span class="menu-arrow"></span></a>
                    </li>


                    <li class="has_sub">
                        <a href="#" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Referral Setting</span> <span class="menu-arrow"></span>
                        </a>
                        
                    </li>

                    <li class="has_sub">
                        <a href="{{route('admin.passwordchange.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/key.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width:35px;" /><span>Update&nbspAccount</span> <span class="menu-arrow"></span></a>
                    </li>
                    
                    <!-- <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-money"></i>
                        <span>Bonous Control</span><span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                       
                            <li><a href="{{route('admin.referralBonousControl.bonousSetting')}}"><span>BonousSetting</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousControl.referralContestSetting')}}"><span>ReferContestSetting</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousControl.timeFrame')}}"><span>TimeFrame</span><span class="menu-arrow"></span></a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect waves-primary">
                        <i class="ti-eye"></i><span> Refferal Bonous View</span><span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('admin.referralBonousView.alltime')}}"><span>All&nbsptime&nbspBonous</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousView.today')}}"><span>Today&nbspBonous</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousView.aweek')}}"><span>A&nbspweek&nbspBonous</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousView.amonth')}}"><span>A&nbspmonth&nbspBonous</span><span class="menu-arrow"></span></a></li>
                            <li><a href="{{route('admin.referralBonousView.country')}}"><span>Country&nbspBonous</span><span class="menu-arrow"></span></a></li>
                        </ul>
                    </li> -->

                    <li>
                        <a href="{{route('admin.blog.index')}}" class="waves-effect waves-primary"><img src="{{asset('backend/dark/assets/images/pictures/userblog.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> Blog Post </span><span class="menu-arrow"></span></a>
                    </li>
                
                    <li>
                        <a href="{{route('logout')}}" class="waves-effect waves-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{asset('backend/dark/assets/images/pictures/logout.png')}}" class="img-responsive" alt="" style="display: inline-block;font-size: 16px;margin-left: 3px;margin-right: 15px; text-align: center; vertical-align: middle;width: 30px;" /><span> LogOut </span> <span class="menu-arrow"></span></a>
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
                                <h4 class="page-title">Dashboard</h4>
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
                    <div class="col-lg-6">
                        <div class="card-box" style="background-color:#3598dc">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Total Members / Member List</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{asset('backend/dark/assets/images/pictures/reach.png')}}" class="img-responsive" alt="" style="width:60%;" />
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="text-success" style="color:#fff !important;margin-top:20px;">Refferal&nbspEarnings:&nbsp$965</h4>
                                        <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important;">This&nbspmonth&nbsp:&nbsp195</h4>
                                        <h4 class="text-success" style="color:#fff !important;">All&nbsptime&nbsp:&nbsp1050</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    

                    <!-- <div class="col-lg-3">
                        <div class="card-box" style="background-color:#b8a8ce">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Settings</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{asset('backend/dark/assets/images/pictures/setting.png')}}" class="img-responsive" alt="" style="width:88%;" />
                                    </div>
                                    <div class="col-sm-3">
                                        <h4 class="text-success" style="color:#fff !important;margin-top:100px">Settings</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-3">
                        <div class="card-box" style="background-color:#e35b5b">
                            <h2 class="header-title m-t-0 m-b-30" style="color:#fff !important;">Notifications</h2>
                            <div class="widget-chart text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" style="width:88%;" />
                                    </div>
                                    <div class="col-sm-3">
                                        <h4 class="text-success" style="color:#fff !important;margin-top:100px">Unread:5</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    
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
                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#3598dc;">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{asset('backend/dark/assets/images/pictures/userguid.png')}}" class="img-responsive" alt="" style="width:100%;" />
                                </div>
                                <div class="col-sm-7">
                                    <h4 class="text-success" style="color:#fff !important">Set&nbspUp</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Instruction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2" >
                        <div class="widget-simple-chart text-right card-box" style="background-color:#e35b5a;">
                            <div class="row">
                            <div class="col-sm-5">
                                    <img src="{{asset('backend/dark/assets/images/pictures/CST.png')}}" class="img-responsive" alt="" style="width:90%;" />
                                </div>
                                <div class="col-sm-7">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Referral</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Setting</h4>
                                </div>
                                <!-- <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#3bafda" data-bgcolor="#505A66"></div>
                                <h3 class="text-primary counter m-t-10">5685</h3>
                                <p class="text-muted text-nowrap m-b-10">Daily visitors</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#32c6d4;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{asset('backend/dark/assets/images/pictures/blog.png')}}" class="img-responsive" alt="" style="width:90%;" />
                                </div>
                                <div class="col-sm-2">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Blog</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Post</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="widget-simple-chart text-right card-box" style="background-color:#8e44ad">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{asset('backend/dark/assets/images/pictures/password.png')}}" class="img-responsive" alt="" style="width:80%;height:90%" />
                                </div>
                                <div class="col-sm-7">
                                    <!-- <h3 class="text-success counter m-t-10" style="color:#fff !important">2562</h3> -->
                                    <h4 class="text-success" style="color:#fff !important">Update</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">passsword</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2" >
                        <div class="widget-simple-chart text-right card-box" style="background-color:#28a745">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="{{asset('backend/dark/assets/images/pictures/bell.png')}}" class="img-responsive" alt="" style="width:100%;" />
                                </div>
                                <div class="col-sm-7">
                                    <h4 class="text-success" style="color:#fff !important">Send</h4>
                                    <h4 class="text-muted text-nowrap m-b-10" style="color:#fff !important">Notification</h4>
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

       <!-- Required rangeslider.js -->
       
        
@endsection



<?php



Route::get('/', function () {return view('frontend.index');})->name('frontend.index');

Auth::routes();

Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');

Route::get('/checkgmail', function () { return view('email.checkgmail');})->name('email.checkgmail');

Route::get('/wallet', function () { return view('email.ewallet');})->name('email.ewallet');


Route::get('/home', 'HomeController@index')->name('home');


// ==================================frontend==========================================//

Route::get('/contactUs','BlogController@contact')->name('frontend.contactUs');
Route::get('/service', 'BlogController@service')->name('frontend.service');
Route::get('/news', 'BlogController@news')->name('frontend.news');
Route::get('/support', 'BlogController@support')->name('frontend.support');
Route::get('/about', 'BlogController@about')->name('frontend.aboutus');
Route::get('/faq', 'BlogController@faq')->name('frontend.faq');

// ==================================userbackend==========================================//
Route::get('/dashboard', 'HomeController@backend_dashboard')->name('backend.dashboard');

Route::get('/myAccount', 'HomeController@profile')->name('backend.myAccount');

Route::post('/update/{id}', 'HomeController@updateProfile')->name('backend.updateProfile');

Route::get('/setupInstroduction', 'HomeController@setupInstroduction')->name('backend.setupInstroduction');

Route::get('/notification', 'HomeController@notification')->name('backend.notification');

Route::get('/myreferrals', 'HomeController@myreferrals')->name('backend.myreferrals');
Route::get('/socialPromotion', 'HomeController@socialPromotion')->name('backend.socialPromotion');
//Route::get('/myreferrals', 'ReferralProgramController@getReferralProgram')->name('backend.myreferrals');




Route::get('/social', 'HomeController@social')->name('backend.social');

Route::get('/referralContest', 'HomeController@referralContest')->name('backend.referralContest');


// ==================================admin backend==========================================//

// Route::get('/admin', 'AdminController@admin_dashboard')->name('admin.dashboard');
Route::get('/admin', 'AdminController@admin_dashboard')->name('admin.summary');
Route::get('/lockscreen', 'AdminController@lockscreen')->name('admin.passwordchange.index');
Route::post('/passwordupdate/{id}', 'AdminController@passwordupdate')->name('admin.passwordchange.passwordupdate');
Route::get('/userProfile', 'AdminController@userProfile')->name('admin.userProfile.index');


// ==================================Notification backend==========================================//

Route::get('/post/index', 'PostController@index')->name('admin.notification.create');
Route::post('/post/store', 'PostController@store')->middleware('auth');
Route::get('/post/{id}', 'PostController@show')->name('admin.notification.show')->middleware('auth');
Route::get('/post/{id}/edit', 'PostController@edit')->name('admin.notification.edit')->middleware('auth');
Route::post('/post/{id}/update', 'PostController@update')->middleware('auth');
Route::get('/post/{id}/delete','PostController@destroy')->middleware('auth')->name('admin.notification.delete');

Route::post('/comment/store', 'CommentController@store')->middleware('auth');
Route::post('/notification/get', 'NotificationController@get');
Route::post('/notification/read', 'NotificationController@read');

// ==================================blog backend==========================================//
Route::get('/blogs/index','BlogController@index')->name('admin.blog.index');
Route::get('/blog/create','BlogController@create')->name('admin.blog.create');
Route::post('/blog/store','BlogController@store')->middleware('auth');
Route::get('/blog/{id}', 'BlogController@show')->name('admin.blog.show')->middleware('auth');
Route::get('/blog/{id}/edit','BlogController@edit')->middleware('auth')->name('admin.blog.edit');
Route::post('/blog/{id}/update','BlogController@update')->middleware('auth');
Route::get('/blog/{id}/delete','BlogController@destroy')->middleware('auth')->name('admin.blog.delete');

// ========================================UserList========================================
Route::get('/alltimeUser','AdminController@alltimeUser')->name('admin.userlist.alltime');
Route::get('/todayUser','AdminController@todayUser')->name('admin.userlist.today');
Route::get('/aweekUser','AdminController@aweekUser')->name('admin.userlist.aweek');
Route::get('/amonthUser', 'AdminController@amonthUser')->name('admin.userlist.amonth');
Route::get('/countryUser','AdminController@countryUser')->name('admin.userlist.country');


// ========================================BonousView========================================
Route::get('/alltimeBonous','BonousController@alltimeUser')->name('admin.referralBonousView.alltime');
Route::get('/todayBonous','BonousController@todayUser')->name('admin.referralBonousView.today');
Route::get('/aweekBonous','BonousController@aweekUser')->name('admin.referralBonousView.aweek');
Route::get('/amonthBonous', 'BonousController@amonthUser')->name('admin.referralBonousView.amonth');
Route::get('/countryBonous','BonousController@countryUser')->name('admin.referralBonousView.country');

// ========================================BonousSetting========================================
// Route::get('/bonousSetting','BonousController@bonousSetting')->name('admin.referralBonousControl.bonousSetting');
// Route::get('/referralContestSetting','BonousController@referralContestSetting')
// 											->name('admin.referralBonousControl.referralContestSetting');
// Route::get('/timeFrame','BonousController@timeFrame')->name('admin.referralBonousControl.timeFrame');

Route::get('/referralSetting','BonousController@referralSetting')->name('admin.referralSetting.index');

//==========================================userguid=========================================
Route::get('/userguid','AdminController@userguid')->name('admin.userguid.index');




// <!-- <div class="clearfix pull-right m-t-15">
//     <button type="submit" class="btn btn-primary"  onclick="event.preventDefault();$('#input01').trigger('click')" style=""></span>Send</button>
        
//         <input type="file" name="example"  id="input01" style=" display:none;background-color:#42a746 !important;color:white"><br>
//                 <span class="btn btn-default waves-effect waves-light">Or drag and drop them here</span>
//     </div> -->