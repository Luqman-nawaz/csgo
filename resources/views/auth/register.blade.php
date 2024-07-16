@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Register Now!</title> @endsection

    
    @section('content')

        

        <div class="landing-page-container">
            <x-navbar></x-navbar>

            <div class="credentials-main-container credentials-signup-container" style="padding-top:2%;">
                <div class="credentials-centered-container" style="margin-top:10%">

                    <div class="credentials-left-container">
                        <img src="/assets/logo.svg" alt="">
                    </div>
                    <div class="credentials-right-container">
                        <div class="w-full flex justify-between items-start">
                            <h2>Create Account</h2>
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
                        

                        

                        @if(session('status'))
                            <h1> {{ session('status') }} </h1>
                        @endif
                        @error('name') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
                        @error('email') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
                        @error('password') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror
                        @error('confirm_password') <p style="color: red; text-align:center; margin-bottom:10px;"> {{$message}} </p> @enderror

                    
                        <div class="w-full pb-2">
                            <label for="">Name</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/@rate.png" alt="">
                                <form method="POST" action="{{ route('register') }}" style="">
                            @csrf
                                <input type="text" placeholder="Name" name="name" value="{{old('name')}}" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="w-full pb-2">
                            <label for="">Email</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/✳️ Start Icon.png" alt="">
                                <input type="text" placeholder="Email" type="email" name="email" value="{{old('email')}}" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="w-full pb-2">
                            <label for="">Password</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/lock.png" alt="">
                                <input placeholder="• • • • • • • •" type="password" name="password" required>
                            </div>
                        </div>

                        <div class="w-full pb-2 mt-2">
                            <label for="">Confirm Password</label>
                            <div class="credentials-input-box">
                                <img src="/assets/icons/lock.png" alt="">
                                <input placeholder="Confirm Password" type="password" name="password_confirmation" required>
                            </div>
                        </div>

                        <ul class="px-2 py-3">
                            <li class="flex items-center gap-2">Contains
                                one capital case letter </li>
                            <li class="flex items-center gap-2">Contains one
                                small case letter </li>
                            <li class="flex items-center gap-2">Contains
                                one numeric character like 1, 2,
                                3, etc</li>
                            <li class="flex items-center gap-2">Contains one
                                special character like @ . / etc
                            </li>
                        </ul>

                        <button class="themebtn-bg w-full mt-5">Create new account</button>

                    </form>
                        <a href="/login" class="Forgot-txt mt-5 w-full text-center">Login to existing account</a>

                    </div>

                </div>
            </div>
            
            <x-footer></x-footer>
            <!-- csgo-Footer Section End -->

        </div>

    
    @endsection

    @push('js')
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById('sidebar');
                sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
            }
        </script>
        <!-- scripts -->
@endpush