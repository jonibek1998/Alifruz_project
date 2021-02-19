@extends('front.layout')
@section('content')
<!--  breadcrumb start  -->
<div class="breadcrumb-area faq-breadcrumb-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="breadcrumb-txt">
            <br><br>
            <span>Faqs</span>
            <h1>How we can help you?</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-15.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--   faq section start    -->
<div class="faq-section">
<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-8">
            <div class="row">
            <div class="col-lg-8">
                <span class="title">FAQS</span>
                <h2 class="subtitle">FREQUENTLY ASKED QUESTIONS</h2>
            </div>
            </div>
            <div class="accordion" id="accordionExample">
            <div class="card wow fadeInUp" data-wow-duration="1s">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Why choose this?
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                        When usally product reach?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                    </div>
                </div>
            </div>
            <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How much it cost?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--  sidebar section start  -->
        <div class="col-xl-4 offset-xl-1 col-lg-4">
            <div class="sidebar">
            <div class="category-sidebar">
                <ul>
                    @foreach ($services as $service)
                    <li><a href="{{route('service.view', $service->slug)}}">{{$service->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="quote-sidebar">
                <h3>REQUEST A QUOTE</h3>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
                <form action="{{route('subscription')}}" class="quote-form" method="POST">
                    {{ csrf_field() }}
                    <div class="form-element"><input type="text" name="name" placeholder="Your name">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-element"><input name="email" type="text" placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-element"><input name="phone" type="text" placeholder="Phone">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-element"><button type="submit"><span>Submit</span></button></div>
                </form>
            </div>
            </div>
        </div>
        <!--  sidebar section end  -->
    </div>
</div>
</div>
<!--   faq section end    -->


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
@endsection