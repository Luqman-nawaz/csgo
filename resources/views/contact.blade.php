@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Contact Us</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <div class="csgo-payment-container">
        <h1>Contact Us</h1>
        @if ($message = Session::get('success'))
                    <p style="text-align: center; color:white; margin:10px;">{{ $message }}</p>
        @endif

        @if ($message = Session::get('error'))
                    <p style="text-align: center; color:red; margin:10px;">{{ $message }}</p>
        @endif
        <form action="/contact" method="post">
            @csrf
            @method('post')
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
                        <input type="text" placeholder="NAME" name="name" required>
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
                        <input type="email" placeholder="ENTER YOUR EMAIL ADDRESS*" name="email" required>
                    </div>
                    <div class="csgo-payment-inner-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="228" viewBox="0 0 500 228"
                            fill="none">
                            <path d="M1.5 1.5H498.5V137.842L450.11 226.5H1.5V1.5Z" stroke="url(#paint0_linear_466_9882)"
                                stroke-opacity="0.7" stroke-width="3" />
                            <defs>
                                <linearGradient id="paint0_linear_466_9882" x1="250" y1="-217.312" x2="280.394"
                                    y2="394.113" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E2E2E2" />
                                    <stop offset="0.9999" stop-color="#D3D3D5" />
                                    <stop offset="1" stop-color="#F3F3F3" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <input type="text" placeholder="QUERY" class="account-data-input" name="message">
                    </div>
                    <button class="csgo-btn csgo-contactus-btn">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>  

    <x-footer></x-footer>
@endsection

@push('js')
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush