@extends('layouts.csgo')

@section('content')
    <x-navbar></x-navbar>
    
    <!-- csgo-boost-hero-Section-Start -->
    <div class="csgo-boost-container">
        <img src="./assets/img/Group 3.svg" alt="">
        <div class="csgo-boost-section">
            <div class="boost-hero-text-container">
                <h2 class="trns-boost-text">CS:GO Boosting by professional players</h2>
            </div>
        </div>
    </div>
    <!-- csgo-boost-hero-Section-End -->

    <!-- csgo-HomeBoost Start -->
    <div class="csgo-howtobuy-conatianer csgo-howtobuy-conatianer-faceit">

        <div class="csgo-howtobuy-tabs-conatiner">
            <div class="csgo-boost-howtobuy-tabs csgo-boost-faceit-tabs">

                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab  active" onclick="openTab(0)"><span
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
                    <form action="/checkout" method="post">
                        @csrf
                        @method('post')
                        <div class="csgo-boost-howtobuy-tab-content active" id="csgo-boost-tab1">
                            <div class="csgo-boost-howtobuy-para">

                                <div class="csgo-boost-rank-title-conatiner">
                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Current Faceit Level</h3>

                                        <div
                                            class="csgo-boost-rank-select-container csgo-boost-faceit-rank-select-container">
                                            <img src="./assets/img/image 3.png" alt="" class="rank-img rank-img-large">

                                            <div class="addLocationProduct-boost-rank-dropdown">
                                                <div class="addLocationProduct-boost-rank-toggle"
                                                    onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                    Select Level <span
                                                        class="addLocationProduct-boost-rank-arrow"></span>
                                                </div>
                                                <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                    <p class="addLocationProduct-boost-rank-option" href="#">250
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">500
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">750
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1000
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1250
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1500</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1750
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">2000
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">2250
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- <div class="rank-arrow-container"> -->
                                    <!-- <img src="./assets/img/Arrow1.png" alt="" class="rank-arrow"> -->
                                    <!-- </div> -->
                                    <div class="csgo-boost-rank-title-box">
                                        <h3>Desired Faceit Rank</h3>
                                        <div
                                            class="csgo-boost-rank-select-container csgo-boost-faceit-rank-select-container">
                                            <img src="./assets/img/image 4.png" alt="" class="rank-img rank-img-large">

                                            <div class="addLocationProduct-boost-rank-dropdown">
                                                <div class="addLocationProduct-boost-rank-toggle"
                                                    onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                    Select Level <span
                                                        class="addLocationProduct-boost-rank-arrow"></span>
                                                </div>
                                                <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                    <p class="addLocationProduct-boost-rank-option" href="#">250
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">500
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">750
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1000
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1250
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1500</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">1750
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">2000
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">2250
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="csgo-boost-rank-boost-category-conatiner">
                                    <div class="csgo-boost-rank-boost-category-section">
                                        <div class="csgo-boost-rank-boost-category-box">
                                            <h5>Solo Play</h5>
                                            <img src="./assets/icons/info-gray.svg" alt="">
                                            <label class="switch">
                                                <input type="checkbox" name="solo_play">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <p>Additional 20%</p>
                                    </div>
                                    <div class="csgo-boost-rank-boost-category-section">
                                        <div class="csgo-boost-rank-boost-category-box">
                                            <h5>Priority Order</h5>
                                            <img src="./assets/icons/info-gray.svg" alt="">
                                            <label class="switch">
                                                <input type="checkbox" name="priority_order">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <p>Additional 20%</p>
                                    </div>
                                    <div class="csgo-boost-rank-boost-category-section">
                                        <div class="csgo-boost-rank-boost-category-box">
                                            <h5>Play with booster</h5>
                                            <img src="./assets/icons/info-gray.svg" alt="">
                                            <label class="switch">
                                                <input type="checkbox" name="play_with_booster">
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
                                                <h4>56$</h4>
                                            </label>
                                            <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                        </div>
                                        <div class="csgo-boost-whychooseus-main-section">
                                            <h3>Why choose us?</h3>
                                            <div class="csgo-boost-whychooseus-section">
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <input type="text" name="boost_id" value="2" style="display: none;"/>
                        <input type="text" name="boost_type" value="Faceit Level Boost" style="display: none;"/>
                    </form>

                    <form action="/checkout" method="post">
                        @csrf
                        @method('post')
                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Current Faceit Level</h3>

                                    <div
                                        class="csgo-boost-rank-select-container csgo-boost-faceit-rank-select-container">
                                        <img src="./assets/img/Level_dropdown.png" alt=""
                                            class="rank-img rank-img-large">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Level <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">500
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1500</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2250
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="rank-arrow-container"> -->
                                <!-- <img src="./assets/img/Arrow1.png" alt="" class="rank-arrow"> -->
                                <!-- </div> -->
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Desired Faceit Rank</h3>
                                    <div
                                        class="csgo-boost-rank-select-container csgo-boost-faceit-rank-select-container">
                                        <img src="./assets/img/image 6.png" alt="" class="rank-img rank-img-large">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Level <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">500
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1500</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2250
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="csgo-boost-rank-boost-category-conatiner">
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Solo Play</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="solo_play">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Priority Order</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="priority_order">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Play with booster</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="play_with_booster">
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
                                            <h4>56$</h4>
                                        </label>
                                        <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <input type="text" name="boost_id" value="2" style="display: none;"/>
                    <input type="text" name="boost_type" value="Faceit Elo Boost" style="display: none;"/>
                    </form>

                    <form action="/checkout" method="post">
                        @csrf
                        @method('post')
                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab3">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner ">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Select Current Rank</h3>

                                    <div
                                        class="csgo-boost-rank-select-container csgo-boost-faceit-rank-select-container">
                                        <img src="./assets/img/image 3.png" alt="" class="rank-img rank-img-large">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">Select Current Rank<span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">500
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1250
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1500</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">1750
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2000
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">2250
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="csgo-boost-rank-title-box">
                                    <div class="range-number-container">
                                        <h3>Number of Wins</h3>
                                        <span>
                                            <h5 class="slider-value" id="sliderValue">5</h5>
                                            <h6>Wins</h6>
                                        </span>
                                    </div>
                                    <div class="csgo-boost-rank-select-container">

                                        <div class="range-slider">
                                            <input type="range" min="0" max="10" value="2" class="slider-range"
                                                id="myRange">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="csgo-boost-rank-boost-category-conatiner">
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Solo Play</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="solo_play">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Priority Order</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="priority_order">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <p>Additional 20%</p>
                                </div>
                                <div class="csgo-boost-rank-boost-category-section">
                                    <div class="csgo-boost-rank-boost-category-box">
                                        <h5>Play with booster</h5>
                                        <img src="./assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox" name="play_with_booster">
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
                                            <h4>56$</h4>
                                        </label>
                                        <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="./assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <input type="text" name="boost_id" value="2" style="display: none;"/>
                    <input type="text" name="boost_type" value="Faceit Win Boost" style="display: none;"/>
                    </form>

                </div>
            </div>

        </div>
        <!--  -->
    </div>
    <!-- csgo-HomeBoost End -->

    <!-- csgo-boost-howtobuy-Section-Start -->
    <div class="csgo-boost-howtobuy-container">
        <h3>How to buy CS:GO Win Boost?</h3>
        <div class="csgo-boost-howtobuy-section">

            <img src="./assets/img/Vector.svg" alt="" class="round-vector">

            <div class="csgo-boost-howtobuy-inner-section">

                <div class="csgo-howtobuy-box">
                    <img src="./assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="./assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="./assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="./assets/icons/security.svg" alt=""></span>
                        <h4>Totally Secure</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="./assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="./assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="./assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="./assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
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
                What is BuyBoosting.com?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    We are a company that operates a safe and a top tier boosting platform for online games. Our
                    boosting services are accessible worldwide. We achieve this by recruiting the best performing
                    boosters from each region for the games we boost. We guarantee the highest standards of online
                    game boosting available with the help on our professional boosting team, customer-centric
                    approach and easy to use interface.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                What is BuyBoosting.com?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    We are a company that operates a safe and a top tier boosting platform for online games. Our
                    boosting services are accessible worldwide. We achieve this by recruiting the best performing
                    boosters from each region for the games we boost. We guarantee the highest standards of online
                    game boosting available with the help on our professional boosting team, customer-centric
                    approach and easy to use interface.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-item-header">
                What is BuyBoosting.com?
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    We are a company that operates a safe and a top tier boosting platform for online games. Our
                    boosting services are accessible worldwide. We achieve this by recruiting the best performing
                    boosters from each region for the games we boost. We guarantee the highest standards of online
                    game boosting available with the help on our professional boosting team, customer-centric
                    approach and easy to use interface.
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