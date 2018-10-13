@extends('master.frontend_2')
@section('header')
     <!-- Include main style theme --> 
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}"/>
@endsection
@section('content') 
        <div class="breadcrumbs">  
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a class="first_element" href="{{route('frontend.index')}}">Home</a><span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
</header>
<!-- Header end -->

<!-- Content blocks -->
<div class="blog_cover">
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="owl-blog owl-carousel owl-theme">
 
                      <div class="item"><img src="{{asset('frontend/images/blog-sl.jpg')}}" alt=""/></div>
                      <div class="item"><img src="{{asset('frontend/images/blog-sl.jpg')}}" alt=""/></div>
                      <div class="item"><img src="{{asset('frontend/images/blog-sl.jpg')}}" alt=""/></div>
                     
                  </div>
            </div>
        </div>
    </div>
</section>

<!-- Top posts block -->
<section class="top-posts-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3 class="light_text">Top Posts</h3>
                <div class="row row-15">
                    <div class="top-post col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <img src="{{asset('frontend/images/top-post-1.jpg')}}" alt=""/>
                            <div class="top-post-ins">
                                <span class="date_author">25.04.2016 by Admin</span>
                                <h3 class="light_text"><a href="#">Cillum short loin ball tip rump shankle</a></h3>
                                <p>Picanha pancetta shank, ground round meatloaf sint tri-tip rump incididunt. Ut ball tip laboris kielbasa duis.</p>
                                <span>indirect tax</span>
                            </div>
                            <div class="post_buttons">
                                <div class="row">
                                    <div class="post_buttons_ins post_buttons1"><a href="#">21044</a></div>
                                    <div class="post_buttons_ins post_buttons2"><a href="#">5703</a></div>
                                    <div class="post_buttons_ins post_buttons3"><a href="#">3145</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-post col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <img src="{{asset('frontend/images/top-post-2.jpg')}}" alt=""/>
                            <div class="top-post-ins">
                                <span class="date_author">25.04.2016 by Admin</span>
                                <h3 class="light_text"><a href="#">Cillum short loin ball tip rump shankle</a></h3>
                                <p>Picanha pancetta shank, ground round meatloaf sint tri-tip rump incididunt. Ut ball tip laboris kielbasa duis.</p>
                                <span>personal tax</span>
                            </div>
                            <div class="post_buttons">
                                <div class="row">
                                    <div class="post_buttons_ins post_buttons1"><a href="#">17044</a></div>
                                    <div class="post_buttons_ins post_buttons2"><a href="#">6475</a></div>
                                    <div class="post_buttons_ins post_buttons3"><a href="#">3145</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-post col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <img src="{{asset('frontend/images/top-post-3.jpg')}}" alt=""/>
                            <div class="top-post-ins">
                                <span class="date_author">25.04.2016 by Admin</span>
                                <h3 class="light_text"><a href="#">Cillum short loin ball tip rump shankle</a></h3>
                                <p>Picanha pancetta shank, ground round meatloaf sint tri-tip rump incididunt. Ut ball tip laboris kielbasa duis.</p>
                                <span>large corporate</span>
                            </div>
                            <div class="post_buttons">
                                <div class="row">
                                    <div class="post_buttons_ins post_buttons1"><a href="#">21044</a></div>
                                    <div class="post_buttons_ins post_buttons2"><a href="#">5703</a></div>
                                    <div class="post_buttons_ins post_buttons3"><a href="#">3145</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row row-15">
        <div class="short_posts col col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <div class="post">
                <img src="{{asset('frontend/images/post-video.jpg')}}" alt=""/>
                <div class="post-short-text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                    <p>Labore quis ut venison ball tip short ribs eiusmod minim nulla. Irure ipsum pork belly fatback voluptate aliqua. Meatloaf aliquip salami sunt non veniam, ut exercitation rump nisi aute jerky consequat. Ham aliqua ad quis. Venison laboris ipsum, ham et salami eu. Commodo salami cupim jerky sausage. Cupim deserunt proident sausage cillum. Rump beef ribs est, swine consequat ribeye ullamco ham hock landjaeger nostrud pork shoulder.</p>
                </div>
            </div>
        
            <div class="post">
                <img src="{{asset('frontend/images/post2.jpg')}}" alt=""/>
                <div class="post-short-text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                    <p>Labore quis ut venison ball tip short ribs eiusmod minim nulla. Irure ipsum pork belly fatback voluptate aliqua. Meatloaf aliquip salami sunt non veniam, ut exercitation rump nisi aute jerky consequat. Ham aliqua ad quis. Venison laboris ipsum, ham et salami eu. Commodo salami cupim jerky sausage. Cupim deserunt proident sausage cillum. Rump beef ribs est, swine consequat ribeye ullamco ham hock landjaeger nostrud pork shoulder.</p>
                </div>
            </div>
            
            <div class="status">
                <div class="status_ins">
                    <a href="#">
                    <img src="{{asset('frontend/images/status_sm.png')}}" alt="" /><br />
                    <span>status</span>
                    <span class="status_author">25.04.2016 by Admin</span>
                    <p>Voluptate excepteur ullamco ground round pancetta strip steak. Jowl sint laborum magna short.</p>
                    </a>
                </div>
            </div>
                
            <div class="no_img_post post">
                <div class="post-short-text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">link</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                </div>
            </div>
        
    
            <div class="post no-text-post">
                <img src="{{asset('frontend/images/post3.jpg')}}" alt=""/>
                <div class="post-short-text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                </div>
            </div>
            
            <div class="post">
                <div class="quote_post">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h5>Stephen Hill</h5>
                </div>
            </div>
            
            <div class="post">
                <img src="{{asset('frontend/images/post4.jpg')}}" alt=""/>
                <div class="post-short-text ans_text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                    <p>Sam: Landjaeger filet mignon mollit leberkas magna anim cupim tempor doner chuck ut.</p>
                    <p class="ans_text_p">George: Ipsum sausage bresaola tongue biltong dolor in chuck sunt anim beef ribs cillum ham. </p>
                    <p>Sam: Occaecat velit officia shoulder beef swine chuck bacon fatback irure nisi magna.</p>
                    <p class="ans_text_p">George: Sunt swine tenderloin filet mignon doner chuck hamburger do anim bacon ea. Dolore cow fugiat doner pork loin labore meatloaf pancetta. Turducken dolore sed mollit lorem.</p>
                </div>
            </div>
            
            <div class="only_text_post post">
                <div class="post-short-text">
                    <div class="row">
                        <div class="post-author">25.04.2016 by Admin</div>
                        <div class="post-cat"><a href="#">general features</a></div>
                    </div>
                    <h3 class="light_text"><a href="#">Tongue excepteur pork belly swine cupim</a></h3>
                    <p>Turkey ipsum pastrami, andouille elit enim incididunt. Do capicola laboris ham hock ut commodo isicing. Pork ad doner, ut bresaola beef ribs aute beef ut drumstick nostrud. Pariatur in voluptate sausage ham sunt. Labore ullamco ground round in veniam.</p>
                    <br />
                    <p>Shoulder fatback short loin dolore officia prosciutto excepteur turkey. Consectetur aliqua mollit, chetta aliquip picanha esse minim.</p>
                </div>
            </div>
            
        </div>
    
        <div class="r_sidebar col-lg-4 col-md-4 col-sm-5 col-xs-12">
            <div class="get-in-touch">
                <h3 class="light_text">Get In Touch</h3>
                <div class="get-in-touch-ins">
                    <div class="row">
                        <div class="in-touch in-touch1">
                        <a href="#">
                        <img src="{{asset('frontend/images/rt-f.png')}}" alt=""/><br />
                        <span class="counter">24.7K</span>
                        <span class="und_counter">friends</span>
                        </a>
                        </div>
                        <div class="in-touch in-touch2">
                        <a href="#">
                        <img src="{{asset('frontend/images/rt-t.png')}}" alt=""/><br />
                        <span class="counter">24.7K</span>
                        <span class="und_counter">friends</span>
                        </a>
                        </div>
                        <div class="in-touch in-touch3" style="height:30px">
                        <a href="#">
                        <img src="{{asset('frontend/images/googleplus.png')}}"  class="img-responsive" alt=""/><br />
                        <span class="counter">24.7K</span>
                        <span class="und_counter">friends</span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="newsletters widget widget_mailchimp">
                <h3 class="light_text widget-title">Newsletters</h3>
                <form class="signup form-inline" action="#" method="get">
                    <div class="row">
                    <div class="form-group subscribe">
                        <div class="row">
                        <input name="email" type="email" class="mailchimp_email" placeholder="your@email.com"/>
                        <button type="submit" class="theme_button"><img src="{{asset('frontend/images/subscr.png')}}" alt=""/>
                        </button>
                        </div>
                    </div>
                    </div>
                    <div class="response"></div>
                </form>
                <p>Subscribe to our Newsletter right now to be updated. We promice not to spam!</p>
            </div>
            <div class="flicks">
                <h3 class="light_text">Flickr Widget</h3>
                <div class="row">
                    <div class="col-sm-12">
    				    <div id="flickr"></div>
    				</div>
                </div>
            </div>
            
            <div class="tags">
                <h3 class="light_text">Tags</h3>
                <div class="row">
                <a href="#">large corporate</a>
                <a href="#">general features</a>
                <a href="#">inheritance tax</a>
                <a href="#">international tax</a>
                <a href="#">indirect tax</a>
                <a href="#">personal tax</a>
                </div>
            </div>
            
            <div class="categories">
                <h3 class="light_text">Categories</h3>
                <select>
                    <option>Select Category</option>
                    <option>1 cat</option>
                    <option>2 cat</option>
                </select>
            </div>
            
            <div class="recent-posts">
                <h3 class="light_text">Recent Postst</h3>
                <div class="row">
                    <div class="recent-post row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <a href="#"><img src="{{asset('frontend/images/rec-post-1.jpg')}}" alt=""/></a>
                        </div>
                        <div class="r-post-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="recent-name"><a href="#">Generating Traffic Through Search</a></span>
                            <p>But who has any right to find fault with
                                a man who chooses memories.</p>
                            <span class="recent-date">25 / 04 / 2016</span>
                        </div>
                    </div>
                    <div class="recent-post row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <a href="#"><img src="{{asset('frontend/images/flick1.jpg')}}" alt=""/></a>
                        </div>
                        <div class="r-post-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="recent-name"><a href="#">Generating Traffic Through Search</a></span>
                            <p>But who has any right to find fault with
                                a man who chooses memories.</p>
                            <span class="recent-date">25 / 04 / 2016</span>
                        </div>
                    </div>
                    <div class="recent-post row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <a href="#"><img src="{{asset('frontend/images/flick5.jpg')}}" alt=""/></a>
                        </div>
                        <div class="r-post-text col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="recent-name"><a href="#">Generating Traffic Through Search</a></span>
                            <p>But who has any right to find fault with
                                a man who chooses memories.</p>
                            <span class="recent-date">25 / 04 / 2016</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="archives">
                <h3 class="light_text">Archives</h3>
                <select>
                    <option>Select Month</option>
                    <option>03.2016</option>
                    <option>02.2016</option>
                </select>
                <p>Subscribe to our Newsletter right now to be updated. We promice not to spam!</p>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section('footer')
    <!-- FlickrPlugin-->
     <script src="{{asset('frontend/js/jflickrfeed.min.js')}}"></script>
@endsection
    