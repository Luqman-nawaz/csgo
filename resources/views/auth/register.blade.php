@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Register Now!</title> @endsection
    @section('content')
    
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->
        <div class="csgo-payment-container">
            <h1>Register</h1>
            @if(session('status'))
                <h1> {{ session('status') }} </h1>
            @endif
            @error('name') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            @error('email') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            @error('password') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            @error('confirm_password') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            <form method="POST" action="{{ route('register') }}" style="">
                @csrf
                <div class="csgo-payment-section csgo-contactus-section">
                    <div class="csgo-payment-box">
                        <div class="csgo-payment-inner-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                                fill="none">
                                <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                                    stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E2E2E2" />
                                        <stop offset="0.9999" stop-color="#D3D3D5" />
                                        <stop offset="1" stop-color="#F3F3F3" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <input type="text" placeholder="Name" name="name" value="{{old('name')}}" required autofocus>
                        </div>
                        <div class="csgo-payment-inner-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                                fill="none">
                                <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                                    stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E2E2E2" />
                                        <stop offset="0.9999" stop-color="#D3D3D5" />
                                        <stop offset="1" stop-color="#F3F3F3" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <input type="text" placeholder="Email" type="email" name="email" value="{{old('email')}}" required autofocus>
                        </div>
                        <div class="csgo-payment-inner-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                                fill="none">
                                <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                                    stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E2E2E2" />
                                        <stop offset="0.9999" stop-color="#D3D3D5" />
                                        <stop offset="1" stop-color="#F3F3F3" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <input placeholder="Enter Password" type="password" name="password" required>
                        </div>
                        <div class="csgo-payment-inner-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                                fill="none">
                                <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                                    stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                                <defs>
                                    <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#E2E2E2" />
                                        <stop offset="0.9999" stop-color="#D3D3D5" />
                                        <stop offset="1" stop-color="#F3F3F3" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <input placeholder="Confirm Password" type="password" name="password_confirmation" required>
                        </div>
                        <button class="csgo-btn csgo-contactus-btn" style="margin-bottom: 20px;">Register</button>
                        <hr>
                        <a href="/login"  class="csgo-btn csgo-contactus-btn" style="margin-top:20px;">Already have an Account? Login!</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- csgo-Footer Section Start -->
       <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    
    @endsection

    @push('js')
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush