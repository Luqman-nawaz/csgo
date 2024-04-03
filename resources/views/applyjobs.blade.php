@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSectionJobOpening-container">
            <div class="heroSectionJobOpening-inner-container">

                <h5>CURRENT OPENINGS</h5>
                <h2>We’re looking for</h2>
                <div class="heroSectionJobOpening-grid-container">
                    <div class="heroSectionJobOpening-grid-box">
                        <h6>Graphic<br /> Designer</h6>
                        <button class="themebtn-bg-white">
                            Apply Now
                            <img src="./assets/icons/end icon.png" alt="">
                        </button>
                    </div>
                    <div class="heroSectionJobOpening-grid-box">
                        <h6>Video Editor</h6>
                        <button class="themebtn-bg-white">
                            Apply Now
                            <img src="./assets/icons/end icon.png" alt="">
                        </button>
                    </div>
                    <div class="heroSectionJobOpening-grid-box">
                        <h6>Front-end<br /> Developer</h6>
                        <button class="themebtn-bg-white">
                            Apply Now
                            <img src="./assets/icons/end icon.png" alt="">
                        </button>
                    </div>
                    <div class="heroSectionJobOpening-grid-box">
                        <h6>Back-end<br /> Developer</h6>
                        <button class="themebtn-bg-white">
                            Apply Now
                            <img src="./assets/icons/end icon.png" alt="">
                        </button>
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