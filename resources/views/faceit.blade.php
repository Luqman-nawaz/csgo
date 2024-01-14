@extends('layouts.guest')
    @section('title') <title>MyBoost.GG - The Most Proessional FaceIT Boosters!</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <!-- csgo-boost-hero-Section-Start -->
    <div class="csgo-boost-container">
        <img src="/assets/img/Group 3.svg" alt="">
        <div class="csgo-boost-section">
            <div class="boost-hero-text-container">
                <h2 class="trns-boost-text">CS:GO Boosting by professional players</h2>
            </div>
        </div>
    </div>
    <!-- csgo-boost-hero-Section-End -->

    <!--  -->
    <div class="csgo-howtobuy-conatianer">
        <div class="csgo-boost-howtobuy-tabs csgo-boostmain-tabs">

            <div class="csgo-boost-howtobuy-tab onlyboostspan csgo-boostmain-tab active" onclick="openTab(0)"><span
                    class="Esportal-tab-span-1">CS:GO Rank Boost</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48" fill="none">
                    <g filter="url(#filter0_b_645_4079)">
                        <path
                            d="M191.482 0H38.1489C33.2553 0 29.9929 2.4 26.7305 7.2L1.12345 44.8758C0.220961 46.2036 1.17205 48 2.77756 48H225.222C226.828 48 227.779 46.2036 226.877 44.8758L201.27 7.2C198.007 2.4 196.376 0 191.482 0Z"
                            fill="url(#paint0_linear_645_4079)" fill-opacity="1" />
                    </g>
                    <defs>
                        <filter id="filter0_b_645_4079" x="-9.22586" y="-10" width="100%" height="100%"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_645_4079" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934" y2="104.221"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FD432A" />
                            <stop offset="1" stop-color="#FD2AA9" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="csgo-boost-howtobuy-tab onlyboostspan csgo-boostmain-tab" onclick="openTab(1)"><span
                    class="Esportal-tab-span">CS:GO Win Boost</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48" fill="none">
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
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_645_4079" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934" y2="104.221"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FD432A" />
                            <stop offset="1" stop-color="#FD2AA9" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="csgo-boost-howtobuy-tab onlyboostspan csgo-boostmain-tab" onclick="openTab(2)"><span
                    class="Esportal-tab-span">CS:GO Wingman Boost</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48" fill="none">
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
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_645_4079" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934" y2="104.221"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FD432A" />
                            <stop offset="1" stop-color="#FD2AA9" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="csgo-boost-howtobuy-tab onlyboostspan csgo-boostmain-tab" onclick="openTab(3)"><span
                    class="Esportal-tab-span">CS:GO Placement Matches</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48" fill="none">
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
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_645_4079" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934" y2="104.221"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FD432A" />
                            <stop offset="1" stop-color="#FD2AA9" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="csgo-boost-howtobuy-tab onlyboostspan csgo-boostmain-tab" onclick="openTab(4)"><span
                    class="Esportal-tab-span">Danger Zone Boost</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 228 48" fill="none">
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
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_645_4079" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_645_4079"
                                result="shape" />
                        </filter>
                        <linearGradient id="paint0_linear_645_4079" x1="114" y1="-18.75" x2="116.934" y2="104.221"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FD432A" />
                            <stop offset="1" stop-color="#FD2AA9" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="shape-try">
            <!-- <div class="csgo-howtobuy-conatianer"> -->

            <div class="csgo-howtobuy-tabs-conatiner">

                <div class="csgo-boost-howtobuy-content">

                    <div class="csgo-boost-howtobuy-tab-content active" id="csgo-boost-tab1">
                        <div class="csgo-boost-howtobuy-para">
                            <form action="/csgoboost" method="post">
                                @csrf
                                <div class="csgo-boost-rank-title-conatiner">
                                    <div class="csgo-boost-rank-title-box">
                                        <h3>CS:GO Current Rank</h3>

                                        <div class="csgo-boost-rank-select-container">
                                            <img src="/assets/img/rank.png" alt="" class="rank-img">

                                            <div class="addLocationProduct-boost-rank-dropdown">
                                                <div class="addLocationProduct-boost-rank-toggle"
                                                    onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                    Select Rank <span
                                                        class="addLocationProduct-boost-rank-arrow"></span>
                                                </div>
                                                <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                        Elite
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                        Elite
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        I
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        II
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        III
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">
                                                        Distinguished
                                                        Master Guardian</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                        Eagle
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                        Eagle
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                        Master
                                                        First Class</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- <div class="rank-arrow-container"> -->
                                    <!-- <img src="/assets/img/Arrow1.png" alt="" class="rank-arrow"> -->
                                    <!-- </div> -->
                                    <div class="csgo-boost-rank-title-box">
                                        <h3>CS:GO Current Rank</h3>
                                        <div class="csgo-boost-rank-select-container">
                                            <img src="/assets/img/rank.png" alt="" class="rank-img">

                                            <div class="addLocationProduct-boost-rank-dropdown">
                                                <div class="addLocationProduct-boost-rank-toggle"
                                                    onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                    Select Rank <span
                                                        class="addLocationProduct-boost-rank-arrow"></span>
                                                </div>
                                                <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                        Elite
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                        Elite
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        I
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        II
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        III
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">
                                                        Distinguished
                                                        Master Guardian</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                        Eagle
                                                    </p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                        Eagle
                                                        Master</p>
                                                    <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                        Master
                                                        First Class</p>
                                                </div>
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
                                                <input type="checkbox">
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
                                                <input type="checkbox" name="priority_order">
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
                                            <a href="/checkout"><button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button></a>
                                        </div>
                                        <div class="csgo-boost-whychooseus-main-section">
                                            <h3>Why choose us?</h3>
                                            <div class="csgo-boost-whychooseus-section">
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                                <div class="csgo-boost-whychooseus-box">
                                                    <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                    <h5>Guaranteed Rank</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>CS:GO Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
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
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                        <a href="/checkout"><button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button></a>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab3">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Wingman Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Wingman Desired Rank</h3>
                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
                                            </div>
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                        <a href="/checkout"><button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button></a>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab4">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>CS:GO Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
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
                                        <img src="/assets/icons/info-gray.svg" alt="">
                                        <label class="switch">
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                        <a href="/checkout"><button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button></a>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab5">
                        <div class="csgo-boost-howtobuy-para">

                            <div class="csgo-boost-rank-title-conatiner">
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Danger Zone Current Rank</h3>

                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="csgo-boost-rank-title-box">
                                    <h3>Danger Zone Desired Rank</h3>
                                    <div class="csgo-boost-rank-select-container">
                                        <img src="/assets/img/rank.png" alt="" class="rank-img">

                                        <div class="addLocationProduct-boost-rank-dropdown">
                                            <div class="addLocationProduct-boost-rank-toggle"
                                                onclick="addLocationProducttoggleDropdownBoostRank(this)">
                                                Select Rank <span
                                                    class="addLocationProduct-boost-rank-arrow"></span>
                                            </div>
                                            <div class="addLocationProduct-boost-rank-dropdown-menu">
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver IV
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Silver
                                                    Elite
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    I
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    II
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    III
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Golden Nova
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">
                                                    Distinguished
                                                    Master Guardian</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                </p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Legendary
                                                    Eagle
                                                    Master</p>
                                                <p class="addLocationProduct-boost-rank-option" href="#">Supreme
                                                    Master
                                                    First Class</p>
                                            </div>
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                            <input type="checkbox">
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
                                        <a href="/checkout"><button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button></a>
                                    </div>
                                    <div class="csgo-boost-whychooseus-main-section">
                                        <h3>Why choose us?</h3>
                                        <div class="csgo-boost-whychooseus-section">
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                            <div class="csgo-boost-whychooseus-box">
                                                <span><img src="/assets/icons/diamend.svg" alt=""></span>
                                                <h5>Guaranteed Rank</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!--  -->
            <!-- </div> -->
        </div>
    </div>
    <!--  -->


    <!-- csgo-boost-howtobuy-Section-Start -->
    <div class="csgo-boost-howtobuy-container">
        <h3>How to buy CS:GO Win Boost?</h3>
        <div class="csgo-boost-howtobuy-section">

            <img src="/assets/img/Vector.svg" alt="" class="round-vector">

            <div class="csgo-boost-howtobuy-inner-section">

                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>Totally Secure</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-howtobuy-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-howtobuy-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
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