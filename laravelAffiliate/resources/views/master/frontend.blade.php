<!DOCTYPE HTML>
<html>
	
<!-- Mirrored from webdesign-finder.com/html/taxadvisor/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 11:39:16 GMT -->
<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<title>antlax.com</title>
		<meta name="keywords" content="Template" />
		<meta name="description" content="Responsive Template"/>
		<meta name="author" content="Mark Pulman"/>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}"/>
        <!-- Font awesome -->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}"/>
		<!-- Flexnav -->
		<link rel="stylesheet" href="{{asset('frontend/css/flexnav.css')}}"/>
		<!-- Include main style theme --> 
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>
		<!-- Include adaptive style theme --> 
		<link rel="stylesheet" href="{{asset('frontend/css/adaptive.css')}}"/>
		<!-- Include main style theme --> 
		<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}"/>

		<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}"/>


		@yield('header')
	</head>
	<body class="home_page_h" onload="MyDate()">
		<!-- Top -->
		<div class="over_header">
			<div class="container">
				<div class="row">
					<div class="over_header_ins col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="sotials_top col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<a class="facebook" href="https://www.facebook.com/">
									<img src="{{asset('frontend/images/f_b.png')}}" alt=""/>
								</a>
								<a class="twitter" href="https://www.twitter.com/">
									<img src="{{asset('frontend/images/t_b.png')}}" alt=""/>
								</a><a class="youtube" href="https://www.youtube.com/">
									<img src="{{asset('frontend/images/y_b.png')}}" alt=""/>
								</a>
								<a class="google" href="https://www.google.com/">
									<img src="{{asset('frontend/images/g_b.png')}}" alt=""/>
								</a>
							</div>
							<div class="text-right col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<span class="hr_last"><img src="{{asset('frontend/images/phone.png')}}" alt=""/>1-800-300-2121</span>
								<span><img src="{{asset('frontend/images/mail.png')}}" alt=""/>Support@gmail.com</span>
								<span><img src="{{asset('frontend/images/adress.png')}}" alt=""/>528 tenth Avenue Boston, BT 58966</span> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header -->
		<header class="header_type_1">
			<div class="header-wrapper page_header">
				<div id="fixblock" class="fixblock_main">
					<div class="container">
						<div class="border_bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-10">
									<a class="logo" href="#">
										<img src="{{asset('frontend/images/mylogo.png')}}" style="height:60px" class="img-responsive" alt="" /> 
									</a>
								</div>
								<nav class="menu col-lg-7 col-md-7 col-sm-5 col-xs-12">
									<div class="menu-button"><i class="fa fa-bars"></i></div>
									<ul class="flexnav" data-breakpoint="">
										<li><a class="active" href="{{route('frontend.index')}}">Home</a></li>
										<li><a href="{{route('frontend.service')}}">Services</a></li>
										<li><a href="{{route('frontend.news')}}">News</a></li>
										<li><a href="{{route('frontend.support')}}">Support</a></li>
										<li><a href="{{route('frontend.aboutus')}}">About Us</a></li>
										<li><a  href="{{route('frontend.faq')}}">Faq</a></li>
										<li><a href="{{route('frontend.contactUs')}}">Contact us</a></li>
									</ul>
								</nav>
								<div class="button_header col-lg-3 col-md-3 col-sm-4 col-xs-12">
									<a class="button_flat button_flat_menu" href="{{url('home')}}">Account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header slider -->
			@yield('content')
			<!-- Footer -->
			<footer>
				<div class="container">
					<div class="row row-15">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="footer_sec_1 footer-text col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<h6>About us</h6>
								<p>But because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
									Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because 
									occasionally circumstances
								</p>
								<span><img src="{{asset('frontend/images/adress.png')}}" alt=""/>528 tenth Avenue Boston, BT 58966</span>
								<span><img src="{{asset('frontend/images/mail.png')}}" alt=""/>Support@gmail.com</span>
								<span><img src="{{asset('frontend/images/phone.png')}}" alt=""/>1-800-300-2121</span>
								<a class="first_link facebook" href="#">
									<img src="{{asset('frontend/images/f_b.png')}}" alt=""/>
								</a>
								<a  class="twitter" href="#">
									<img src="{{asset('frontend/images/t_b.png')}}" alt=""/>
								</a>
								<a class="youtube" href="#">
									<img src="{{asset('frontend/images/y_b.png')}}" alt=""/>
								</a>
								<a class="google" href="#">
									<img src="{{asset('frontend/images/g_b.png')}}" alt=""/>
								</a>
							</div>
							<div class="footer_sec_2 footer-text col-lg-4 col-md-3 col-sm-6 col-xs-12">
								<h6>Our blog</h6>
								<strong><a href="#">Generating Traffic Through Search</a></strong>
								<p>But who has any right to find fault with a man who chooses memories</p>
								<span>25 / 04 /2016</span>
								<hr />
								<strong><a href="#">Today May Be Just Like Any Other Day!</a></strong>
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae et molestiae non recusandae</p>
								<span>25 / 04 /2016</span>
							</div>
							<div class="footer_sec_3 footer-text col-lg-4 col-md-5 col-sm-12 col-xs-12">
								<h6>Get Free Quote</h6>
								<div class="input input1">
									<input type="text" id="posName" placeholder="Name"/>
								</div>
								<div class="input input2">
									<input class="input_2" type="text" id="posEmail" placeholder="Email"/>
								</div>
								<div class="input input_text">
									<textarea id="posText" placeholder="Comment"></textarea>
								</div>
								<div class="button_footer"><button type="button" class="button_fat" id="send">Submit</button></div>
								<div class="span4">
									<div class="lod_bar" id='loadBar'></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<div class="copiright"> 
				<span>tax adviser -  SEO &#38; WP Marketing Agency &#169; 2016 All Rights Reserved</span>
				<a href="#">Made by <img src="{{asset('frontend/images/mw.png')}}" alt=""/> mw templates</a> 
			</div>
			<!-- jQuery -->
			<script src="{{asset('frontend/js/jquery.js')}}"></script>
			<!-- Bootstrap -->
			<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
			<!-- Flexnav plugin -->
			<script src="{{asset('frontend/js/flexnav.js')}}"></script>
			<!-- Slider plugin -->
			<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
			<!-- Custom -->    
			<script src="{{asset('frontend/js/custom.js')}}"></script>


						
           <script type="text/javascript">

           	$(document).ready(function(){
			   alert('asfsaf')
			});
			            
                function MyDate()
                {
                	alert('fasdasda');
                    var mydate=new Date();
                    var day=mydate.getDay();
                    var month=mydate.getMonth();
                    var year=mydate.getYear();
                    var date=mydate.getDate();
                    var h = mydate.getHours();
                    var m = mydate.getMinutes();
                    var s = mydate.getSeconds();
                    m = checkTime(m);
                    s = checkTime(s);
                    if(year<1000)
                         year+=1900;
                    if(date<10)
                        date="0"+date;
                        var datenumber=new Array("Sunday","Monday","Tuesday","Wednesday","Thirsday","Friday" ,"Saturday");
                        var monthnumber=new Array("January","Febrary","March","Aprial","May","Jun" ,"July","Auguest","September","Octover","November" ,"December");
                        // document.write(""+datenumber[day]+","+monthnumber[month]+","+date+","+year+"");
                        document.getElementById("time").innerHTML =datenumber[day]+","+monthnumber[month]+","+date+","+year+" + " h + ":" + m + ":" + s;
                        var t = setTimeout(function(){ MyDate() }, 500);
                }
        
                // function startTime()
                // {
                // var today = new Date();
                // var h = today.getHours();
                // var m = today.getMinutes();
                // var s = today.getSeconds();
                // m = checkTime(m);
                // s = checkTime(s);
                // document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
                // var t = setTimeout(function(){ startTime() }, 500);
                // }
        </script>


			@yield('footer')
		</body>

<!-- Mirrored from webdesign-finder.com/html/taxadvisor/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 11:39:46 GMT -->
</html>