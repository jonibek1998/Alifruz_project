@extends('front.layout')
@section('content')
    
<!--  hero area start  -->
<div class="hero-area hero-bg-3 home-3" id="heroHome15">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-8">
            <div class="hero-txt">
               <span class="wow fadeInDown" data-wow-duration="1.5s">We are AlifUzCorp</span>
               <h1 class="wow fadeInUp" data-wow-duration="1.5s">No# 1 solution for transport</h1>
               <a class="wow fadeInUp boxed-btn" data-wow-duration="1.5s" href="quote.html"><span>GET A QUOTE</span></a>
            </div>
         </div>
      </div>
   </div>
   <div class="hero-overlay"></div>
</div>
<!--  hero area end  -->


<!--   cta section start    -->
<div class="cta-section home-2">
   <div class="container">
      <div class="cta-container">
         <div class="row align-items-center">
            <div class="col-lg-9">
               <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
            </div>
            <div class="col-lg-3 text-center text-lg-right">
               <a href="{{route('contact')}}" class="boxed-btn"><span>Contact Us</span></a>
            </div>
         </div>
      </div>
   </div>
   <div class="cta-overlay"></div>
</div>
<!--   cta section end    -->


<!--  service section start  -->
<div class="service-section home-3">
   <div class="container">
      <span class="title">Our Services</span>
      <h2 class="subtitle">WHAT WE PROVIDE</h2>
      <div class="services">
         <div class="row">
            @foreach ($providers as $item)
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInUp" data-wow-duration="1.5s">
                     <div class="icon-wrapper"><img src="{{$item->getImage()}}" style="width:70px" alt=""></div>
                     <div class="service-txt">
                        <h4 class="service-title">{{$item->title}}</h4>
                        <p class="service-para">{!!$item->description!!}</p>
                     </div>
                  </div>
               </div>
            @endforeach

         </div>
      </div>
   </div>
</div>
<!--  service section end  -->


<!--  about section start  -->
<div class="about-section home-3">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="outer">
               <div class="inner">
                  <div class="about-txt about-bg-3">
                     <span class="title">about us</span>
                     <h2 class="subtitle">WE ARE TRANSFIX</h2>
                     <p>We offers a host of logistic management services and supply chain solutions. We provide innovative solutions with the best.  Incididunt dolor sit amet, consectetur adipiscing elit, sed dolore magna Incididunt dolor sit amet, consectetur adipiscing elit, sed dolore magna. </p>
                     <img src="assets/img/signature.png" alt="">
                     <h5>DAVID ANDERSON</h5>
                     <span>Founder & CEO</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-5 offset-lg-1 col-lg-6">
            <div class="about-points">
               <div class="single-point">
                  <div class="icon-wrapper"><i class="flaticon-worldwide"></i></div>
                  <div class="point-txt">
                     <h4>global service</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. Sed ut perspiciatis unde omnis iste natus error sitvol uptatem accusantium doloremque laudantium accusantium</p>
                  </div>
               </div>
               <div class="single-point">
                  <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                  <div class="point-txt">
                     <h4>24/7 Support</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. Sed ut perspiciatis unde omnis iste natus error sitvol uptatem accusantium doloremque laudantium accusantium</p>
                  </div>
               </div>
               <div class="single-point">
                  <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                  <div class="point-txt">
                     <h4>Instant delivery</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. Sed ut perspiciatis unde omnis iste natus error sitvol uptatem accusantium doloremque laudantium accusantium</p>
                  </div>
               </div>
               <div class="single-point">
                  <div class="icon-wrapper"><i class="flaticon-send"></i></div>
                  <div class="point-txt">
                     <h4>fastest delivery</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. Sed ut perspiciatis unde omnis iste natus error sitvol uptatem accusantium doloremque laudantium accusantium</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--  about section end  -->


