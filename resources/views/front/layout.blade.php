<!DOCTYPE html>
<html lang="en">

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome to Alif Uz Crop </title>
      <!-- favicon -->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" style="border-radius: 50px;">
      <!-- bootstrap css -->
        <link rel="stylesheet" href="/assets/css/front.css">
   </head>



   <body>
      <!--   header area start   -->
      <div class="header-area home-3">
         <div class="info-bar">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="contact-infos">
                        <div class="email">
                           <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                           <div>+ 00 12 123 456</div>
                        </div>
                        <div class="phone">
                           <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                           <div>Support@mail.com</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="right-content">
                        <ul class="social-links">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        {{-- <div class="language">
                           <a href="#" class="dropdown-btn">EN <i class="flaticon-down-arrow"></i></a>
                           <ul class="language-dropdown">
                              <li>
                                 <a href="#">English</a>
                              </li>
                              <li>
                                 <a href="#">French</a>
                              </li>
                              <li>
                                 <a href="#">Spanish</a>
                              </li>
                              <li>
                                 <a href="#">Arabic</a>
                              </li>
                           </ul>
                        </div> --}}
                        @if (Auth::check())
                           <a class="btn btn-danger" href="/logout">Logout</a>
                           <a target="_blank" class="btn btn-light" href="/admin">Admin</a>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="support-nav-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-6">
                     <div class="logo-wrapper">
                        <div class="logo-wrapper-inner">
                           <a href="index-15.html"><img src="assets/img/logo-3.png" alt=""></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9 col-6 position-static">
                     <div class="navbar-area">
                        <div class="row">
                           <div class="col-12 position-static">
                              <nav class="main-menu" id="mainMenuHome3">
                                 <ul>
                                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                                       <a href="{{route('home')}}">Home</a>

                                    </li>
                                    <li class="{{ (request()->is('about')) ? 'active' : '' }}">
                                       <a href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="dropdown {{ (request()->is('service')) ? 'active' : '' }}">
                                       <a href="{{route('services')}}">Services</a>
                                       <ul>
                                           @foreach ($services as $ser)
                                           <li><a href="{{route('service.view', $ser->slug)}}">{{$ser->title}}</a></li>
                                           @endforeach
                                          {{-- <li><a href="service-details.html">Service Details</a></li> --}}
                                       </ul>
                                    </li>

                                    <li class="{{ (request()->is('faq')) ? 'active' : '' }}">
                                       <a href="{{route('faq')}}">FAQ</a>

                                    </li>

                                    <li class="{{ (request()->is('pricing')) ? 'active' : '' }}">
                                      <a href="{{route('pricing')}}">Pricing</a>
                                    </li>

                                    <li class="{{ (request()->is('contact')) ? 'active' : '' }}">
                                       <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                 </ul>
                              </nav>
                              <div id="mobileMenuHome3"></div>
                              <ul class="search-cart-area">
                                 <li class="search-icon"><a href="#"><i class="flaticon-search"></i></a></li>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   header area end   -->


      <!--   search bar popup start   -->
      <div class="search-popup">
         <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
         </form>
         <div class="search-popup-overlay" id="searchOverlay"></div>
         <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
      </div>
      <!--   search bar popup end   -->

      @yield('content')


      <!--   footer section start    -->
      <footer>
         <div class="container">
            <div class="top-footer">
               <div class="row">
                  <div class="col-xl-4 col-lg-4">
                     <div class="logo-wrapper"><img src="assets/img/footer_logo.png" alt=""></div>
                     <p>Transgo shipping offers a host of logistic management services and supply chain & provide innovative solutions with the best. </p>
                  </div>
                  <div class="offset-xl-1 col-xl-4 col-lg-2">
                     <h4>Useful Links</h4>
                     <ul class="userful-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="{{route('services')}}">Service</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                     </ul>
                  </div>
                  {{-- <div class="col-xl-2 col-lg-2">
                     <h4>Services</h4>
                     <ul class="userful-links">
                        <li><a href="#">Air Freight</a></li>
                        <li><a href="#">OCEAN Freight</a></li>
                        <li><a href="#">WAREHOUSING</a></li>
                        <li><a href="#">STORAGE</a></li>
                        <li><a href="#">ROAD Freight</a></li>
                     </ul>
                  </div> --}}
                  <div class="col-xl-3 col-lg-4">
                     <h4>Contact Us</h4>
                     <div class="footer-contact">
                        <div class="contact-info">
                           <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                           <p>143 castle road 517 district, kiyev port south Canada</p>
                        </div>
                        <div class="contact-info">
                           <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                           <p>+00 12 123 4567</p>
                        </div>
                        <div class="contact-info">
                           <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                           <p>Info@yourmail.com</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-footer">
               <p class="text-center">© Copyrights 2021 Alif Uz Crop.</p>
            </div>
         </div>
      </footer>
      <!--   footer section end    -->


      <!-- preloader section start -->
      <div class="loader-container">
         <span class="loader">
         <span class="loader-inner"></span>
         </span>
      </div>
      <!-- preloader section end -->


      <!-- back to top area start -->
      <div class="back-to-top">
         <i class="fas fa-chevron-up"></i>
      </div>
      <!-- back to top area end -->



      <!-- popper js -->
      <script src="/assets/js/front.js"></script>
   </body>

</html>
