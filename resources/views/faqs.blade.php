@extends('layouts.csgo')

    @section('content')
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->

                <!-- csgo-faqs-sections start -->
                <div class="accordion">
                    <h1>Frequently Asked Questions</h1>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            How does MyBoost.gg work?
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                MyBoost.gg offers you all types of CS2 account boosting services, for CS2 matchmaking, FaceIt, ESEA and Esportal. We level up your account to where you believe it should be.
        
                                For boosting your CS2 account, we use our professional players. We do NOT use cheats or bots. Your accounts are completely safe.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            Is it safe for me to boost my account?
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                Yes, your account is in safe hands. Our professional players make sure to rank your account
                                by playing. NO cheats/bots are used.
                            </div>
                        </div>
                    </div>
        
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                            What payment methods does MyBoost.gg support?
                        </div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                MyBoost currently accepts Mastercard/Visa/Crypto payments.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- csgo-faqs-sections start -->

        <!-- csgo-whychoose Services Start -->
        <div class="csgo-HomeWhyChoose-services-container">
            <img src="/assets/img/Rectangle 11.png" alt="" class="HomeWhyChoose-img">
            <div class="csgo-HomeWhyChoose-services-img-section">
                <img src="/assets/img/Daco_4402547.png" alt="">
            </div>
            <div class="csgo-HomeWhyChoose-services-detail-section">
                <h3>Why choose our CS2 Boosting Services?</h3>
                <p>Our boosters are experts who never resort to cheats or any other unfair advantages. 
                     All our orders are handled by exceptional players who were semi-professional
                     gamers before joining our boosting team. 
                     Our service is 100% safe, and there's no risk of getting banned. 
                     Each of our players works under a contract and undergoes rigorous testing to earn our trust. 
                     Rest assured that your Steam account and inventory are in safe hands.</p>
                <div class="csgo-HomeWhyChoose-happyCustomers-section">
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>20k</h5>
                            <h6>HAPPY CUSTOMERS</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>8</h5>
                            <h6>YEAS IN BOOSTING</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>30k</h5>
                            <h6>ORDERS COMPLETED</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- csgo-whychoose Services End -->



        <!-- csgo-Subscribe Section Start -->
        <div class="csgo-HomeSubscribe-container">
            <div class="csgo-h1-Subscribe">
                <h5 class="trns-text">SUBSCRIBE</h5>
                <h6>WANT MORE ?</h6>
                <p>Sign up to our newsletter and receive regular updates from our side and avail best discounts </p>
            </div>
            <div class="csgo-subscribe-email-container">
                <div class="csgo-subscribe-email-section">

                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80" fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z" stroke="url(#paint0_linear_158_4146)"
                            stroke-opacity="0.8" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_158_4146" x1="250" y1="-31.25" x2="253.75" y2="173.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FD432A" />
                                <stop offset="1" stop-color="#FD2AA9" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="ENTER YOUR EMAIL ADDRESS">
                </div>
                <button class="csgo-btn SUBSCRIBE-btn">SUBSCRIBE</button>
            </div>
        </div>
        <!-- csgo-Subscribe Section End -->

        <!-- csgo-Footer Section Start -->
       <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    @endsection

    @push('js')
        <!-- Script -->
        <script src="/vendor/js/app.js"></script>
        <script src="/vendor/js/carousel.js"></script>
    @endpush