<!--  testimonial section start  -->
<div class="testimonial-section home-3">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <span class="title">Our Team</span>
            <h2 class="subtitle">Alif Uz Crop</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="testimonial-carousel-3 owl-carousel owl-theme">
               @foreach ($teams as $team)
                  <div class="single-testimonial">
                     <div class="img-wrapper"><img src="{{$team->getImage()}}" alt=""></div>
                     <div class="client-desc">
                        <p class="icon-wrapper"><i class="flaticon-quote-left"></i></p>
                        <p class="comment">{!!$team->text!!}</p>
                        <h5 class="name">{{$team->name}}</h5>
                        <p class="rank">{{$team->position}}</p>
                     </div>
                  </div> 
               @endforeach

            </div>
         </div>
      </div>
   </div>
</div>
<!--  testimonial section end  -->


<!--   partner section start    -->
<!-- <div class="partner-section">
   <div class="container border-bottom">
      <div class="row">
         <div class="col-md-12">
            <div class="partner-carousel owl-carousel owl-theme">
               <div class="single-partner-item">
                  <div class="outer">
                     <div class="inner">
                        <img src="assets/img/partner-1.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="single-partner-item">
                  <div class="outer">
                     <div class="inner">
                        <img src="assets/img/partner-2.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="single-partner-item">
                  <div class="outer">
                     <div class="inner">
                        <img src="assets/img/partner-3.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="single-partner-item">
                  <div class="outer">
                     <div class="inner">
                        <img src="assets/img/partner-4.png" alt="">
                     </div>
                  </div>
               </div>
               <div class="single-partner-item">
                  <div class="outer">
                     <div class="inner">
                        <img src="assets/img/partner-5.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<!--   partner section end    -->


<!--   faq section start    -->
<div class="faq-section home-3">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="targets">
               <div class="box wow fadeInUp" data-wow-duration="1.5s">
                  <div class="icon-wrapper"><i class="flaticon-external-link-square-with-an-arrow-in-right-diagonal"></i></div>
                  <div class="box-details">
                     <h4>Our mission</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                  </div>
               </div>
               <div class="box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                  <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                  <div class="box-details">
                     <h4>Our Vision</h4>
                     <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="offset-lg-1 col-lg-5">
            <span class="title">FAQS</span>
            <h2 class="subtitle">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="accordion" id="accordionExample">
               <div class="card wow fadeInUp" data-wow-duration="1s">
                  <div class="card-header" id="headingOne">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Why choose this?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                        They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                     </div>
                  </div>
               </div>
               <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <div class="card-header" id="headingTwo">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Is it costly?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                        They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                     </div>
                  </div>
               </div>
               <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                  <div class="card-header" id="headingThree">
                     <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        When usally product reach
                        </button>
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                        They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--   faq section end    -->


<!--   quote section start    -->
<div class="quote-section quote-bg">
   <div class="container">
      <div class="row">
         <div class="offset-lg-5 col-lg-7">
            <div class="quote-form-section">
               <span class="title">Quote</span>
               <h2 class="subtitle">Request a free qoute</h2>
               @include('front.form')
            </div>
         </div>
      </div>
   </div>
</div>
<!--   quote section end    -->


<!--   news section start    -->
<div class="news-section">
   <div class="container">
      <span class="title">Latest news</span>
      <h2 class="subtitle">Inside The News</h2>
      <div class="row">
         @foreach ($news as $item)
            <div class="col-lg-4 col-md-6">
               <div class="single-news wow fadeInRight" data-wow-duration="1.5s">
                  <img src="{{$item->getImage()}}" alt="">
                  <div class="news-txt">
                     <span class="date">{{$item->created_at->format('M d Y')}} -  BY Admin</span>
                     <a href="{{route('new.show', $item->slug)}}" class="title">
                        <h3>{{$item->title}}</h3>
                     </a>
                     <a class="readmore" href="{{route('new.show', $item->slug)}}">Read More</a>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</div>
<!--   news section end    -->
@endsection