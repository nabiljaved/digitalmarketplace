<!-- Footer -->
@if(!Route::is(['index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9']))
<footer class="footer">
		
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo.svg')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>Unleash growth through a seamless digital marketing hub. Discover, transact, elevate your online presence effortlessly. Join now to sell and avail services hassle-free! </p>
                        </div>
                        <div class="footer-selects">
                            <h2 class="footer-title">Language & Currency</h2>
                            <div class="row">
                                <div class="col-lg-12 d-flex">
                                    <div class="footer-select">
                                        <img src="{{ URL::asset('/assets/img/icons/global.svg')}}" alt="img">
                                        <select class="select">
                                            <option>English</option>
                                            <option>France</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                    <div class="footer-select">
                                        <img src="{{ URL::asset('/assets/img/icons/dropdown.svg')}}" class="footer-dropdown" alt="img">
                                        <select class="select">
                                            <option>US Dollars</option>
                                            <option>INR</option>
                                            <option>Kuwait</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Quick Links</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('blog-grid')}}">Blogs</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}">Contact Us</a>
                            </li>
                            <!-- <li>
                                <a href="{{url('provider-signup')}}">Become a Professional</a>
                            </li>
                            <li>
                                <a href="{{url('user-signup')}}">Become a User</a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <p><span><i class="feather-map-pin"></i></span>Visit - Al Mamzar Centre, Office no. 2, Abu Hail, Dubai, United Arab Emirates</p>
                            </div>
                            <p><span><i class="feather-phone"></i></span>+971 55 101 6476</p>
                            <p class="mb-0"><span><i class="feather-mail"></i></span>connect@oracledigital.ae</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Follow Us</h2>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="footer-subtitle">Newsletter Signup</h2>
                        <div class="subscribe-form">
                        <form action="{{ route('newsletter-confirmation') }}" method="post">
                            @csrf
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                            <button type="submit" class="btn footer-btn">
                                <i class="feather-send"></i>
                            </button>
                        </form>
                    </div>
                  </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-image">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/visa.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/mastercard.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/stripe.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/discover.png')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->
    
</footer>
@endif
@if(Route::is(['index-2']))
<footer class="footer footer-two">
		
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo.png')}}" alt="logo"></a>
                        </div>
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="feather-phone-call"></i></span>
                                    <div>
                                        <h6>Tel</h6>
                                        <p>310-437-2766</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-mail"></i></span>
                                    <div>
                                        <h6>Email Address</h6>
                                        <p>truelysell@example.com</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-map-pin"></i></span>
                                    <div>
                                        <h6>Address</h6>
                                        <p>367 Hillcrest Lane, Irvine, California, United States</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Company</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('categories')}}">Categories</a>
                            </li>
                            <li>
                                <a href="{{url('blog-grid')}}">Blogs</a>
                            </li>
                            <li>
                                <a href="{{url('faq')}}">FAQ</a>
                            </li>
                            <li>
                                <a href="{{url('blog-list')}}">Blog List</a>
                            </li>
                            <li>
                                <a href="javascript:;">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Quick Links</h2>
                        <ul>
                            <li>
                                <a href="{{url('contact-us')}}">Contact us</a>
                            </li>
                            <li>
                                <a href="{{url('customer-chat')}}">Online Chat</a>
                            </li>
                            <li>
                                <a href="javascript:;">Whatsapp</a>
                            </li>
                            <li>
                                <a href="javascript:;">Telegram</a>
                            </li>
                            <li>
                                <a href="javascript:;">Ticketing</a>
                            </li>
                            <li>
                                <a href="javascript:;">Call Center</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Support</h2>
                        <ul>
                            <li>
                                <a href="javascript:;">Account</a>
                            </li>
                            <li>
                                <a href="javascript:;">Manage Deliveries</a>
                            </li>
                            <li>
                                <a href="{{url('orders')}}">Orders</a>
                            </li>
                            <li>
                                <a href="javascript:;">Payments</a>
                            </li>
                            <li>
                                <a href="javascript:;">Returns</a>
                            </li>
                            <li>
                                <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Instagram Feed</h2>
                        <ul class="row insta-row">
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-01.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-02.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-03.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-04.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-05.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-06.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-07.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-08.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                            <li class="col-3 col-md-4">
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/services/service-09.jpg')}}" alt="Instagram Image" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="payment-image">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-01.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-02.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-03.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-04.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-05.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/card-06.png')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Copyright Menu -->								
                        <div class="copyright-text">
                            <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</p>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->
    
