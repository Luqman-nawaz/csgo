@extends('layouts.csgo')

@section('title') <title>MyBoost.GG - Contact Us</title> @endsection
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
@section('content')
    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSectionContact-container">
            <div class="heroSectionContact-inner-container">
                <div class="heroSectionContact-innerLeft-container">
                    <h5>CONTACT US</h5>
                    <h2>Get In Touch With Us</h2>

                    @if ($message = Session::get('success'))
                        <p style="text-align: center; color:white; margin:10px;">{{ $message }}</p>
                    @endif

                    @if ($message = Session::get('error'))
                        <p style="text-align: center; color:red; margin:10px;">{{ $message }}</p>
                    @endif
                    <form action="/contact" method="post">
                        @csrf
                        @method('post')
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter name here" name="name" required>

                            <label for="">Email</label>
                            <input type="text" placeholder="abc@xyz.com" name="email" required>

                            <label for="">Message</label>
                            <textarea id="" cols="30" rows="6" placeholder="Type your message here..." name="message"></textarea>

                            <button class="themebtn-bg">Send Message</button>
                    </form>

                </div>
                <div class="heroSectionContact-innerRight-container">
                    <h5>Contact</h5>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/EnvelopeSimple.png" alt="">
                        </span>
                        <p>info@myboost.cc</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/ChatsCircle.png" alt="">
                        </span>
                        <p>Live Chat</p>
                    </div>

                    <div class="contact-line"></div>

                    <h5>Socials</h5>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/DiscordLogo.png" alt="">
                        </span>
                        <p>discord.com/MyBoost</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/FacebookLogo.png" alt="">
                        </span>
                        <p>facebook.com/MyBoost</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/TwitchLogo.png" alt="">
                        </span>
                        <p>twitch.com/MyBoost</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/YoutubeLogo.png" alt="">
                        </span>
                        <p>youtube.com/MyBoost</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="boostNow-container">
            <div class="boostNow-inner-container">
                <h3>Boost your game now and conquer the ranks!</h3>
                <button class="themebtn-bg-white">Boost your game</button>
            </div>
        </div>

        <div class="payment-container">
            <div class="payment-inner-container">
                <img src="/assets/images/Visa.png" alt="">
                <img src="/assets/images/Gpay.png" alt="">
                <img src="/assets/images/AE.png" alt="">
                <img src="/assets/images/Mastercard.png" alt="">
                <img src="/assets/images/Paypal.png" alt="">
                <img src="/assets/images/Applepay.png" alt="">
            </div>
            <p>*All these payment methods are acceptable.</p>
        </div>

        <x-footer></x-footer>

    </div>

    {{-- <div class="csgo-payment-container">
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
    </div>   --}}

    
@endsection

@push('js')
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
    }

</script>
@endpush