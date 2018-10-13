@extends('master.admin')
@section('header')
    
<link href="{{asset('backend/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
                                    <a href ="{{asset('userguide.pdf')}}"   class="btn btn-primary  waves-effect waves-light" 
                                    style="background-color:white;color:#3b63da;border-color:white">http://antlax.com/user_guide.pdf</a>
                                        
                                </div>
                                <div class="btn-group ml-1">
                                <a href = "{{asset('userguide.pdf')}}"  class="btn btn-primary  waves-effect waves-light" 
                                download    style="background-color:white;color:#3b63da;border-color:white">Download</a>
                                </div>

                                <!-- <div class="btn-group ml-1">
                                <a href =""  class="btn btn-primary  waves-effect waves-light" 
                                    style="background-color:white;color:#3b63da;border-color:white">Delete</a>
                                </div> -->
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
                                
                                <div class="col-md-2 portlets"></div>
                                <div class="col-md-8 portlets">
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div> 
                                    @endif
                                    <div class="m-b-30" style="margin-bottom: 0px !important;">
                                        <!-- <form method="post" action="" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzone" style="background-color:#ffffff;"> -->
                                        <form method="post" action="{{url('file')}}" enctype="multipart/form-data" class="dropzone dz-clickable"  style="background-color:#ffffff;">
                                        {{csrf_field()}}
                                            <div class="dz-default dz-message" style="margin: 0em 0">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <img src="{{asset('backend/dark/assets/images/pictures/upload.jpg')}}" class="img-responsive" 
                                                        alt="" style="text-align:center;margin-left:3px;margin-right:15px; text-align: center; vertical-align: middle;width:60px;"/><br>
                                                        
                                                        <h4 id="input01" class=" waves-effect waves-light">Choose&nbspfile&nbspto&nbspUpload</h4><br>
                                                        <input type="file" name="example" class="col-md-2 btn btn-success " style="background-color:#42a746;"><br>
                                                        <span class="btn btn-default waves-effect waves-light">Or drag and drop them here</span>
                                                    </div>

                                                    <div class="clearfix pull m-t-15">
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Top 1000</b></h4>
                            <p class="text-muted font-13 m-b-30"></p>
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>File Name</th>
                                        <th>File Type</th>
                                        <th>SafeFileName</th>
                                        <th>File Size</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($files as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td>{{ $file->file_name }}</td>
                                    <td>{{ $file->file_type }}</td>
                                    <td>{{ $file->safe_file_name }}</td>
                                    <td>{{ $file->file_size }}</td>
                                    <td>
                                        <a href="{{route('admin.files.delete',$file->id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="Delete" >
                                            <img src="{{asset('backend/dark/assets/images/pictures/delete.jpg')}}" style="width:30px;height:30px"  alt="delete"  />
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
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
        <!-- <script src="{{asset('backend/plugins/dropzone/dist/dropzone.js')}}"></script> -->
        <script src="{{asset('backend/dark/assets/js/bootstrap-filestyle.min.js')}}"></script>
        <script type="text/javascript">
			$('#input01').filestyle();
        </script>

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


    