</footer>
@endif
@if(Route::is(['index-3']))
<footer class="footer footer-three">
    <!-- Footer Top -->
    <div class="footer-top footer-top-three aos" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="{{url('/')}}"
                  ><img src="{{ URL::asset('/assets/img/logo.png')}}" alt="logo"
                /></a>
              </div>
              <div class="footer-content footer-content-three">
                <p>
                  Contrary to popular belief, Lorem Ipsum is not simply
                  random text. It has roots in a piece of classical Latin
                  literature from 45 BC, making it over 2000 years old.
                  Richard...
                </p>
              </div>
            </div>
            <!-- /Footer Widget -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-title-three">Discover</h2>
              <ul>
                <li>
                  <a href="javascript:void(0)">Chicago</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Los Angeles</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Miami</a>
                </li>
                <li>
                  <a href="javascript:void(0)">New York</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-title-three">Lists by Category</h2>
              <ul>
                <li>
                  <a href="javascript:void(0)">Hair style </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Trimming</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Hair makeup</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Clothes selection</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Beared Trimming</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Box Haircuts</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-title-three">Quick Links</h2>
              <ul>
                <li>
                  <a href="{{url('about-us')}}">About Us </a>
                </li>
                <li>
                  <a href="{{url('terms-condition')}}">Terms & Conditions</a>
                </li>
                <li>
                  <a href="{{url('privacy-policy')}}">User’s Guide</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Support Center</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Press Info</a>
                </li>
                <li>
                  <a href="javascript:void(0)">Contact Us</a>
                </li>
              </ul>
            </div>
            <!-- /Footer Widget -->
          </div>
          <div class="col-lg-2 col-md-6">
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-subtitle-three">
                Our Total Visitors
              </h2>
              <p>4,56,6597</p>
            </div>
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-subtitle-three">
                Need live support?
              </h2>
              <p>truelysell@example.com</p>
            </div>
            <div class="footer-widget footer-menu footer-menu-three">
              <h2 class="footer-title footer-subtitle-three">
                Toll Free Customer Care
              </h2>
              <p>+91 26447 99875</p>
            </div>
            <!-- /Footer Widget -->
          </div>
        </div>
      </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <!-- Copyright -->
        <div class="copyright">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-text copyright-color">
                <p class="mb-0">
                  &copy; <script>document.write(new Date().getFullYear())</script> truelysell. All Rights Reserved.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Copyright Menu -->
              <div class="copyright-menu">
                <ul class="footer-menu">
                  <li>
                    <a href="{{url('index-3')}}">Home</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Side Map</a>
                  </li>
                  <li>
                    <a href="{{url('privacy-policy')}}">Privacy policy</a>
                  </li>
                  <li>
                    <a href="{{url('privacy-policy')}}">Cookie Policy</a>
                  </li>
                </ul>
              </div>
              <!-- /Copyright Menu -->
            </div>
          </div>
        </div>
        <!-- /Copyright -->
      </div>
    </div>
    <!-- /Footer Bottom -->
