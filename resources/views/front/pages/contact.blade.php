@extends('front.layout')
@section('content')

<!--  breadcrumb start  -->
<div class="breadcrumb-area contact-breadcrumb-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <div class="breadcrumb-txt">
            <br><br>
            <span>Contact</span>
            <h1>keep in touch with us for help </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-15.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--   contact section start    -->
<div class="contact-section">
<div class="container">
    <!--  contact infos start  -->
    <div class="contact-infos">
        <div class="row no-gutters">
            <div class="col-lg-4 single-info-col">
            <div class="single-info wow fadeInRight" data-wow-duration="1s">
                <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                <div class="info-txt">
                    <p>143 castle road 517</p>
                    <p>district, kiyev port south Canada</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 single-info-col">
            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                <div class="info-txt">
                    <p>+3 123 456 789</p>
                    <p>+1 222 345 342</p>
                    <p>+2 123 433 324</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 single-info-col">
            <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                <div class="info-txt">
                    <p>info@yourmail.com</p>
                    <p>transpix@yourmail2.com</p>
                    <p>ship@yourmail3.com</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--  contact infos end  -->
    <!--  contact form and map start  -->
    <div class="contact-form-section">
        <div class="row">
            <div class="col-lg-6">
            <span class="title">Contact</span>
            <h2 class="subtitle">KEEP IN TOUCH</h2>
            {{-- @include('admin.errors') --}}
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
            @endif
            <form method="post" action="{{route('contact.form')}}">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-element"><input type="text" name="name" placeholder="Name" value="{{old("name")}}">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-element"><input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-element"><input type="tel" name="phone" placeholder="Phone" value="{{old('phone')}}">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-element"><input type="text" name="subject" placeholder="Subject" value="{{old('subject')}}"></div>
                        @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                         @endif
                    </div>
                    <div class="col-md-12">
                        <div class="form-element">
                        <textarea name="text" cols="30" rows="10" placeholder="Comment">{{old('text')}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-element">
                        <button type="submit"><span>Submit</span></button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-lg-6">
            <div class="map-wrapper">
                <div id="map"></div>
            </div>
            </div>
        </div>
    </div>
    <!--  contact form and map end  -->
</div>
</div>
<!--   contact section end    -->
@endsection