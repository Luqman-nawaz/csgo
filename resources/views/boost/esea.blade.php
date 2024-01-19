@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your ESEA Account, 100% Safe & Secure</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <div class="csgo-boost-container" style="display: none;">
        <!-- <img src="/assets/img/Group 3.svg" alt=""> -->
        <div class="csgo-boost-section csgo-boost-section-1">
            <div class="boost-hero-text-container">
                <h2 class="trns-boost-text">ESEA Account Boost<br>MyBoost.gg</h2>
            </div>
        </div>
    </div>

    <div class="csgo-howtobuy-conatianer csgo-howtobuy-conatianer-esea" style="margin-top: 30px;">
        <div class="csgo-howtobuy-tabs-conatiner">

            <div class="csgo-boost-howtobuy-tabs csgo-boost-howtobuy-tabs-esea">

                <div class="csgo-boost-howtobuy-tab csgo-boost-howtobuy-tab-esea active" onclick="openTab(0)"><span
                        class="Esportal-tab-span-1">Rank Boost</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48"
                        fill="none">
                        <g filter="url(#filter0_b_645_4079)">
                            <path
                                d="M191.482 0H38.1489C33.2553 0 29.9929 2.4 26.7305 7.2L1.12345 44.8758C0.220961 46.2036 1.17205 48 2.77756 48H225.222C226.828 48 227.779 46.2036 226.877 44.8758L201.27 7.2C198.007 2.4 196.376 0 191.482 0Z"
                                fill="url(#paint0_linear_645_4079)" fill-opacity="0.8" />
                        </g>
                        <defs>
                            <filter id="filter0_b_645_4079" x="-9.22586" y="-10" width="100%" height="100%"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_645_4079" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934"
                                y2="104.221" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FD432A" />
                                <stop offset="1" stop-color="#FD2AA9" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="csgo-boost-howtobuy-tab csgo-boost-howtobuy-tab-esea" onclick="openTab(1)"><span
                        class="Esportal-tab-span">Win Boost</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48"
                        fill="none">
                        <g filter="url(#filter0_b_645_4079)">
                            <path
                                d="M191.482 0H38.1489C33.2553 0 29.9929 2.4 26.7305 7.2L1.12345 44.8758C0.220961 46.2036 1.17205 48 2.77756 48H225.222C226.828 48 227.779 46.2036 226.877 44.8758L201.27 7.2C198.007 2.4 196.376 0 191.482 0Z"
                                fill="url(#paint0_linear_645_4079)" fill-opacity="0.8" />
                        </g>
                        <defs>
                            <filter id="filter0_b_645_4079" x="-9.22586" y="-10" width="100%" height="100%"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                                <feComposite in2="SourceAlpha" operator="in"
                                    result="effect1_backgroundBlur_645_4079" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934"
                                y2="104.221" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FD432A" />
                                <stop offset="1" stop-color="#FD2AA9" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

            </div>

            <div class="shape-try">
                
                    <div class="csgo-boost-howtobuy-tab-content active" id="csgo-boost-tab1">
                        
                        <div class="csgo-boost-howtobuy-para">
                            <form action="/esea/checkout" method="post">
                                @csrf
                                <input type="text" value="ESEA Rank Boost" name="boost_type" style="display: none;" />

                            <div class="csgo-boost-rank-title-conatiner">

                                <div class="csgo-boost-rank-title-box">
                                    <h3>ESEA Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/ranks/esea/Dminus.png" alt="" class="rank-img" id="rankboostimage">

                                        <select class="addLocationProduct-boost-rank-toggle-new" onchange="updateRankBoostimage()" name="current_level" id="rankboostcurrent">
                                            <option value="" selected disabled>
                                                Select Rank</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dminus"><span>D-</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="D">D</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dplus">D+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cminus">C-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="C">C</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cplus">C+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bminus">B-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="B">B</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bplus">B+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aminus">A-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="A">A</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aplus">A+</option>

                                        </select>

                                    </div>
                                </div>
                                

                                <div class="csgo-boost-rank-title-box">
                                    <h3>ESEA Required Rank</h3>
                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/ranks/esea/Dminus.png" alt="" id="rankboostimagerequired" class="rank-img">

                                            <select class="addLocationProduct-boost-rank-toggle-new" id="rankboostrequired"
                                                onchange="updateRankBoostPriceRequired()" name="desired_level">
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dminus"><span>D-</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="D">D</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dplus">D+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cminus">C-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="C">C</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cplus">C+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bminus">B-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="B">B</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bplus">B+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aminus">A-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="A">A</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aplus">A+</option>

                                            </select>

                                    </div>
                                </div>

                            </div>

                            <div class="csgo-boost-rank-boost-category-conatiner">
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Solo Play</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="CS2RankBoostcheckbox1" name="solo_play" onchange="updateRankBoostPriceRequired()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Priority Order</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="CS2RankBoostcheckbox2" name="priority_order" onchange="updateRankBoostPriceRequired()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Play with booster</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="CS2RankBoostcheckbox3" name="play_with_booster" onchange="updateRankBoostPriceRequired()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                            </div>

                            <div class="csgo-boost-totalAmount-container">
                                <div class="shape-boostinner-card">
                                    <div class="csgo-boost-totalAmount-section">
                                        <label>
                                            <h3>Total Amount</h3>
                                            <h4 id="rankboostprice">$0.00</h4>
                                        </label>
                                        <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                    </div>
                                    <x-whychooseus></x-whychooseus>
                                </div>
                            </div>

                        </div>

                    </form>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-howtobuy-para">

                            <form action="/esea/checkout" method="post">
                                @csrf
                                <input type="text" value="ESEA Win Boost" name="boost_type" style="display: none;" />

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>ESEA Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/ranks/esea/Dminus.png" alt="" class="rank-img" id="placementcurrentimage">

                                        <select class="addLocationProduct-boost-rank-toggle-new" id="placementcurrent"
                                                onchange="updateplacementImage()" name="current_level">
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dminus"><span>D-</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="D">D</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Dplus">D+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cminus">C-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="C">C</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Cplus">C+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bminus">B-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="B">B</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Bplus">B+</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aminus">A-</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="A">A</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Aplus">A+</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="csgo-boost-rank-title-box">
                                    <div class="range-number-container">
                                        <h3>Number of Wins</h3>
                                        <span>
                                            <h5 class="slider-value" id="PlacementsliderValue">5 </h5>
                                            <h6>&nbsp;Wins</h6>
                                        </span>
                                    </div>
                                    <div class="csgo-boost-rank-select-container">

                                        <div class="range-slider">
                                            <input type="range" min="0" max="10" value="2" class="slider-range"
                                                id="placementrange" name="desired_level" onchange="updateplacement()">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="csgo-boost-rank-boost-category-conatiner">
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Solo Play</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="placementcheckbox1" onchange="updateplacement()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Priority Order</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="placementcheckbox2" onchange="updateplacement()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Play with booster</h5>
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <!-- <input type="checkbox"> -->
                                            <input type="checkbox" id="placementcheckbox3" onchange="updateplacement()">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                            </div>

                            <div class="csgo-boost-totalAmount-container">
                                <div class="shape-boostinner-card">
                                    <div class="csgo-boost-totalAmount-section">
                                        <label>
                                            <h3>Total Amount</h3>
                                            <h4 id="placementprice">$0.00</h4>
                                        </label>
                                        <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                    </div>
                                    <x-whychooseus></x-whychooseus>
                                </div>
                            </div>

                        </div>
                    </form>
                    </div>
            </div>
        </div>
        <!--  -->
    </div>

    <x-howtobuy></x-howtobuy>

    <!-- csgo-boost-howtobuy-Section-Start -->
    <div class="csgo-boost-howtobuy-container">
        <h3>Why choose us?</h3>
        <div class="csgo-boost-howtobuy-section">

            <img src="/assets/img/Vector.svg" alt="" class="round-vector">

            <div class="csgo-boost-howtobuy-inner-section">

                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>MyBoost.gg offers a Premium CS2 account boosting service, with our team of skilled professionals.
                            The rank you desire is guarenteed.
                        </p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Professional Boosters</h4>
                        <p>All our boosters are semi-professional veterans of Counter-Strike, they are all highly trained
                            and experienced in their craft.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>All your data is safe with us. Boost your Counter Strike 2 accounts without having to worry about
                            anything.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>Account Safety</h4>
                        <p>At MyBoost.gg we have the most safe boosting procedures & the most elite players, with our
                            protocols in place, your account safety is guaranteed.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- csgo-boost-howtobuy-Section-End -->

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
            <button class="csgo-login-btn SUBSCRIBE-btn">SUBSCRIBE</button>
        </div>
    </div>
    <!-- csgo-Subscribe Section End -->

    <x-footer></x-footer>