</footer>
@endif
@if(Route::is(['index-4']))
<footer class="footer footer-four">

    <!-- Footer Top -->
    <div class="footer-top footer-top-four aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-widget-four">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo.svg')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content footer-content-four">
                            <p>Our Experts ae available 24/7</p>
                        </div>
                        <div class="footer-selects">
                            <div class="footer-expert">
                                <p><i class="feather-smartphone"></i>1800 - 672-4399</p>
                                <p><i class="feather-mail"></i>mail@truelysell.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title footer-title-four">Pages</h2>
                        <ul>
                            <li>
                                <a href="{{url('index-4')}}">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">For business</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Dry wash</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}">Contact</a>
                            </li>
                            <li>
                                <a href="{{url('user-signup')}}">Our Blog</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title footer-title-four">About us</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About</a>
                            </li>
                            <li>
                                <a href="{{url('service-grid')}}">Services</a>
                            </li>
                            <li>
                                <a href="{{url('how-it-works')}}">How we work</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">News</a>
                            </li>
                            <li>
                                <a href="{{url('maintenance')}}">Help Guide</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title footer-title-four">Resources</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Download</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Help Center</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Guides</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Partner Network</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Guide</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-subtitle footer-subtitle-four">Newsletter Signup</h2>
                        <div class="subscribe-form">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <button type="submit" class="btn footer-btn">
                                <i class="feather-send"></i>
                            </button>
                        </div>
                        <h2 class="footer-title footer-title-four">Follow Us</h2>
                        <div class="social-icon social-icon-four">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright copyright-four">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-text copyright-text-four">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> truelysell. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu policy-menu-four">
                                <li>
                                    <a href="{{url('index-4')}}">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Site Map</a>
                                </li>
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Cookie Policy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
@endif
@if(Route::is(['index-5']))
<footer class="footer footer-five">

    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('index-3')}}"><img src="{{ URL::asset('/assets/img/logo-03.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit, sed do eiusmod tempor commodo
                                consequat. </p>
                        </div>
                        <div class="footer-selects">
                            <h2 class="footer-title">Language & Currency</h2>
                            <div class="row">
                                <div class="col-lg-12 d-flex">
                                    <div class="footer-select">
                                        <img src="{{ URL::asset('/assets/img/icons/global.svg')}}" alt="img">
                                        <select class="select">
                                            <option>English</option>
                                            <option>France</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                    <div class="footer-select">
                                        <img src="{{ URL::asset('/assets/img/icons/dropdown.svg')}}" class="footer-dropdown" alt="img">
                                        <select class="select">
                                            <option>US Dollars</option>
                                            <option>INR</option>
                                            <option>Kuwait</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Quick Links</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('blog-grid')}}">Blogs</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{url('provider-signup')}}">Become a Professional</a>
                            </li>
                            <li>
                                <a href="{{url('user-signup')}}">Become a User</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <p><span><i class="feather-map-pin"></i></span> 367 Hillcrest Lane, Irvine,
                                    California, United States</p>
                            </div>
                            <p><span><i class="feather-phone"></i></span> 321 546 8764</p>
                            <p class="mb-0"><span><i class="feather-mail"></i></span> truelysell@example.com</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Follow Us</h2>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="footer-subtitle">Newsletter Signup</h2>
                        <div class="subscribe-form">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <button type="submit" class="btn footer-btn">
                                <i class="feather-send"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="payment-image">
                            <ul>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/visa.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/mastercard.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/stripe.png')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/payment/discover.png')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{url('terms-condition')}}">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
@endif
@if(Route::is(['index-6']))
<footer class="footer footer-six">
    <div class="footer-top-content">
        <img src="{{ URL::asset('/assets/img/bg-wave.png')}}" alt="">
    </div>
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-wid-six">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo-02.svg')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, Ut enim ad
                                minim veniam,
                                quis nostrud equip consectetur... <a href="javascript:;">Read More</a></p>
                            <div class="footer-six-main">
                                <div class="footer-six-left">
                                    <img src="{{ URL::asset('/assets/img/icons/call-calling.svg')}}" alt="">
                                    <div class="footer-six-ryt">
                                        <span>Phone Number</span>
                                        <h6>310-437-2766</h6>
                                    </div>
                                </div>
                                <div class="footer-six-left">
                                    <img src="{{ URL::asset('/assets/img/icons/sms.svg')}}" alt="">
                                    <div class="footer-six-ryt">
                                        <span>Mail Address</span>
                                        <h6>support@truelysell.com</h6>
                                    </div>
                                </div>
                                <div class="footer-six-left ">
                                    <img src="{{ URL::asset('/assets/img/icons/location.svg')}}" alt="">
                                    <div class="footer-six-ryt">
                                        <span>Address</span>
                                        <h6>706 Campfire Ave. Meriden, CT 06450</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Locations</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Atlanta, GA</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Boston, MA</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Chapel Hill, nC</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Chicago, IL</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Dallas, TX</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Home Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Home Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="footer-btns">View All Locations</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Support</h2>
                        <ul>
                            <li>
                                <a href="{{url('about-us')}}">Contact us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Online Chat</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Whatsapp</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Telegram</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Ticketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Call Centre</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Video Centre</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="footer-btns">Book Now</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Services</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Home Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Office Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Apartment Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Commercial Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Building Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Vehicle Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Carpet Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="footer-btns">Book Now</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu footer-menu-six">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Home Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Office Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Apartment Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Commercial Cleaning</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Building Cleaning</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>

            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom footer-bottom-six">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> © Truely Sell. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
