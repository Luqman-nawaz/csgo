@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Register Now!</title> @endsection

    
    @section('content')

        

        <div class="landing-page-container">
            <x-navbar></x-navbar>

            <div class="credentials-main-container credentials-signup-container" style="padding-top:2%;">
                <div class="credentials-centered-container" style="margin-top:7%">

                    <div class="credentials-left-container">
                        <img src="/assets/images/Logo.png" alt="">
                    </div>
                    <div class="credentials-right-container">
                        <h2>Create Account</h2>

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