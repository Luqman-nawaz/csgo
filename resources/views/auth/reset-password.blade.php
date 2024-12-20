@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Login</title> @endsection
    @section('content')
    
    <div class="landing-page-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->

        <div class="credentials-main-container">
            <div class="credentials-centered-container">

                

                <div class="credentials-left-container">
                    <img src="/assets/images/Group 1.png" alt="">
                </div>
                <div class="credentials-right-container">
                    <h2>Forgot Password</h2>
                    @if (session('status'))
                        <div class="forget-spam-box w-full flex justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 2.25C13.9284 2.25 15.8134 2.82183 17.4168 3.89317C19.0202 4.96451 20.2699 6.48726 21.0078 8.26884C21.7458 10.0504 21.9389 12.0108 21.5627 13.9021C21.1864 15.7934 20.2578 17.5307 18.8943 18.8943C17.5307 20.2579 15.7934 21.1865 13.9021 21.5627C12.0108 21.9389 10.0504 21.7458 8.26883 21.0078C6.48725 20.2699 4.96451 19.0202 3.89317 17.4168C2.82182 15.8134 2.25 13.9284 2.25 12C2.25273 9.41498 3.28083 6.93661 5.10872 5.10872C6.93661 3.28084 9.41497 2.25273 12 2.25ZM12 20.25C13.6317 20.25 15.2267 19.7661 16.5835 18.8596C17.9402 17.9531 18.9976 16.6646 19.622 15.1571C20.2464 13.6496 20.4098 11.9908 20.0915 10.3905C19.7731 8.79016 18.9874 7.32015 17.8336 6.16637C16.6798 5.01259 15.2098 4.22685 13.6095 3.90852C12.0091 3.59019 10.3503 3.75357 8.84286 4.37799C7.33537 5.00242 6.04689 6.05984 5.14037 7.41655C4.23385 8.77325 3.75 10.3683 3.75 12C3.75248 14.1873 4.62247 16.2843 6.16911 17.8309C7.71574 19.3775 9.81272 20.2475 12 20.25ZM10.5 16.5C10.5 16.6989 10.579 16.8897 10.7197 17.0303C10.8603 17.171 11.0511 17.25 11.25 17.25C11.6478 17.25 12.0294 17.092 12.3107 16.8107C12.592 16.5294 12.75 16.1478 12.75 15.75V12C12.9489 12 13.1397 11.921 13.2803 11.7803C13.421 11.6397 13.5 11.4489 13.5 11.25C13.5 11.0511 13.421 10.8603 13.2803 10.7197C13.1397 10.579 12.9489 10.5 12.75 10.5C12.3522 10.5 11.9706 10.658 11.6893 10.9393C11.408 11.2206 11.25 11.6022 11.25 12V15.75C11.0511 15.75 10.8603 15.829 10.7197 15.9697C10.579 16.1103 10.5 16.3011 10.5 16.5ZM13.5 7.875C13.5 7.6525 13.434 7.43499 13.3104 7.24998C13.1868 7.06498 13.0111 6.92078 12.8055 6.83564C12.5999 6.75049 12.3737 6.72821 12.1555 6.77162C11.9373 6.81502 11.7368 6.92217 11.5795 7.0795C11.4222 7.23684 11.315 7.43729 11.2716 7.65552C11.2282 7.87375 11.2505 8.09995 11.3356 8.30552C11.4208 8.51109 11.565 8.68679 11.75 8.8104C11.935 8.93402 12.1525 9 12.375 9C12.6734 9 12.9595 8.88147 13.1705 8.6705C13.3815 8.45952 13.5 8.17337 13.5 7.875Z"
                                    fill="#0FC7FF" />
                            </svg>
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Enter your new password.</p>
                    <br />

                
                    
                    <div class="w-full pb-2">
                        <label for="">Email</label>
                    <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="credentials-input-box">
                            <img src="/assets/icons/✳️ Start Icon.png" alt="">
                            <input type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        </div>
                    </div>

                    <div class="w-full pb-2">
                        <label for="">New Password</label>
                        <div class="credentials-input-box">
                            <img src="/assets/icons/lock.png" alt="">
                            <input type="password" name="password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="w-full pb-2">
                        <label for="">Confirm Password</label>
                        <div class="credentials-input-box">
                            <img src="/assets/icons/lock.png" alt="">
                            <input type="password" name="password_confirmation">
                        </div>
                    </div>

                    <button class="themebtn-bg w-full mt-5">Reset Password</button>
                    <br />

                </form>

            </div>

            </div>
        </div>

        <x-footer></x-footer>
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