@endif
@if(Route::is(['index-7']))
<footer class="footer footer-seven">

    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-widget-seven">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo-03.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                 incididunt ut labore exercitation ullamco laboris.We ara a lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                        </div>
                        <div class="footer-selects footer-selects-seven">
                            <h2 class="footer-subtitle">Newsletter Signup</h2>
                        <div class="subscribe-form">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button type="submit" class="btn footer-btn">
                                Submit
                            </button>
                        </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Support</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Account</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Book Appointment</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Orders</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Payments</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Returns</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">About</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Account</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Book Appointment</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Orders</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Payments</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Returns</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Services</h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Account</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Book Appointment</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Orders</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Payments</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Returns</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Contact</h2>
                        <div class="footer-six-main">
                            <div class="footer-six-left">
                                <span class="footer-seven-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/call-calling.svg')}}" alt="">
                                </span>
                                <div class="footer-six-ryt">
                                    <span>Phone Number</span>
                                    <h6>310-437-2766</h6>
                                </div>
                            </div>
                            <div class="footer-six-left">
                                <span class="footer-seven-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/sms.svg')}}" alt="">
                                </span>
                                <div class="footer-six-ryt">
                                    <span>Mail Address</span>
                                    <h6>support@truelysell.com</h6>
                                </div>
                            </div>
                            <div class="footer-six-left ">
                                <span class="footer-seven-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/location.svg')}}" alt="">
                                </span>
                                <div class="footer-six-ryt">
                                    <span>Address</span>
                                    <h6>706 Campfire Ave. Meriden, CT 06450</h6>
                                </div>
                            </div>
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:;" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom footer-bottom-seven">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>Copyright <script>document.write(new Date().getFullYear())</script> © Truely Sell. All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
@endif
@if(Route::is(['index-8']))
<footer class="footer footer-eight">
		
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo.svg')}}" alt="logo"></a>
                        </div>
                        <div class="footer-content">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                        </div>
                        <div class="footer-contact-info">
                            <p><span><i class="feather-phone"></i></span> 321 546 8764</p>
                            <p ><span><i class="feather-mail"></i></span> truelysell@example.com</p>
                            <div class="footer-address">
                                <p><span><i class="feather-map-pin"></i></span> 367 Hillcrest Lane, Irvine, California, United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-icon">
                        <ul>
                            <li>
                                <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank"><i class="fab fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu footer-menu-eight">
                        <h2 class="footer-title">Support</h2>
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('about-us')}}">Contact us</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('blog-grid')}}">Online Chat</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('contact-us')}}">Whatsapp</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('provider-signup')}}">Telegram</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">Ticketing</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">Call Center</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu footer-menu-eight">
                        <h2 class="footer-title">About Us</h2>
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('about-us')}}">About us</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('blog-grid')}}">Blog</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('contact-us')}}">Careers</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('provider-signup')}}">Jobs</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">In Press</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu footer-menu-eight">
                        <h2 class="footer-title">Top Cities</h2>
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('about-us')}}">Contact us</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('blog-grid')}}">Online Chat</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('contact-us')}}">Whatsapp</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('provider-signup')}}">Telegram</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">Ticketing</a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/mini-pink-feet.svg')}}" alt="">
                                <a href="{{url('user-signup')}}">Call Center</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu-eight">
                        <h2 class="footer-title">Application</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
                            It has roots in a piece of classical Latin. It has roots in a piece of classical Latin.</p>
                        <div class="app-eight-bottom">
                            <a href="javascript:;" class="app-eight-bottom-inner">
                                <img src="{{ URL::asset('/assets/img/icons/qr-code-eight.svg')}}" alt="">
                            </a>
                            <div class="new-app-eight-content">
                                <a href="javascript:;" class="app-eight-content-inner">
                                    <img src="{{ URL::asset('/assets/img/icons/appstore-eight.svg')}}" alt="">
                                </a>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/googleplay-eight.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    
    <!-- Footer Bottom -->
    <div class="footer-bottom footer-bottom-eight">
        <div class="container">
            <div class="copyright">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>Copyright <script>document.write(new Date().getFullYear())</script> © Truely Sell. All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Bottom -->
    