@endsection

@push('js')
    <script>
        function updateplacementImage(){
            var selectedOption = document.getElementById("placementcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("placementcurrentimage");
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
        }

        function updateplacement(){
                var reviews = document.getElementById('placementrange').value;
                
                var additionalAmount = 0;

                if (document.getElementById("placementcheckbox1").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("placementcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("placementcheckbox3").checked) {
                    additionalAmount += 0.20;
                }

                var totalAmount = (reviews * 7) * (1 + additionalAmount);
                document.getElementById("placementprice").innerText = "$" + totalAmount.toFixed(2);

                const slider = document.getElementById("placementrange");
                const sliderValue = document.getElementById("PlacementsliderValue");

                // Update the slider value text when the slider is moved
                slider.addEventListener("input", function() {
                    sliderValue.textContent = this.value;
            });
        }

        //rank boost

        function updateRankBoostimage(){
            var selectedOption = document.getElementById("rankboostcurrent").value;

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("rankboostimage");
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
            
        }

        function updateRankBoostPriceRequired(){
            var selectedOption = document.getElementById("rankboostrequired").value;
            var prices = {
                Dminus: 10.00,
                D: 15.00,
                Dplus: 20.00,
                Cminus: 25.00,
                C: 30.00,
                Cplus: 35.00,
                Bminus: 40.00,
                B: 45.00,
                Bplus: 50.00,
                Aminus: 55.00,
                A: 60.00,
                Aplus: 65.00,
            };

            var additionalAmount = 0;

            if (document.getElementById("CS2RankBoostcheckbox1").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("CS2RankBoostcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("CS2RankBoostcheckbox3").checked) {
                additionalAmount += 0.20;
            }

            var totalPrice = prices[selectedOption] * (1 + additionalAmount);

            document.getElementById("rankboostprice").innerText = "$" + totalPrice.toFixed(2);

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("rankboostimagerequired");
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
            
        }
    </script>
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush