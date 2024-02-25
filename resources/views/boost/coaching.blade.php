@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Most Professional CS2 Coaches!</title> @endsection
@section('content')
    <x-navbar></x-navbar>
    
    <!-- csgo-boost-hero-Section-Start -->
    <div class="csgo-boost-container" style="display: none;">
        <!-- <img src="./assets/img/Group 3.svg" alt=""> -->
        <div class="csgo-boost-section csgo-boost-section-1">
            <div class="boost-hero-text-container">
                <h2 class="trns-boost-text">CS2 Coaching by professional players</h2>
            </div>
        </div>
    </div>
    <!-- csgo-boost-hero-Section-End -->

    <!-- csgo-HomeBoost Start -->
    <div class="csgo-howtobuy-conatianer csgo-howtobuy-conatianer-coaching" style="margin-top: 50px;">
        <div class="csgo-howtobuy-tabs-conatiner">
            <div class="csgo-boost-howtobuy-tabs csgo-boost-coaching-tabs">

                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab csgo-boost-faceit-tab-coaching active"
                    onclick="openTab(0)"><span class="Esportal-tab-span-1">Textual Review</span>
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
                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab csgo-boost-faceit-tab-coaching"
                    onclick="openTab(1)"><span class="Esportal-tab-span">Call the Coach</span>
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
                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab csgo-boost-faceit-tab-coaching"
                    onclick="openTab(2)"><span class="Esportal-tab-span">Demo Review</span>
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
                <div class="csgo-boost-howtobuy-tab csgo-boost-faceit-tab csgo-boost-faceit-tab-coaching"
                    onclick="openTab(3)"><span class="Esportal-tab-span">Team Analysis</span>
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
                <!-- <div class="csgo-howtobuy-conatianer"> -->
                <div class="csgo-howtobuy-tabs-conatiner">
    
                    <div class="csgo-boost-howtobuy-content">
    
                        <div class="csgo-boost-howtobuy-tab-content active" id="csgo-boost-tab1">
                            <form action="/coaching/checkout" method="post">
                                @csrf
                                <input type="text" value="Textual Review" name="boost_type" style="display: none;" />
                                
                                <div class="csgo-boost-howtobuy-para">

                                    <p class="csgo-boost-coaching-p">This service involves one text review of the demo by a MyBoost.gg
                                        trainer. We analyze your actions in every round of the CSGO match, assess your skill level, single out the most
                                        suitable gaming role, and indicate aspects that you needs to deal with to achieve improved results.
                                    </p>
        
                                    <div class="csgo-boost-rank-title-conatiner">
        
                                        <div class="csgo-boost-rank-title-box">
                                            <h3>Select Your Role</h3>
        
                                            <div class="csgo-boost-rank-select-container">
        
                                                <select required class="addLocationProduct-boost-rank-toggle-new" id="rankSelect"
                                                    onchange="updatePrice()" name="ingame_role">
                                                    <option value="" selected disabled>
                                                        Select Your In-Game Role</option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="Universal Role">
                                                        <span>Universal Role</span>
                                                    </option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="Entry Fragger">
                                                        <span>Entry Fragger</span>
                                                    </option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="Support">
                                                        Support
                                                    </option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="In-game Leader">
                                                        In-game Leader
                                                    </option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="Lurker">
                                                        Lurker
                                                    </option>
                                                    <option class="addLocationProduct-boost-rank-option-new"
                                                        value="AWPer">AWPer
                                                    </option>   
                                                </select>

                                                
        
                                            </div>
                                        </div>
                                        
        
                                        <div class="csgo-boost-rank-title-box">
                                            <div class="range-number-container">
                                                <h3>No of Reviews</h3>
                                                <span>
                                                    <h5 class="slider-value" id="sliderValue">5</h5>
                                                </span>
                                            </div>
                                            <div class="csgo-boost-rank-select-container">

                                                <div class="range-slider">
                                                    <input type="range" name="no_of_reviews"  min="0" max="10" value="2" class="slider-range"
                                                        id="myRange" onchange="updatePrice()">
                                                </div>

                                            </div>
                                        </div>
        
                                    </div>
        
                                    <div class="csgo-boost-rank-boost-category-conatiner">
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>+1 Extra Win</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox1" onchange="updatePrice()">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" >
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Priority Order</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox2" onchange="updatePrice()" name="priority_order">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Play with booster</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox3" onchange="updatePrice()">
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
                                                    <h4 id="priceTag">$  0.00</h4> &nbsp;
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
                            
                            <form action="/coaching/checkout" method="post">
                                @csrf
                                <input type="text" value="Call the Coach" name="boost_type" style="display: none;" />
                                
                                <div class="csgo-boost-howtobuy-para">
                                    <p class="csgo-boost-coaching-p">This service involves one text review of the demo by a MyBoost.gg
                                        trainer. We analyze your actions in every round of the CSGO match, assess your skill level, single out the most
                                        suitable gaming role, and indicate aspects that you needs to deal with to achieve improved results.
                                    </p>
                                    <div class="csgo-boost-rank-title-conatiner">
                                        <div class="csgo-boost-rank-title-box">
                                            <h3>Select Your Role</h3>
        
                                            <div class="csgo-boost-rank-select-container">
        
                                                <select required class="addLocationProduct-boost-rank-toggle-new" id="rankSelect"
                                                        onchange="updateCoachPrice()" name="ingame_role">
                                                        <option value="" selected disabled>
                                                            Select Your In-Game Role</option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Universal Role">
                                                            <span>Universal Role</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Entry Fragger">
                                                            <span>Entry Fragger</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Support">
                                                            Support
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="In-game Leader">
                                                            In-game Leader
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Lurker">
                                                            Lurker
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="AWPer">AWPer
                                                        </option>   
                                                    </select>
        
                                            </div>
                                        </div>
                                        <div class="csgo-boost-rank-title-box">
                                            <div class="range-number-container">
                                                <h3>No of Reviews</h3>
                                                <span>
                                                    <h5 class="slider-value" id="CoachsliderValue">5</h5>
                                                </span>
                                            </div>
                                            <div class="csgo-boost-rank-select-container">

                                                <div class="range-slider">
                                                    <input type="range" name="no_of_reviews"  min="0" max="10" value="2" class="slider-range"
                                                        id="CoachmyRange" onchange="updateCoachPrice()">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="csgo-boost-rank-boost-category-conatiner">
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>+1 Extra Win</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox1" onchange="updatePrice()">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" >
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Priority Order</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="Coachingcheckbox2" onchange="updateCoachPrice()" name="priority_order">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Play with booster</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox3" onchange="updatePrice()">
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
                                                    <h4 id="CoachpriceTag">$  0.00</h4> &nbsp;
                                                </label>
                                                <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                            </div>
                                            <x-whychooseus></x-whychooseus>
                                        </div>
                                    </div>
        
                                </div>
                            </form>
                        </div>
    
                        <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab3">
                            
                            <form action="/coaching/checkout" method="post">
                                @csrf
                                <input type="text" value="Call the Coach" name="boost_type" style="display: none;" />
                                
                                <div class="csgo-boost-howtobuy-para">
                                    <p class="csgo-boost-coaching-p">This service involves one text review of the demo by a MyBoost.gg
                                        trainer. We analyze your actions in every round of the CSGO match, assess your skill level, single out the most
                                        suitable gaming role, and indicate aspects that you needs to deal with to achieve improved results.
                                    </p>
                                    <div class="csgo-boost-rank-title-conatiner">
                                        <div class="csgo-boost-rank-title-box">
                                            <h3>Select Your Role</h3>
        
                                            <div class="csgo-boost-rank-select-container">
        
                                                <select required class="addLocationProduct-boost-rank-toggle-new" id="rankSelect"
                                                        onchange="updateCoachDemoPrice()" name="ingame_role">
                                                        <option value="" selected disabled>
                                                            Select Your In-Game Role</option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Universal Role">
                                                            <span>Universal Role</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Entry Fragger">
                                                            <span>Entry Fragger</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Support">
                                                            Support
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="In-game Leader">
                                                            In-game Leader
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Lurker">
                                                            Lurker
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="AWPer">AWPer
                                                        </option>   
                                                    </select>
        
                                            </div>
                                        </div>
                                        <div class="csgo-boost-rank-title-box">
                                            <div class="range-number-container">
                                                <h3>No of Reviews</h3>
                                                <span>
                                                    <h5 class="slider-value" id="DemoCoachsliderValue">5</h5>
                                                </span>
                                            </div>
                                            <div class="csgo-boost-rank-select-container">

                                                <div class="range-slider">
                                                    <input type="range" name="no_of_reviews"  min="0" max="10" value="2" class="slider-range"
                                                        id="DemoCoachmyRange" onchange="updateCoachDemoPrice()">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="csgo-boost-rank-boost-category-conatiner">
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>+1 Extra Win</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox1" onchange="updatePrice()">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" >
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Priority Order</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="DemoCoachingcheckbox2" onchange="updateCoachDemoPrice()" name="priority_order">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Play with booster</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox3" onchange="updatePrice()">
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
                                                    <h4 id="DemoCoachpriceTag">$  0.00</h4> &nbsp;
                                                </label>
                                                <button class="csgo-btn proceed-checkoutbtn">Procced To Checkout</button>
                                            </div>
                                            <x-whychooseus></x-whychooseus>
                                        </div>
                                    </div>
        
                                </div>
                            </form>
                        </div>
    
                        <div class="csgo-boost-howtobuy-tab-content" id="csgo-boost-tab4">
                            
                            <form action="/coaching/checkout" method="post">
                                @csrf
                                <input type="text" value="Team Analysis" name="boost_type" style="display: none;" />
                                
                                <div class="csgo-boost-howtobuy-para">
                                    <p class="csgo-boost-coaching-p">This service involves one text review of the demo by a MyBoost.gg
                                        trainer. We analyze your actions in every round of the CSGO match, assess your skill level, single out the most
                                        suitable gaming role, and indicate aspects that you needs to deal with to achieve improved results.
                                    </p>
                                    <div class="csgo-boost-rank-title-conatiner">
                                        <div class="csgo-boost-rank-title-box">
                                            <h3>Select Your Role</h3>
        
                                            <div class="csgo-boost-rank-select-container">
        
                                                <select required class="addLocationProduct-boost-rank-toggle-new" id="rankSelect"
                                                        onchange="updateTeamCoachPrice()" name="ingame_role">
                                                        <option value="" selected disabled>
                                                            Select Your In-Game Role</option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Universal Role">
                                                            <span>Universal Role</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Entry Fragger">
                                                            <span>Entry Fragger</span>
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Support">
                                                            Support
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="In-game Leader">
                                                            In-game Leader
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="Lurker">
                                                            Lurker
                                                        </option>
                                                        <option class="addLocationProduct-boost-rank-option-new"
                                                            value="AWPer">AWPer
                                                        </option>   
                                                    </select>
        
                                            </div>
                                        </div>
                                        <div class="csgo-boost-rank-title-box">
                                            <div class="range-number-container">
                                                <h3>No of Reviews</h3>
                                                <span>
                                                    <h5 class="slider-value" id="TeamCoachsliderValue">5</h5>
                                                </span>
                                            </div>
                                            <div class="csgo-boost-rank-select-container">

                                                <div class="range-slider">
                                                    <input type="range" name="no_of_reviews"  min="0" max="10" value="2" class="slider-range"
                                                        id="TeamCoachmyRange" onchange="updateTeamCoachPrice()">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="csgo-boost-rank-boost-category-conatiner">
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>+1 Extra Win</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox1" onchange="updatePrice()">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" >
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Priority Order</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="TeamCoachingcheckbox2" onchange="updateTeamCoachPrice()" name="priority_order">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <p>Additional 20%</p>
                                        </div>
                                        <div class="csgo-boost-rank-boost-category-section" style="display: none;">
                                            <div class="csgo-boost-rank-boost-category-box">
                                                <h5>Play with booster</h5>
                                                <img src="/assets/icons/info-gray.svg" alt="">
                                                <label class="switch">
                                                    <!-- <input type="checkbox"> -->
                                                    <input type="checkbox" id="checkbox3" onchange="updatePrice()">
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
                                                    <h4 id="TeamCoachpriceTag">$  0.00</h4> &nbsp;
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
                <!-- </div> -->
            </div>

        </div>
        <!--  -->
    </div>
    <!-- csgo-HomeBoost End -->

    <x-howtobuy></x-howtobuy>

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
            <h6>WANT BETTER DEALS?</h6>
            <p>Sign up to our newsletter and receive regular updates from our side and avail best discounts.</p>
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
    function updatePrice(){
            var reviews = document.getElementById('myRange').value;
            
            var additionalAmount = 0;

            if (document.getElementById("checkbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("priceTag").innerText = "$" + totalAmount.toFixed(2);
        

            const slider = document.getElementById("myRange");
            const sliderValue = document.getElementById("sliderValue");

            // Update the slider value text when the slider is moved
            slider.addEventListener("input", function() {
                sliderValue.textContent = this.value;
        });
    }

    function updateCoachDemoPrice(){
            var reviews = document.getElementById('DemoCoachmyRange').value;
            
            var additionalAmount = 0;

            if (document.getElementById("DemoCoachingcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("DemoCoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
        

            const slider = document.getElementById("DemoCoachmyRange");
            const sliderValue = document.getElementById("DemoCoachsliderValue");

            // Update the slider value text when the slider is moved
            slider.addEventListener("input", function() {
                sliderValue.textContent = this.value;
            });
    }

    function updateCoachPrice(){
            var reviews = document.getElementById('CoachmyRange').value;
            
            var additionalAmount = 0;

            if (document.getElementById("Coachingcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("CoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
        

            const slider = document.getElementById("CoachmyRange");
            const sliderValue = document.getElementById("CoachsliderValue");

            // Update the slider value text when the slider is moved
            slider.addEventListener("input", function() {
                sliderValue.textContent = this.value;
            });
    }

    function updateTeamCoachPrice(){
            var reviews = document.getElementById('TeamCoachmyRange').value;
            
            var additionalAmount = 0;

            if (document.getElementById("TeamCoachingcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("TeamCoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
        

            const slider = document.getElementById("TeamCoachmyRange");
            const sliderValue = document.getElementById("TeamCoachsliderValue");

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