</footer>
@endif
@if(Route::is(['index-9']))
<footer class="footer footer-nine">
    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/logo-02.svg')}}" alt="logo" /></a>
                        </div>
                        <div>
                            <p>
                                We ara a lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, Ut enim ad minim veniam, quis nostrud
                                equip consectetur adipiscing ex ea commodo dolor
                                consequat... <a href="javascript:void(0);">Read More</a>
                            </p>
                        </div>
                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="feather-phone-call"></i></span>
                                    <div>
                                        <h6>Phone Number</h6>
                                        <p>310-437-2766</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-mail"></i></span>
                                    <div>
                                        <h6>Mail Address</h6>
                                        <p>support@truelysell.com</p>
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <span><i class="feather-map-pin"></i></span>
                                    <div>
                                        <h6>Address</h6>
                                        <p>706 Campfire Ave. Meriden, CT 06450</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Footer Widget -->
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">About</h2>
                                <ul>
                                    <li>
                                        <a href="{{url('about-us')}}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{url('blog-details')}}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Careers</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">In Press</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Support</h2>
                                <ul>
                                    <li>
                                        <a href="{{url('contact-us')}}">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="{{url('customer-chat')}}">Online Chat</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Whatsapp</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Telegram</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Ticketing</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Call Center</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="social-media-icon-img">
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/facebook-nine.svg')}}" alt="facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/youtube-nine.svg')}}" alt="facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/ball-nine.svg')}}" alt="facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/figma-nine.svg')}}" alt="facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ URL::asset('/assets/img/icons/whatsapp-nine.svg')}}" alt="facebook" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Popular Tags</h2>
                        <ul class="footer-tags">
                            <li><a href="javascript:void(0);">FILTERS</a></li>
                            <li><a href="javascript:void(0);">BRAKES</a></li>
                            <li><a href="javascript:void(0);">DIAGNOSTICS</a></li>
                            <li><a href="javascript:void(0);">STEERING</a></li>
                            <li><a href="javascript:void(0);">BELTS</a></li>
                            <li><a href="javascript:void(0);">SUSPENSION</a></li>
                            <li><a href="javascript:void(0);">OILS</a></li>
                            <li><a href="javascript:void(0);">TIRES</a></li>
                            <li><a href="javascript:void(0);">ENGINE</a></li>
                            <li><a href="javascript:void(0);">STEERING</a></li>
                            <li><a href="javascript:void(0);">TIRES</a></li>
                            <li><a href="javascript:void(0);">ENGINE</a></li>
                            <li><a href="javascript:void(0);">STEERING</a></li>
                            <li><a href="javascript:void(0);">OILS</a></li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="copyright-text text-center">
                            <p class="mb-0">
                                Copyright <script>document.write(new Date().getFullYear())</script> &copy; Truely Sell. All rights reserved.
                                Powered by Dreamguys Technologies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->
</footer>
@endif
<!-- /Footer -->