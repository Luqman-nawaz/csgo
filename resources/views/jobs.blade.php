@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSectionJobs-container">
            <div class="heroSectionJobs-inner-container">
                <div class="heroSectionJobs-innerLeft-container">
                    <h5>JOBS</h5>
                    <h1>Join Hands with Us</h1>
                    <p>At MyBoost, we’re not just in the business of gaming; we’re in the business of empowerment. Our
                        mission is rooted in the belief that every gamer has untapped potential waiting to be unlocked.
                        Whether you’re a seasoned pro or a passionate enthusiast, we’re here to elevate your gaming
                        experience, one boost at a time. Empowering gamers to reach their full potential. Join our team
                        of skilled boosters and coaches as we elevate gaming experiences worldwide.</p>
                    <a href="/apply-jobs"><button class="themebtn-bg-white">Join Us Now</button></a>
                </div>
            </div>
        </div>

        <div class="employeeboost-container">
            <div class="employeeboost-inner-container">
                <h2>Some Perks employees at MyBoost Enjoy</h2>
                <div class="employeeboost-grid-container">
                    <div class="employeeboost-grid-box">
                        <span><img src="./assets/icons/ClockCountdown.png" alt=""></span>
                        <h5>Flexible Hours</h5>
                        <p>Enjoy flexibility in your work schedule. We understand that life happens, and we accommodate
                            your needs.</p>
                    </div>
                    <div class="employeeboost-grid-box">
                        <span><img src="./assets/icons/Money.png" alt=""></span>
                        <h5>Competitive Compensation</h5>
                        <p>We offer competitive pay rates, ensuring that your hard work is rewarded.</p>
                    </div>
                    <div class="employeeboost-grid-box">
                        <span><img src="./assets/icons/Medal.png" alt=""></span>
                        <h5>Employee Recognition </h5>
                        <p>We value your contributions. Expect regular recognition, shout-outs, and appreciation.</p>
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
                <img src="./assets/images/Visa.png" alt="">
                <img src="./assets/images/Gpay.png" alt="">
                <img src="./assets/images/AE.png" alt="">
                <img src="./assets/images/Mastercard.png" alt="">
                <img src="./assets/images/Paypal.png" alt="">
                <img src="./assets/images/Applepay.png" alt="">
            </div>
            <p>*All these payment methods are acceptable.</p>
        </div>

        <x-footer></x-footer>

    </div>
    @endsection

    @push('js')
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById('sidebar');
                sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
            }

        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="/vendor/js/tabs.js"></script>
    @endpush