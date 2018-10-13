@extends('master.admin')
@section('header')
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
<!-- </div> -->
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
            <div class="container" style="background-color:#ffffff">
                <div class="row">
                    <div class="col-md-2 col-md-offset-2">
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default" style="border:2px solid #ddd;margin-top:20px">
                            <div class="panel-heading" style="background-color:#ddd;height:50px;font-size:16px">
                                {{ $post->title }} <small style="margin-left:30px">Created By: {{ $post->user->name }}</small>
                            </div>
                            <div class="panel-body" style="border-color:white">
                                {{ $post->content }}
                            </div>
                            <div class="panel-footer text-right">
                                <a href="{{ url('/post/index') }}" class="btn btn-link" style="color:#0fc90f"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
                            </div>
                        </div><hr style="background-color:#ddd">

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

                        <div class="panel panel-default" style="border:2px solid #ddd;">
                            <div class="panel-heading">
                                Comments 
                                <div class="badge" style="background-color:black;color:green">{{ $post->comments()->count() }}</div>
                            </div>
                            <div class="panel-body"><hr style="background-color:#ddd">
                                @forelse ($post->comments()->orderBy('id', 'desc')->get() as $comment)
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            {{ $comment->comment }}
                                        </div>
                                        <div class="panel-footer text-right">
                                            <small>By: {{ $comment->user->name }}</small>
                                        </div>
                                    </div>
                                @empty
                                    There are no Comments
                                @endforelse
                            </div><hr style="background-color:#ddd">
                            <div class="panel-footer">
                                <form action="{{ url('/comment/store') }}" method="post" style="display: flex;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <input type="text" name="comment" placeholder="comment..." class="form-control" style="border-radius: 0;">
                                    <input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        @section('footer')
        <!-- <script src="{{ asset('js/app.js')}}"></script> -->
        @endsection
