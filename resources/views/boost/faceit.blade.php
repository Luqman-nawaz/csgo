@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your FaceIT Account, Win Boost, Eloboost</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <!-- csgo-boost-hero-Section-Start -->
    <div class="csgo-boost-container" style="display: none;">
        <!-- <img src="/assets/img/Group 3.svg" alt=""> -->
        <div class="csgo-boost-section csgo-boost-section-1">
            <div class="boost-hero-text-container">
                <h2 class="trns-boost-text">FaceIT Account Boost<br>MyBoost.gg</h2>
            </div>
        </div>
    </div>
    <!-- csgo-boost-hero-Section-End -->

    <div class="csgo-howtobuy-conatianer csgo-howtobuy-conatianer-faceit">

        <div class="csgo-howtobuy-tabs-conatiner">
            <div class="csgo-boost-howtobuy-tabs csgo-boost-faceit-tabs">

                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab active" onclick="openTab(0)"><span
                        class="Esportal-tab-span-1">Faceit Level Boost</span>
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
                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab" onclick="openTab(1)"><span
                        class="Esportal-tab-span">Faceit ELO Boost</span>
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
                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab" onclick="openTab(2)"><span
                        class="Esportal-tab-span">Faceit Win Boost</span>
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
                <div class="csgo-boost-howtobuy-content">
                    <div class="csgo-boost-howtobuy-tab-content active" id="csgo-boost-tab1">
                        <div class="csgo-boost-howtobuy-para">
                            <form action="/faceit/checkout" method="post">
                                @csrf
                                <input type="text" value="Level Boost" name="boost_type" style="display: none;" />

                                <div class="csgo-boost-rank-title-conatiner">

                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Faceit Current Rank</h3>

                                        <div class="csgo-boost-rank-select-container">
                                            <img src="/ranks/faceit/Level 1.svg" alt="" class="rank-img" id="faceitcurrentimage" style="width:17%;">

                                            <select class="addLocationProduct-boost-rank-toggle-new" onchange="updatefaceitcurrentimage()" name="current_level" id="faceitcurrent">
                                                <option value="" selected disabled>
                                                    Select Rank</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 1"><span>Level 1</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 2">Level 2</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 3">Level 3</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 4">Level 4</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 5">Level 5</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 6">Level 6</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 7">Level 7</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 8">Level 8</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 9">Level 9</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 10">Level 10</option>

                                            </select>

                                        </div>
                                    </div>
                                    

                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Faceit Required Rank</h3>
                                        <div class="csgo-boost-rank-select-container">
                                            <img src="/ranks/faceit/Level 1.svg" alt="" id="faceitrequiredimage" class="rank-img" style="width:17%;">

                                                <select class="addLocationProduct-boost-rank-toggle-new" id="faceitrequired"
                                                    onchange="updatefaceitpricerequired()" name="desired_level">
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 1"><span>Level 1</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 2">Level 2</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 3">Level 3</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 4">Level 4</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 5">Level 5</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 6">Level 6</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 7">Level 7</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 8">Level 8</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 9">Level 9</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="Level 10">Level 10</option>

                                                </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="csgo-boost-rank-boost-category-conatiner">
                                    <div class="csgo-boost-rank-boost-category-section">
                                        <div class="csgo-boost-rank-boost-category-box">
                                            <h5>+1 Extra Win</h5>
                                            <img src="/assets/icons/info-gray.svg" alt="">
                                            <label class="switch">
                                                <!-- <input type="checkbox"> -->
                                                <input type="checkbox" id="faceitcheckbox1" name="solo_play" onchange="updatefaceitpricerequired()">
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
                                                <input type="checkbox" id="faceitcheckbox2" name="priority_order" onchange="updatefaceitpricerequired()">
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
                                                <input type="checkbox" id="faceitcheckbox3" name="play_with_booster" onchange="updatefaceitpricerequired()">
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
                                                <h4 id="faceitprice">$0.00</h4>
                                            </label>
                                            <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                        </div>
                                        <x-whychooseus></x-whychooseus>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-howtobuy-para">
                            <form action="/faceit/checkout" method="post">
                                @csrf
                                <input type="text" value="Elo Boost" name="boost_type" style="display: none;" />

                                <div class="csgo-boost-rank-title-conatiner">

                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Faceit Current Rank</h3>

                                        <div class="csgo-boost-rank-select-container">
                                            <img src="/ranks/faceit/Level 1.svg" alt="" class="rank-img" id="faceitelocurrentimage" style="width:17%;">

                                            <select class="addLocationProduct-boost-rank-toggle-new" onchange="updatefaceitelocurrentimage()" name="current_level" id="faceitelocurrent">
                                                <option value="" selected disabled>
                                                    Select Rank</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 1"><span>Level 1</span></option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 2">Level 2</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 3">Level 3</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 4">Level 4</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 5">Level 5</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 6">Level 6</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 7">Level 7</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 8">Level 8</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 9">Level 9</option>
                                                    <option class="addLocationProduct-boost-rank-option-new" value="Level 10">Level 10</option>

                                            </select>

                                        </div>
                                    </div>
                                    

                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Faceit Required Elo</h3>
                                        <div class="csgo-boost-rank-select-container">
                                            
                                                <select class="addLocationProduct-boost-rank-toggle-new" id="faceitelorequired"
                                                    onchange="updatefaceitelopricerequired()" name="desired_level">
                                                    <option class="addLocationProduct-boost-rank-option-new" value="200"><span>200</span></option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="400">400</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="600">600</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="800">800</option>
                                                <option class="addLocationProduct-boost-rank-option-new" value="1000">1000</option>

                                                </select>

                                        </div>
                                    </div>

                                </div>

                                <div class="csgo-boost-rank-boost-category-conatiner">
                                    <div class="csgo-boost-rank-boost-category-section">
                                        <div class="csgo-boost-rank-boost-category-box">
                                            <h5>+1 Extra Win</h5>
                                            <img src="/assets/icons/info-gray.svg" alt="">
                                            <label class="switch">
                                                <!-- <input type="checkbox"> -->
                                                <input type="checkbox" id="faceitelocheckbox1" name="solo_play" onchange="updatefaceitelopricerequired()">
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
                                                <input type="checkbox" id="faceitelocheckbox2" name="priority_order" onchange="updatefaceitelopricerequired()">
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
                                                <input type="checkbox" id="faceitelocheckbox3" name="play_with_booster" onchange="updatefaceitelopricerequired()">
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
                                                <h4 id="faceiteloprice">$0.00</h4>
                                            </label>
                                            <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                        </div>
                                        <x-whychooseus></x-whychooseus>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab3">
                            <div class="csgo-boost-howtobuy-para">

                                <form action="/faceit/checkout" method="post">
                                    @csrf
                                    <input type="text" value="FaceIt Win Boost" name="boost_type" style="display: none;" />

                                    <div class="csgo-boost-rank-title-conatiner">
                                        <div class="csgo-boost-rank-title-box">
                                            <h3>Faceit Current Rank</h3>

                                            <div class="csgo-boost-rank-select-container">
                                                <img src="/ranks/faceit/Level 1.svg" alt="" style="width:17%;" class="rank-img" id="faceitwincurrentimage">

                                                <select class="addLocationProduct-boost-rank-toggle-new" onchange="updatefaceitwincurrentimage()" name="current_level" id="faceitwincurrent">
                                                    <option value="" selected disabled>
                                                        Select Rank</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 1"><span>Level 1</span></option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 2">Level 2</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 3">Level 3</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 4">Level 4</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 5">Level 5</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 6">Level 6</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 7">Level 7</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 8">Level 8</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 9">Level 9</option>
                                                        <option class="addLocationProduct-boost-rank-option-new" value="Level 10">Level 10</option>
        
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
                                                <h5>+1 Extra Win</h5>
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
    function updatefaceitcurrentimage(){
            var selectedOption = document.getElementById("faceitcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitcurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    function updatefaceitpricerequired(){
            var selectedOption = document.getElementById("faceitrequired").value;
            var prices = {
                "Level 1": 10.00,
                "Level 2": 20.00,
                "Level 3": 30.00,
                "Level 4": 40.00,
                "Level 5": 50.00,
                "Level 6": 60.00,
                "Level 7": 70.00,
                "Level 8": 80.00,
                "Level 9": 90.00,
                "Level 10": 100.00,
            };
            
            var additionalAmount = 0;

            if (document.getElementById("faceitcheckbox1").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("faceitcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("faceitcheckbox3").checked) {
                additionalAmount += 0.20;
            }

            var totalPrice = prices[selectedOption] * (1 + additionalAmount);

            document.getElementById("faceitprice").innerText = "$" + totalPrice.toFixed(2);

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitrequiredimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    //faceit elo
    function updatefaceitelocurrentimage(){
            var selectedOption = document.getElementById("faceitelocurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitelocurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    function updatefaceitelopricerequired(){
            var selectedOption = document.getElementById("faceitelorequired").value;
            var prices = {
                "200": 10.00,
                "400": 20.00,
                "600": 30.00,
                "800": 40.00,
                "1000": 50.00,
            };
            
            var additionalAmount = 0;

            if (document.getElementById("faceitelocheckbox1").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("faceitelocheckbox2").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("faceitelocheckbox3").checked) {
                additionalAmount += 0.20;
            }

            var totalPrice = prices[selectedOption] * (1 + additionalAmount);

            document.getElementById("faceiteloprice").innerText = "$" + totalPrice.toFixed(2);

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitelorequiredimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    //faceit win
    function updatefaceitwincurrentimage(){
            var selectedOption = document.getElementById("faceitwincurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitwincurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
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

            var totalAmount = (reviews * 10) * (1 + additionalAmount);
            document.getElementById("placementprice").innerText = "$" + totalAmount.toFixed(2);

            const slider = document.getElementById("placementrange");
            const sliderValue = document.getElementById("PlacementsliderValue");

            // Update the slider value text when the slider is moved
            slider.addEventListener("input", function() {
                sliderValue.textContent = this.value;
        });
    }
    </script>
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush