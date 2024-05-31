@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Login</title> @endsection
    @section('content')
    
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->

        <div class="landing-page-container">

            <x-navbar></x-navbar>
    
            <div class="credentials-main-container">
                <div class="credentials-centered-container" style="margin-top:12%">
    
                    <div class="credentials-left-container">
                        <img src="/assets/logo.svg" alt="">
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
                                <input type="password" id="typepass" name="password" required placeholder="• • • • • • • •">
                                <img src="/assets/icons/✳️ End Icon.png" class="eyeicon" alt="" onclick="Toggle();">
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

    </div>    
    
    @endsection

    @push('js')
        <!-- scripts -->
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById('sidebar');
                sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
            }

            function Toggle() {
                let temp = document.getElementById("typepass");
                
                if (temp.type === "password") {
                    temp.type = "text";
                }
                else {
                    temp.type = "password";
                }
            }
        </script>
        <!-- scripts -->
    @endpush