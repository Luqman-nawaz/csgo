@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - User Dashboard</title> @endsection
    @section('content')
    
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->
        <div class="csgo-payment-container">
            <div class="csgo-jobs-hero-container">
                <div class="csgo-jobs-hero-section">
                    <h2>Dashboard</h2>
                </div>
            </div>
            
            <div class="csgo-jobs-card-container">
                <div class="csgo-jobs-inner-container">
                    <h1 style="text-align:center;"> My Orders </h1>
                    @foreach(App\Models\boost::where('user_id', Auth::id())->get() as $orders)
                        <div class="csgo-jobs-card-box">
                            <div class="csgo-txt-job-box">
                                <h3>{{$orders->boost_type}}</h3> @if($orders->desired_level == 1) test @endif
                                <h5>{{$orders->current_level}}<span> ▶ </span>{{$orders->desired_level}}</h5>
                            </div>
                            <div class="csgo-btn-box">
                                <a href="#" class="csgo-btn job-apply-btn">Awaiting Payment</a>
                                <a href="/checkout/{{$orders->id}}" class="csgo-btn job-apply-btn">Pay now!</a>
                            </div>
                        </div>
                    @endforeach

                    @foreach(App\Models\coaching::where('user_id', Auth::id())->get() as $orders)
                        <div class="csgo-jobs-card-box">
                            <div class="csgo-txt-job-box">
                                <h3>{{$orders->boost_type}}</h3> @if($orders->priority_order == 1) <span style="color:white;"> Priority Order </span> @endif
                                <h5>{{$orders->ingame_role}}<span> <br> </span>Reviews: {{$orders->no_of_reviews}}</h5>
                            </div>
                            <div class="csgo-btn-box">
                                <a href="/coaching-checkout/{{$orders->id}}" class="csgo-btn job-apply-btn">Pay now!</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- csgo-Footer Section Start -->
       <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    
    @endsection
    