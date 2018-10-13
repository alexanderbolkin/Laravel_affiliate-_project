
@extends('master.frontend')

@section('content')
	<div id="owl-demo" class="owl-carousel owl-theme">
		<div class="item">
			<span class="slide_light_text">Choosing a</span><br />
			<span class="slide_middle_text">Financial Advisor</span><br />
			<span class="slide_small_text">We will help you take control of the things that matter most in your life</span><br />
			<!-- <a class="button_fat" href="#">Calculate</a> -->
		</div>
		<div class="item">
			<span class="slide_light_text">Reliable &</span><br />
			<span class="slide_middle_text">Trusted Advice</span><br />
			<span class="slide_small_text">Our company provides worry-free services you can always count on.</span><br />
			<!-- <a class="button_fat" href="#">Calculate</a> -->
		</div>
		<div class="item">
			<span class="slide_light_text">Personal</span><br />
			<span class="slide_middle_text">Advisor Services</span><br />
			<span class="slide_small_text">You may sleep tight while we are taking care of your finance issuses</span><br />
			<!-- <a class="button_fat" href="#">Calculate</a> -->
		</div>
	</div>
	<!-- Header tips -->       
	<div class="container tips">
		<div class="row">
			<div class="tip_1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<img src="{{asset('frontend/images/tip1.png')}}" alt=""/><br />
				<h4>Financial Planner</h4>
				<p>We will work through the process to identify your needs, goals and strategy, and put your plan into action</p>
			</div>
			<div class="tip_2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<img src="{{asset('frontend/images/tip2.png')}}" alt=""/>
				<h4>Mortgage Advisor</h4>
				<p>We will give you independent advice and help you search over thousands of mortgages to find the right deal for you</p>
			</div>
			<div class="tip_3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<img src="{{asset('frontend/images/tip3.png')}}" alt=""/>
				<h4>Investment Advisor</h4>
				<p>Our professionals will provide you with independent and custom-tailored investment analysis and advice</p>
			</div>
		</div>
	</div>
</header>
<!-- Header end -->
<!-- Content blocks -->
<section class="offer-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="offer-section-heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5>We Offer Services That Work</h5>
					<p>The wise man therefore always holds in these matters to this principle of selection:<br /> 
						he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
					<div class="offers">
						<img src="{{asset('frontend/images/offer1.png')}}" alt=""/><br />
						<h4>General Features</h4>
						<p>But I must explain to you how all this mistaken<br /> idea of denouncing pleasure and praising</p>
					</div>
					<div class="offers">
						<img src="{{asset('frontend/images/offer2.png')}}" alt=""/><br />
						<h4>Inheritance Tax</h4>
						<p> will give you a complete account of the<br /> system, and expound the actual</p>
					</div>
					<div class="offers offer_last">
						<img src="{{asset('frontend/images/offer3.png')}}" alt=""/><br />
						<h4>Large Corporate</h4>
						<p>The master-builder of human happiness.<br /> No one rejects, dislikes, or avoids pleasure</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
					<div class="offers">
						<img src="{{asset('frontend/images/offer4.png')}}" alt=""/><br />
						<h4>Indirect Tax</h4>
						<p>Because it is pleasure, but because those who do<br /> not know how to pursue pleasure rationally encounter</p>
					</div>
					<div class="offers">
						<img src="{{asset('frontend/images/offer5.png')}}" alt=""/><br />
						<h4>International Tax</h4>
						<p>The wise man therefore always holds in these<br /> matters to this principle of selection</p>
					</div>
					<div class="offers offer_last">
						<img src="{{asset('frontend/images/offer6.png')}}" alt=""/><br />
						<h4>Personal tax</h4>
						<p>He rejects pleasures to secure other greater pleasures,<br /> or else he endures pains to avoid worse pains</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Calculate section -->
<!-- <section class="calculate-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-7 col-md-9 col-sm-10 col-xs-12">
					<div class="row">
						<h5>Lease Calculator</h5>
						<div class="inputs">
							<div class="row">
								<div class="input">
									<label for="amount">Loan Amount</label>
									<input id="amount" placeholder="2000"/>
								</div>
								<div class="input">
									<label for="value">Residual Value</label>
									<input id="value" placeholder="1000"/>
								</div>
								<div class="input">
									<label for="rate">Interest Rate%</label>
									<input id="rate" placeholder="7.5"/>
								</div>
								<div class="input">
									<label for="months">Number of Months</label>
									<input id="months" placeholder="36"/>
								</div>
							</div>
						</div>
						<p>Results based in the data entered above</p>
						<div class="inputs results">
							<div class="row">
								<div class="input">
									<label>Monthly Payment</label>
									<input id="payment" value="3732.56"/>
								</div>
								<div class="input">
									<label>Interest Amount</label>
									<input id="amount2" value="37,32"/>
								</div>
								<div class="input">
									<label>Total Payment</label>
									<input id="total" value="13448.23"/>
								</div>
								<div class="input">
									<a href="#" class="button_fat">Order now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Pricing section -->
