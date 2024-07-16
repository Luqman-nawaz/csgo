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
                        <div class="w-full flex justify-between items-start">
                            @if(session('status'))
                                <h1> {{ session('status') }} </h1>
                            @endif
                            <h2>Login</h2>
                            <div class="flex gap-3 mt-3">
                                <a href="{{ url('auth/google') }}"><button class="themebtn-bg w-full mt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0 0 30 30">
                                        <path d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                                    </svg>
                                &nbsp; Google</button></a>
                                <a href="{{ url('auth/twitter') }}"><button class="themebtn-bg w-full mt-5">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/X_logo_2023_original.svg" alt="" style="width:18px; height:18px;">
                                &nbsp; Twitter</button></a>
                                {{-- <a href="{{ url('auth/google') }}"><button class="themebtn-bg w-full mt-5">
                                    <img src="/assets/icons/icons8-discord-48.png" alt="" style="width:18px; height:18px;">
                                &nbsp; Discord</button></a> --}}
                                {{-- <a href="#" class="w-[35px] p-1 rounded-md bg-[#ffffff33]"><img src="/assets/icons/icons8-google-48.png" alt=""></a>
                                <a href="#" class="w-[35px] p-1 rounded-md bg-[#ffffff33]"><img src="/assets/icons/icons8-twitter-48.png" alt=""></a>
                                <a href="#" class="w-[35px] p-1 rounded-md bg-[#ffffff33]"><img src="/assets/icons/icons8-discord-48.png" alt=""></a> --}}
                            </div>
                        </div>
                        
                        
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
                            {{-- <a href="/register" class="Forgot-txt mt-5 w-full text-center">Create New Account</a> --}}
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