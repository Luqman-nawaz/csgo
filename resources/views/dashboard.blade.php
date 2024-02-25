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
                        @if(empty($orders->payment)) @continue @endif
                        <div class="csgo-jobs-card-box">
                            <div class="csgo-txt-job-box">
                                <h3>{{$orders->boost_type}}</h3> @if($orders->desired_level == 1) test @endif
                                <h5>{{$orders->current_level}}<span> ▶ </span>{{$orders->desired_level}}</h5>
                            </div>
                            @if($orders->payment->order_status == 'completed')
                                <div class="csgo-btn-box">
                                    <a href="#" class="csgo-btn csgo-login-btn">Order in Progress</a>
                                </div>
                            @elseif($orders->payment->order_status == 'delivered')
                                <div class="csgo-btn-box">
                                    <a href="#" class="csgo-btn csgo-login-btn">Order Delivered</a>
                                </div>
                            @else
                                <div class="csgo-btn-box">
                                    <a href="/checkout/{{$orders->id}}" class="csgo-btn csgo-login-btn">Pay now!</a>
                                </div>
                            @endif
                        </div>
                    @endforeach

                    @foreach(App\Models\coaching::where('user_id', Auth::id())->get() as $orders)
                        <div class="csgo-jobs-card-box">
                            <div class="csgo-txt-job-box">
                                <h3>{{$orders->boost_type}}</h3> @if($orders->priority_order == 1) <span style="color:white;"> Priority Order </span> @endif
                                <h5>{{$orders->ingame_role}}<span> <br> </span>Reviews: {{$orders->no_of_reviews}}</h5>
                            </div>
                            <div class="csgo-btn-box">
                                <a href="/coaching-checkout/{{$orders->id}}" class="csgo-btn csgo-login-btn">Pay now!</a>
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
    
    @push('js')
    <script>
        window.intercomSettings = {
          api_base: "https://api-iam.intercom.io",
          app_id: "ukzjpgts",
          name: @php print_r(json_encode(Auth::user()->name)); @endphp, // Full name
          user_id: @php print_r(json_encode(Auth::user()->id)); @endphp, // a UUID for your user
          email: @php print(json_encode(Auth::user()->email)); @endphp, // the email for your user
          created_at: "<?php echo strtotime(Auth::user()->created_at) ?>" // Signup date as a Unix timestamp
        };
    </script>
      
      <script>
      // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/ukzjpgts'
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/ukzjpgts';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      </script>
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush