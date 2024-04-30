@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Login</title> @endsection
    @section('content')
    
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->

        <div class="landing-page-container">

            <x-navbar></x-navbar>
    
            <div class="credentials-main-container">
                <div class="credentials-centered-container" style="margin-top:7%">
    
                    <div class="credentials-left-container">
                        <img src="/assets/images/Logo.png" alt="">
                    </div>
                    <div class="credentials-right-container">
                        <h2>Login</h2>
                        
                        
                        <div class="w-full pb-2">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <label for="">Email</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/✳️ Start Icon.png" alt="">
                                <input type="text" type="email" name="email" value="{{old('email')}}" required autofocus placeholder="johndoe@gmail.com">
                            </div>
                        </div>
                        <br />
                        <div class="w-full pb-2">
                            <label for="">Password</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/lock.png" alt="">
                                <input type="password" name="password" required placeholder="• • • • • • • •">
                                <img src="/assets/icons/✳️ End Icon.png" class="eyeicon" alt="">
                            </div>
                        </div>
    
                        <div class="w-full flex justify-end">
                            <a href="/forgot-password" class="Forgot-txt">Forgot Password?</a>
                        </div>
    
                            <button type="submit" class="themebtn-bg w-full mt-5">Login to account</button>
                            <a href="/register" class="Forgot-txt mt-5 w-full text-center">Create New Account</a>
                        </form>
                    </div>
    
                </div>
            </div>
            <x-footer></x-footer>
        </div>

{{--         
        <div class="csgo-payment-container">
            <h1>Login</h1>
            @if(session('status'))
                <h1> {{ session('status') }} </h1>
            @endif

            @error('email') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            @error('password') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
            
            <form method="POST" action="{{ route('login') }}">
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
                        <button class="csgo-btn csgo-contactus-btn" style="margin-bottom: 20px;">Login</button>
                        <hr>
                        <a href="/register"  class="csgo-btn csgo-contactus-btn" style="margin-top:20px;">Register</a>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>    
    
    @endsection

    @push('js')
        <!-- scripts -->
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById('sidebar');
                sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
            }
        </script>
        <!-- scripts -->
    @endpush