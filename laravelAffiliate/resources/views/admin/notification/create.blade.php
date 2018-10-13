@extends('master.admin')
@section('header')

    <link href="{{asset('backend/plugins/summernote/summernote.css')}}" rel="stylesheet" />    
@endsection
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
                            <h4 class="page-title">Blog</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endsection

            @section('content')
            <div class="container" style="margin-top:30px">
<!-- 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-b-30 m-t-0 header-title"><b>Default Editor</b></h4>
                            <div class="summernote">
                                <h3>Hello Summernote</h3>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row" >
                    <div class="col-md-12">
                        <div class="card-box" style="background-color:white;border-color:#d3e0e9;margin-top:20px">
                            <h4 class="m-t-0 header-title" style="border-top-color:#d3e0e9;padding-top:20px;padding-left:20px">All Posts</h4>
                                <div class="panel-body">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if (session('errors'))
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            @foreach (session('errors')->all() as $error)
                                                <ul>
                                                    <li>{{ $error }}</li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    @endif

                                    <form method="post" action="{{ url('/post/store') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div classs="col-md-8 col-md-offset-3">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div classs="col-md-8 col-md-offset-2" style="margin-top:20px">
                                                <div class="summernote" name="content">
                                                    <!-- <textarea class="form-control" name="content" rows="10" cols="50">
                                                    </textarea> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-success"> Send Notification</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>


                <div class="row" >
                    <div class="col-md-12">
                        <div class="card-box" style="background-color:white;border-color:#d3e0e9;margin-top:20px">
                            <h4 class="m-t-0 header-title" style="border-top-color:#d3e0e9;padding-top:20px;padding-left:20px">All Posts</h4>
                            <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table" style="border:1px solid;border-color:#d3e0e9;margin-top:20px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Create&nbspBy</th>
                                                <th>Create&nbspAt</th>
                                                <th style="width:150px;text-align:center;" >Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($posts as $post)
                                            <tr>
                                                <td >{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ substr(strip_tags($post->content), 0, 30) }}{{ strlen(strip_tags($post->content)) > 30 ? "....." : "" }}</td>
                                                <td>{{ $post->user->name }}</td>
                                                <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.notification.edit', $post->id) }}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <img src="{{asset('images/edit.png')}}" style="width:30px;height:30px;" alt="edit" />
                                                    </a>

                                                    <a href="{{ route('admin.notification.show', $post->id) }}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="view" >
                                                        <img src="{{asset('images/view.png')}}" style="width:30px;height:30px" alt="edit" />
                                                    </a>

                                                    <a href="{{ route('admin.notification.delete', $post->id) }}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="Delete" >
                                                        <img src="{{asset('images/delete.jpg')}}" style="width:30px;height:30px"  alt="delete" />
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        @if (count($posts) > 0)
                                            <tfoot>
                                                <tr>
                                                    <td colspan="9">{{ $posts->links() }}</td>
                                                </tr>
                                            </tfoot>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('footer')
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{asset('backend/plugins/summernote/summernote.min.js')}}"></script>

        <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

                $('.inline-editor').summernote({
                    airMode: true
                });

            });
        </script>
        @endsection
