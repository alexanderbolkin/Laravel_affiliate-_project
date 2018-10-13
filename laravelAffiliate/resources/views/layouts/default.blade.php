<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="/assets/images/favicon_1.ico">
    <title>antlax</title>
    <link href="{{asset('backend/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/dark/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/dark/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/dark/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('backend/dark/assets/js/modernizr.min.js')}}"></script>
</head>

<body class="fixed-left">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-bottom">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
         <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="{{asset('backend/dark/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
        <script src="{{asset('backend/dark/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/detect.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/waves.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('backend/plugins/switchery/switchery.min.js')}}"></script>
        
         @yield('footer')
        <!-- Custom main Js -->
        <script src="{{asset('backend/dark/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('backend/dark/assets/js/jquery.app.js')}}"></script>

    </body>

<!-- Mirrored from coderthemes.com/minton/dark/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 03:41:40 GMT -->
</html>
