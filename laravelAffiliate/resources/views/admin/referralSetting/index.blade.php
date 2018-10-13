@extends('master.admin')
@section('header')
    <!-- DataTables -->
<link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
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
                                
                                <h4 class="page-title" style="color:#459245">Referrals</h4><br>
                                <h4 class="page-title" style="margin-top:20px">2018/02/16 13:07:40</h4>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Atlax</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.summary')}}">admin</a></li>
                                    <li class="breadcrumb-item active">Referrals</li>
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
                                <h4 class="m-t-0 header-title" style="text-align:center;color:#459245"><b>Referral Settings</b></h4>
                                
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings" aria-expanded="true">
                                    <form action="{{route('admin.referralSetting.update')}}" class="form-horizontal" method="post" >
                                        {{csrf_field()}}
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label text-md-left">User Activation</label>
                                                <div class="col-md-7">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p for="username" class="col-md-3 col-form-label text-md-left">Full Name</p>
                                                <div class="col-md-7">
                                                    <select  type="text" class="form-control"  name="fullname_status"   style="">
                                                        
                                                        <option value="Manually" @if($referralsetting[0]->fullname_status=='Manually') selected @endif>Manually</option>
                                                        
                                                        <option value="Auto" @if($referralsetting[0]->fullname_status=='Auto') selected @endif>Auto</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin-top:40px">
                                                <label for="" class="col-md-3 col-form-label text-md-left">Referral&nbspSetting</label>
                                                <div class="col-md-7"></div>
                                            </div>

                                            <div class="form-group row">
                                                <p class="col-md-3 col-form-label text-md-left">Bonus per referred account&nbsp: </>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{$referralsetting[0]->per_referred_account}}$" name="per_referred_account" class="form-control" style="">
                                                </div>
                                            </div>

                                            <div class="form-group row" style="margin-top:40px">
                                                <label for="state" class="col-md-3 col-form-label text-md-left">Referral Contest Setting</label>
                                                <div class="col-md-7"></div>
                                            </div>

                                            <div class="form-group row">
                                                <p for="address" class="col-md-4 col-form-label text-md-left">Minimum required to win contest:</p>
                                                <div class="col-md-6">
                                                    <input type="text" value="{{$referralsetting[0]->minium_contest}}" name="minium_contest" class="form-control" style="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <p for="username" class="col-md-3 col-form-label text-md-left">Reset every:</p>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{$referralsetting[0]->reset_day}} days" name="reset_day" class="form-control" style="">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 col-form-label text-md-left">Unsecured Loan Setting</label>
                                                <div class="col-md-7"></div>
                                            </div>

                                            <div class="form-group row">
                                                <p for="address" class="col-md-4 col-form-label text-md-left">Minimum referrals to qualify for loan:</p>
                                                <div class="col-md-6">
                                                    <input type="text" value="{{$referralsetting[0]->minium_referral_loan}}" name="minium_referral_loan" class="form-control" style="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <p for="username" class="col-md-3 col-form-label text-md-left">Loan amount per referral:</p>
                                                <div class="col-md-7">
                                                    <input type="text" value="{{$referralsetting[0]->per_referral_loan}}$" name="per_referral_loan" class="form-control" style="">
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row mb-0">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-7 ">
                                                    <button type="submit" class="btn btn-primary" style="background-color:#28a745">Update profile</button>
                                                    
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

       <!-- Required datatable js -->
       <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <!-- <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script> -->
        <script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });
                table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );
        </script>
        
@endsection