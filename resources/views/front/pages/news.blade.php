@extends('front.layout')
@section('content')
<!--  breadcrumb start  -->
<div class="breadcrumb-area service-details-breadcrumb-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="breadcrumb-txt">
            <br><br>
            <span>News</span>
            <h1>Our lates News</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-15.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">news</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--  service details section start  -->
<div class="service-details-section">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="service-details-content">
            <div class="img-wrapper"><img src="{{$news->getImage()}}" alt=""></div>
            <div class="service-details-desc">
                <h2 class="title">{{$news->title}}</h2>
                {!! $news->description !!}
                <div class="overview">
                    <h3 class="title">Overview</h3>
                    {!! $news->content !!}
                    {{-- <p>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport & logistics services.</p>
                    <ul class="overview-points">
                        <li>We provide innovative solutions with the best</li>
                        <li>We offer our clients support in destination marketing</li>
                        <li>promoting unique story each destination</li>
                        <li>Strong partnerships with international agencies</li>
                    </ul> --}}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  service details section end  -->


<!--   cta section start    -->
<div class="cta-section cta-bg">
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


<!--  features section start  -->
<div class="features-section home-2 border-bottom">
<div class="container">
    <div class="row feature-content">
        <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
            <div class="features">
            <span class="title">Features</span>
            <h2 class="subtitle">WHY CHOOSE US</h2>
            <div class="feature-lists">
                <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                    <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                    <div class="feature-details">
                        <h4>24/7 support</h4>
                        <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                    </div>
                </div>
                <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                    <div class="feature-details">
                        <h4>On time delivery</h4>
                        <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                    </div>
                </div>
                <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="icon-wrapper"><i class="flaticon-worldwide"></i></div>
                    <div class="feature-details">
                        <h4>global service</h4>
                        <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  features section end  -->
@endsection