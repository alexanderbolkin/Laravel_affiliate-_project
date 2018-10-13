@extends('master.frontend_2')
@section('content')
<div class="breadcrumbs">  
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a class="first_element" href="{{route('frontend.index')}}">Home</a><span>Contact us</span>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Header end -->

<!-- Content blocks -->
<section class="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="map-sector col-lg-4 col-md-4 col-sm-5 col-xs-12">
                        <h3 class="light_text">Contact Info</h3>
                        <div class="contact_us">
                          <span><img src="{{asset('frontend/images/adress.png')}}" alt=""/>528 tenth Avenue Boston, BT 58966</span> 
                          <span><img src="{{asset('frontend/images/mail.png')}}" alt=""/>Support@gmail.com</span>
                          <span><img src="{{asset('frontend/images/phone.png')}}" alt=""/>1-800-300-2121</span>
                        </div>
                        <h3 class="light_text">On The Map</h3>
                        <div id="map"></div>
                  </div>
                  <div class="main_contact_form col-lg-8 col-md-8 col-sm-7 col-xs-12">
                      <h3 class="light_text">Get Free Quote</h3>
                        <div class="contact_us_form">
                          <input class="name" id="posName2" placeholder="Name"/>
                          <input class="email" id="posEmail2" placeholder="Email"/>
                          <input class="subject" id="posSubject2" placeholder="Subject"/>
                          <textarea id="posText2" placeholder="Mesage"></textarea>
                          <button type="button" class="button_fat" id="send2">Submit</button>
                          <div class="span4">
          	    	        <div class="lod_bar" id='loadBar2'></div>
                          </div>
                        </div>
                  </div>
            </div>       
                                                   
        </div>
    </div>
    
</section>

@endsection
@section('footer')
    <!-- contact2 -->
    <script src="{{asset('frontend/js/contact_main.js')}}"></script>
    <!-- Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="{{asset('frontend/js/googlemaps.js')}}"></script>
@endsection