<section class="pricing-section">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<div class="row row-15" >
				<div class="pricing_help col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div>
						<img src="{{asset('frontend/images/help.png')}}"  alt=""/><br />
						<h5>Need Help?</h5>
						<p>Contact our customer support team if you have any further questions.<br /> 
							We are heare to help you out
						</p>
						<div class="row contact">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<span>1-800-300-2121</span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<a href="mailto:support@gmail.com">Support@gmail.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Solutions section -->
<section class="solutions-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="solutions-text col-lg-6 col-md-7 col-sm-7 col-xs-12">
						<h5>Our Average Client Receives</h5>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled 
							and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. 
							But in certain circumstances and owing to the claims.
						</p>
						<ul>
							<li><strong>692%</strong> Campaign ROI Exceeds</li>
							<li><strong>8x</strong> the number of keywords sending traffic to your site</li>
							<li><strong>296%</strong>increase in organic traffic</li>
						</ul>
						<div>
							<a href="#" class="button_fat">Order now</a>
							<a class="button_flat" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonials section -->
<section class="testimonials-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="testi_heading">
					<h5>What Our Client Say</h5>
				</div>
				<div class="owl-testimonials owl-carousel owl-theme">
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi2.png')}}" alt=""/><br />
							<span class="name">Stephen Hill</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men 
								so beguiled"
							</p>
							<span class="whois">SEO Analyst</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi1.png')}}" alt=""/><br />
							<span class="name">Jacqueline Bowman</span>
							<p>"Demoralized by the charms of pleasure 
								of the moment, so blinded by desire, that 
								they cannot foresee the pain"
							</p>
							<span class="whois">Marketing Manager</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi3.png')}}" alt=""/><br />
							<span class="name">Rafaela Meyers</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men so 
								beguiled"
							</p>
							<span class="whois">Director</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi2.png')}}" alt=""/><br />
							<span class="name">Stephen Hill</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men 
								so beguiled"
							</p>
							<span class="whois">SEO Analyst</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi1.png')}}" alt=""/><br />
							<span class="name">Jacqueline Bowman</span>
							<p>"Demoralized by the charms of pleasure 
								of the moment, so blinded by desire, that 
								they cannot foresee the pain"
							</p>
							<span class="whois">Marketing Manager</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi3.png')}}" alt=""/><br />
							<span class="name">Rafaela Meyers</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men so 
								beguiled"
							</p>
							<span class="whois">Director</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi2.png')}}" alt=""/><br />
							<span class="name">Stephen Hill</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men 
								so beguiled"
							</p>
							<span class="whois">SEO Analyst</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi1.png')}}" alt=""/><br />
							<span class="name">Jacqueline Bowman</span>
							<p>"Demoralized by the charms of pleasure 
								of the moment, so blinded by desire, that 
								they cannot foresee the pain"
							</p>
							<span class="whois">Marketing Manager</span>
						</div>
					</div>
					<div class="item">
						<div class="testi_block">
							<img src="{{asset('frontend/images/testi3.png')}}" alt=""/><br />
							<span class="name">Rafaela Meyers</span>
							<p>"On the other hand, we denounce with 
								righteous indignation and dislike men so 
								beguiled"
							</p>
							<span class="whois">Director</span>
						</div>
					</div>
				</div>
				<a class="testi_logo logo1" href="#"><img src="{{asset('frontend/images/logo1.png')}}" alt=""/></a>
				<a class="testi_logo logo2" href="#"><img src="{{asset('frontend/images/logo2.png')}}" alt=""/></a>
				<a class="testi_logo logo3" href="#"><img src="{{asset('frontend/images/logo3.png')}}" alt=""/></a>
				<a class="testi_logo logo4" href="#"><img src="{{asset('frontend/images/logo4.png')}}" alt=""/></a>
				<a class="testi_logo logo5" href="#"><img src="{{asset('frontend/images/logo5.png')}}" alt=""/></a>
				<a class="testi_logo logo6" href="#"><img src="{{asset('frontend/images/logo6.png')}}" alt=""/></a>
			</div>
		</div>
	</div>
</section>
<!-- Contact section -->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="contact-text col-lg-6 col-md-7 col-sm-7 col-xs-12">
					<h5>Operator-Assist Feature</h5>
					<strong>Standart Operator Assist</strong>
					<p>Which toil and pain can procure him some great pleasure. To take a trivial example, 
						which of us ever undertakes laborious physical exercise?
					</p>
					<strong>Premium Operator Assist</strong>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising 
						pain was born and I will give you a complete account of the system, 
						and expound the actual teachings of the great explorer of the truth?
					</p>
					<div><a href="#" class="button_fat">Contact us</a><a class="button_flat" href="#">Call now</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner section -->
<section class="banner-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<h2>Try Our Perfect Services For <strong>FREE</strong></h2>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a class="button_flat" href="#">14 Days Free Trial</a></div>
			</div>
		</div>
	</div>
</section>
@endsection