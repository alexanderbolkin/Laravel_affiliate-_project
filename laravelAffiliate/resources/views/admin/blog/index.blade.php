@extends('master.admin')
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
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card-box" style="background-color:white;border-color:#d3e0e9;margin-top:20px">
                        <h4 class="m-t-0 header-title" style="border-top-color:#d3e0e9;padding-top:20px;padding-left:20px">All Posts</h4>
                        <a href="{{route('admin.blog.create')}}" class="btn btn-primary" style="height:40px;float:right;margin-bottom:20px">Create</a>
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
                                        @foreach ($blogs as $blog)
                                        <tr>
                                            <td >{{$blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ substr(strip_tags($blog->content), 0, 30) }}{{ strlen(strip_tags($blog->content)) > 30 ? "....." : "" }}</td>
                                            <td>{{ $blog->user->username }}</td>
                                            <td>{{ date('M j, Y', strtotime($blog->created_at)) }}</td>
                                            <td>
                                                <a href="{{ route('admin.blog.edit', $blog->id)}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <img src="{{asset('backend/dark/assets/images/pictures/edit.png')}}" style="width:30px;height:30px;" alt="edit" />
                                                </a>

                                                <a href="{{ route('admin.blog.show', $blog->id) }}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="view" >
                                                    <img src="{{asset('backend/dark/assets/images/pictures/view.png')}}" style="width:30px;height:30px" alt="edit" />
                                                </a>

                                                <a href="{{ route('admin.blog.delete', $blog->id) }}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="Delete" >
                                                    <img src="{{asset('backend/dark/assets/images/pictures/delete.jpg')}}" style="width:30px;height:30px"  alt="delete" />
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @if (count($blogs) > 0)
                                        <tfoot>
                                            <tr>
                                                <td colspan="12" style="padding:0 20px;">{{ $blogs->links()}}</td>
                                            </tr>
                                        </tfoot>
                                    @endif
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        
        
        
        