@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your CS2 Account, Rank Boost, Win Boost, Wingman Boost, Danger Zone</title> @endsection

    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush

@section('content')


<div class="landing-page-container">
    <x-navbar></x-navbar>

    <div class="heroSectionCS2-container">
            <div class="heroSectionCS2-inner-container">
                <div class="heroSectionCS2-innerLeft-container">
                    <h5>BOOST YOUR GAMING POTENTIAL WITH PROFESSIONAL COACHING</h5>
                    <h1>Game Coaching Services</h1>
                    <p>Take your gaming skills to the next level with our expert coaching services. Whether you’re
                        aiming for higher ranks, better performance, or personalised guidance, our skilled coaches are
                        here to assist you. Let us help you achieve victory in your favourite games.</p>
                </div>
            </div>
            <div class="boostLogo-box"><img src="/assets/images/coachingBoost.png" alt=""></div>
        </div>

        <!-- CS2 Boosting Tabs Start -->
        <div class="boosting-main-container">
            <div class="boosting-centered-container">


                <div class="tabs flex justify-between items-center gap-4">
                    <button class="boostingTabBtn boostingTabBtnOther active" onclick="openTab(event, 'tab1')">Textual
                        Review</button>
                    <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab2')">Call the
                        Coach</button>
                    <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab3')">Demo
                        Review</button>
                    <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab4')">Team
                        Analysis</button>
                </div>

                <div id="tab1" class="boostingTab active">
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                             <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="./assets/images/rankImgs/RankIMG1.png" id="rankImage1" alt="">
                                </div>
                                <div class="custom-select">
                                    <label for="select">Label</label>
                                    <select id="select" onchange="updateSelected(this)">
                                        <option value="RankIMG1">Silver I</option>
                                        <option value="RankIMG2">Silver II</option>
                                        <option value="RankIMG3">Silver III</option>
                                        <option value="RankIMG4">Silver IV</option>
                                        <option value="RankIMG5">Silver Elite</option>
                                        <option value="RankIMG6">Silver Elite Master</option>
                                        <option value="RankIMG7">Golden Nova I</option>
                                        <option value="RankIMG8">Golden Nova II</option>
                                        <option value="RankIMG9">Golden Nova III</option>
                                        <option value="RankIMG10">Golden Nova Master</option>
                                        <option value="RankIMG11">Legendary Eagle</option>
                                        <option value="RankIMG12">Legendary Eagle Master</option>
                                        <option value="RankIMG13">Supreme Master First Class</option>
                                    </select>
                                </div>



                            </div>

                            <div class="counter-box">
                                <label for="counter1">Number of Wins</label>
                                <div class="counter">
                                    <button class="minus" data-counter="counter1" onclick="updatePrice();"><img
                                            src="./assets/icons/MinusCircle.png" alt=""></button>
                                    <input type="number" class="value" id="counter1" value="1" onchange="updatePrice();">
                                    <button class="plus" data-counter="counter1" onclick="updatePrice();"><img
                                            src="./assets/icons/PlusCircle.png" alt=""></button>
                                </div>
                            </div>


                        </div>

                        <div class="boosting-additional-conatiner">
                            <h5>Additional Features</h5>
                            <span>
                                <img src="./assets/icons/Info.png" alt="">
                                <p>Per additional features will charge 20% of the total amount.</p>
                            </span>

                            <div class="boosting-additionalInput-conatiner">

                                <label style="display:none;">
                                    <input type="checkbox">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox2" onchange="updatePrice()" name="priority_order">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label style="display:none;">
                                    <input type="checkbox">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3 id="priceTag">$56</h3></span>
                                <button class="themebtn-bg gap-3">ORDER NOW <img src="./assets/icons/circleArrow.png"
                                        alt=""></button>
                            </div>

                            <div class="boosting-pricing-opt-conatiner">
                                <div class="boosting-pricing-optLeft-conatiner">
                                    <img src="./assets/images/Gpay-trans.png" alt="">
                                    <img src="./assets/images/AE-trans.png" alt="">
                                    <img src="./assets/images/Mastercard-trans.png" alt="">
                                    <img src="./assets/images/Applepay-trans.png" alt="">
                                    <img src="./assets/images/Visa-trans.png" alt="">
                                </div>
                                <div class="boosting-pricing-optRight-conatiner">
                                    <h6>Our Customers rated us</h6>
                                    <div class="boosting-greenStar-container">
                                        <img src="./assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="./assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="./assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="./assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="./assets/images/trustpilot_icon.png.png" alt="">
                                    </div>
                                    <span>4.9 on</span>
                                    <img src="./assets/images/trustpilot_logo.svg.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="tab2" class="boostingTab">
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">

                                <form action="/coaching/checkout" method="post">
                                    @csrf
                                    
                                    <input type="text" value="Call the Coach" name="boost_type" style="display: none;" />

                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="rankImage1" alt="" style="display:none;">

                                </div>

                                <div class="custom-select" onclick="openSelect(this)">
                                    <label for="">CS2 Current Level</label>
                                    <div class="select-selected flex justify-between ">Select Rank <img
                                            src="/assets/icons/droparrow.png" alt=""></div>
                                    <div class="select-items">
                                        <div class="dropOpt" data-img="RankIMG1" onclick="selectOption(this)">Universal Role</div>
                                                    <div class="dropOpt" data-img="RankIMG2" onclick="selectOption(this)">Entry Fragger</div>
                                                    <div class="dropOpt" data-img="RankIMG3" onclick="selectOption(this)">Support</div>
                                                    <div class="dropOpt" data-img="RankIMG4" onclick="selectOption(this)">In-game Leader</div>
                                                    <div class="dropOpt" data-img="RankIMG5" onclick="selectOption(this)">Lurker</div>
                                                    <div class="dropOpt" data-img="RankIMG6" onclick="selectOption(this)">AWPer</div>
                                    </div>
                                                <select id="select" name="ingame_role" onchange="updateSelected(this)">
                                                    <option value="Universal Role">Universal Role</option>
                                                    <option value="Entry Fragger">Entry Fragger</option>
                                                    <option value="Support">Support</option>
                                                    <option value="In-game Leader">In-game Leader</option>
                                                    <option value="Lurker">Lurker</option>
                                                    <option value="AWPer">AWPer</option>
                                                </select>
                                </div>

                            </div>

                            <div class="counter-box">
                                <label for="">Number of Wins</label>
                                <div class="counter">
                                    <button class="minus"><img src="/assets/icons/MinusCircle.png" alt=""></button>
                                    <span class="value">1</span>
                                    <button class="plus"><img src="/assets/icons/PlusCircle.png" alt=""></button>
                                </div>
                            </div>


                        </div>

                        <div class="boosting-additional-conatiner">
                            <h5>Additional Features</h5>
                            <span>
                                <img src="/assets/icons/Info.png" alt="">
                                <p>Per additional features will charge 20% of the total amount.</p>
                            </span>

                            <div class="boosting-additionalInput-conatiner">

                                <label>
                                    <input type="checkbox">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3>$56</h3></span>
                                <button class="themebtn-bg gap-3">ORDER NOW <img src="/assets/icons/circleArrow.png"
                                        alt=""></button>
                            </div>
                        </form>
                            <div class="boosting-pricing-opt-conatiner">
                                <div class="boosting-pricing-optLeft-conatiner">
                                    <img src="/assets/images/Gpay-trans.png" alt="">
                                    <img src="/assets/images/AE-trans.png" alt="">
                                    <img src="/assets/images/Mastercard-trans.png" alt="">
                                    <img src="/assets/images/Applepay-trans.png" alt="">
                                    <img src="/assets/images/Visa-trans.png" alt="">
                                </div>
                                <div class="boosting-pricing-optRight-conatiner">
                                    <h6>Our Customers rated us</h6>
                                    <div class="boosting-greenStar-container">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                    </div>
                                    <span>4.9 on</span>
                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="tab3" class="boostingTab">
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="rankImage1" alt="">
                                </div>

                                <div class="custom-select" onclick="openSelect(this)">
                                    <label for="">ESPortal Current Level</label>
                                    <div class="select-selected flex justify-between ">Select Rank <img
                                            src="/assets/icons/droparrow.png" alt=""></div>
                                    <div class="select-items">
                                        <div class="dropOpt" data-img="RankIMG1" onclick="selectOption(this)">Silver I
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG2" onclick="selectOption(this)">Silver II
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG3" onclick="selectOption(this)">Silver III
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG4" onclick="selectOption(this)">Silver IV
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG5" onclick="selectOption(this)">Silver
                                            Elite</div>
                                        <div class="dropOpt" data-img="RankIMG6" onclick="selectOption(this)">Silver
                                            Elite Master</div>
                                        <div class="dropOpt" data-img="RankIMG7" onclick="selectOption(this)">Golden
                                            Nova I</div>
                                        <div class="dropOpt" data-img="RankIMG8" onclick="selectOption(this)">Golden
                                            Nova II</div>
                                        <div class="dropOpt" data-img="RankIMG9" onclick="selectOption(this)">Golden
                                            Nova II</div>
                                        <div class="dropOpt" data-img="RankIMG10" onclick="selectOption(this)">Golden
                                            Nova Master</div>
                                        <div class="dropOpt" data-img="RankIMG11" onclick="selectOption(this)">Legendary
                                            Eagle</div>
                                        <div class="dropOpt" data-img="RankIMG12" onclick="selectOption(this)">Legendary
                                            Eagle Master</div>
                                        <div class="dropOpt" data-img="RankIMG13" onclick="selectOption(this)">Supreme
                                            Master First Class
                                        </div>
                                    </div>
                                    <select id="select" onchange="updateSelected(this)">
                                        <option value="1">Silver I</option>
                                        <option value="2">Silver II</option>
                                        <option value="3">Silver III</option>
                                        <option value="4">Silver IV</option>
                                        <option value="5">Silver Elite</option>
                                        <option value="6">Silver Elite Master</option>
                                        <option value="7">Golden Nova I</option>
                                        <option value="8">Golden Nova II</option>
                                        <option value="9">Golden Nova III</option>
                                        <option value="10">Golden Nova Master</option>
                                        <option value="11">Legendary Eagle</option>
                                        <option value="12">Legendary Eagle Master</option>
                                        <option value="13">Supreme Master First Class</option>
                                    </select>
                                </div>

                            </div>

                            <div class="counter-box">
                                <label for="">Number of Wins</label>
                                <div class="counter">
                                    <button class="minus"><img src="/assets/icons/MinusCircle.png" alt=""></button>
                                    <span class="value">1</span>
                                    <button class="plus"><img src="/assets/icons/PlusCircle.png" alt=""></button>
                                </div>
                            </div>


                        </div>

                        <div class="boosting-additional-conatiner">
                            <h5>Additional Features</h5>
                            <span>
                                <img src="/assets/icons/Info.png" alt="">
                                <p>Per additional features will charge 20% of the total amount.</p>
                            </span>

                            <div class="boosting-additionalInput-conatiner">

                                <label>
                                    <input type="checkbox">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3>$56</h3></span>
                                <button class="themebtn-bg gap-3">ORDER NOW <img src="/assets/icons/circleArrow.png"
                                        alt=""></button>
                            </div>

                            <div class="boosting-pricing-opt-conatiner">
                                <div class="boosting-pricing-optLeft-conatiner">
                                    <img src="/assets/images/Gpay-trans.png" alt="">
                                    <img src="/assets/images/AE-trans.png" alt="">
                                    <img src="/assets/images/Mastercard-trans.png" alt="">
                                    <img src="/assets/images/Applepay-trans.png" alt="">
                                    <img src="/assets/images/Visa-trans.png" alt="">
                                </div>
                                <div class="boosting-pricing-optRight-conatiner">
                                    <h6>Our Customers rated us</h6>
                                    <div class="boosting-greenStar-container">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                    </div>
                                    <span>4.9 on</span>
                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="tab4" class="boostingTab">
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="rankImage1" alt="">
                                </div>

                                <div class="custom-select" onclick="openSelect(this)">
                                    <label for="">ESPortal Current Level</label>
                                    <div class="select-selected flex justify-between ">Select Rank <img
                                            src="/assets/icons/droparrow.png" alt=""></div>
                                    <div class="select-items">
                                        <div class="dropOpt" data-img="RankIMG1" onclick="selectOption(this)">Silver I
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG2" onclick="selectOption(this)">Silver II
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG3" onclick="selectOption(this)">Silver III
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG4" onclick="selectOption(this)">Silver IV
                                        </div>
                                        <div class="dropOpt" data-img="RankIMG5" onclick="selectOption(this)">Silver
                                            Elite</div>
                                        <div class="dropOpt" data-img="RankIMG6" onclick="selectOption(this)">Silver
                                            Elite Master</div>
                                        <div class="dropOpt" data-img="RankIMG7" onclick="selectOption(this)">Golden
                                            Nova I</div>
                                        <div class="dropOpt" data-img="RankIMG8" onclick="selectOption(this)">Golden
                                            Nova II</div>
                                        <div class="dropOpt" data-img="RankIMG9" onclick="selectOption(this)">Golden
                                            Nova II</div>
                                        <div class="dropOpt" data-img="RankIMG10" onclick="selectOption(this)">Golden
                                            Nova Master</div>
                                        <div class="dropOpt" data-img="RankIMG11" onclick="selectOption(this)">Legendary
                                            Eagle</div>
                                        <div class="dropOpt" data-img="RankIMG12" onclick="selectOption(this)">Legendary
                                            Eagle Master</div>
                                        <div class="dropOpt" data-img="RankIMG13" onclick="selectOption(this)">Supreme
                                            Master First Class
                                        </div>
                                    </div>
                                    <select id="select" onchange="updateSelected(this)">
                                        <option value="1">Silver I</option>
                                        <option value="2">Silver II</option>
                                        <option value="3">Silver III</option>
                                        <option value="4">Silver IV</option>
                                        <option value="5">Silver Elite</option>
                                        <option value="6">Silver Elite Master</option>
                                        <option value="7">Golden Nova I</option>
                                        <option value="8">Golden Nova II</option>
                                        <option value="9">Golden Nova III</option>
                                        <option value="10">Golden Nova Master</option>
                                        <option value="11">Legendary Eagle</option>
                                        <option value="12">Legendary Eagle Master</option>
                                        <option value="13">Supreme Master First Class</option>
                                    </select>
                                </div>

                            </div>

                            <div class="counter-box">
                                <label for="">Number of Wins</label>
                                <div class="counter">
                                    <button class="minus"><img src="/assets/icons/MinusCircle.png" alt=""></button>
                                    <span class="value">1</span>
                                    <button class="plus"><img src="/assets/icons/PlusCircle.png" alt=""></button>
                                </div>
                            </div>


                        </div>

                        <div class="boosting-additional-conatiner">
                            <h5>Additional Features</h5>
                            <span>
                                <img src="/assets/icons/Info.png" alt="">
                                <p>Per additional features will charge 20% of the total amount.</p>
                            </span>

                            <div class="boosting-additionalInput-conatiner">

                                <label>
                                    <input type="checkbox">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3>$56</h3></span>
                                <button class="themebtn-bg gap-3">ORDER NOW <img src="/assets/icons/circleArrow.png"
                                        alt=""></button>
                            </div>

                            <div class="boosting-pricing-opt-conatiner">
                                <div class="boosting-pricing-optLeft-conatiner">
                                    <img src="/assets/images/Gpay-trans.png" alt="">
                                    <img src="/assets/images/AE-trans.png" alt="">
                                    <img src="/assets/images/Mastercard-trans.png" alt="">
                                    <img src="/assets/images/Applepay-trans.png" alt="">
                                    <img src="/assets/images/Visa-trans.png" alt="">
                                </div>
                                <div class="boosting-pricing-optRight-conatiner">
                                    <h6>Our Customers rated us</h6>
                                    <div class="boosting-greenStar-container">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                        <img src="/assets/images/trustpilot_icon.png.png" alt="">
                                    </div>
                                    <span>4.9 on</span>
                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- CS2 Boosting Tabs End -->

        <div class="MyBoost-main-container">
            <div class="MyBoost-centered-container">
                <h5>FEATURES</h5>
                <h2>Why choose MyBoost?</h2>
                <div class="MyBoost-grid-container">
                    <div class="MyBoost-grid-box">
                        <span><img src="/assets/icons/CloudSlash.png" alt=""></span>
                        <div class="MyBoost-text">
                            <h5>Appear Offline</h5>
                            <p>None of your friends will see the boosters playing on your account.</p>
                        </div>
                    </div>
                    <div class="MyBoost-grid-box">
                        <span><img src="/assets/icons/Path.png" alt=""></span>
                        <div class="MyBoost-text">
                            <h5>Order Tracking</h5>
                            <p>You can track your orders from user dashboard provided to you.</p>
                        </div>
                    </div>
                    <div class="MyBoost-grid-box">
                        <span><img src="/assets/icons/Headset.png" alt=""></span>
                        <div class="MyBoost-text">
                            <h5>24/7 Live Support</h5>
                            <p>Rely on our professional support team 24/7.</p>
                        </div>
                    </div>
                    <div class="MyBoost-grid-box">
                        <span><img src="/assets/icons/Seal.png" alt=""></span>
                        <div class="MyBoost-text">
                            <h5>Loyalty Rewards</h5>
                            <p>Receive significant, cashback rewards on all orders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-container">
            <h5>OUR SERVICES</h5>
            <h2>We provide boosting for</h2>

            <div class="services-card-container">
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG.png" alt="">
                    <img class="services-small-img" src="/assets/images/cs2.png" alt="">
                    <div class="services-text">
                        <h3>CS 2 Boost</h3>
                        <p>Master CS2 with our boosting services! From map control to clutch plays, our boosters enhance
                            your performance.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG2.png" alt="">
                    <img class="services-small-img" src="/assets/images/esea.png" alt="">
                    <div class="services-text">
                        <h3>ESEA Boost</h3>
                        <p>Climb the ranks in ESEA League! Our expert boosters will elevate your Elo, improve your
                            gameplay, and help you compete at a higher level.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG3.png" alt="">
                    <img class="services-small-img" src="/assets/images/esportal.png" alt="">
                    <div class="services-text">
                        <h3>ESPortal Boost</h3>
                        <p>Unlock your potential on ESportal! Whether it’s improving your K/D ratio or achieving higher
                            ranks, our boosters have you covered.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG4.png" alt="">
                    <img class="services-small-img" src="/assets/images/faceit.png" alt="">
                    <div class="services-text">
                        <h3>Faceit Boost</h3>
                        <p>Faceit glory awaits! Our boosters will skyrocket your Faceit Elo, ensuring you play alongside
                            the best.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG5.png" alt="">
                    <img class="services-small-img" src="/assets/images/coashing.png" alt="">
                    <div class="services-text">
                        <h3>Coaching</h3>
                        <p>Personalized coaching for gamers! Learn from seasoned pros, refine your strategies, and
                            elevate your skills.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="stepsSection-container">

            <div class="stepsSection-inner-container">
                <h5>HOW TO GET SERVICE</h5>
                <h2>4 easy steps to start with us</h2>

                <div class="stepsSection-flow-container">
                    <div class="stepsSection-box">
                        <span>
                            <img src="/assets//icons/HandTap.png" alt="">
                        </span>
                        <h2>1. Select Boosting</h2>
                        <p>Choose your desired game and rank boost type (ESEA, Faceit, etc.)</p>
                    </div>
                    <div class="stepsSection-box">
                        <span>
                            <img src="/assets//icons/CreditCard.png" alt="">
                        </span>
                        <h2>2. Make Payment</h2>
                        <p>Complete the secure payment process using your preferred method.</p>
                    </div>
                    <div class="stepsSection-box">
                        <span>
                            <img src="/assets//icons/Note.png" alt="">
                        </span>
                        <h2>3. Provide Order Details</h2>
                        <p>Share your account information and any specific requirements.</p>
                    </div>
                    <div class="stepsSection-box">
                        <span>
                            <img src="/assets//icons/RocketLaunch.png" alt="">
                        </span>
                        <h2>4. Boosting Starts</h2>
                        <p>Our expert boosters begin enhancing your gaming experience.</p>
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

    
@endsection

@push('js')

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
        }

    </script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("boostingTab");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("boostingTabBtn");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
    </script>
    <script src="/vendor/js/boostDropdown.js"></script>
    <script src="/vendor/js/counter.js"></script>

    <script>

        element = document.getElementById('counter1');
        element.value = newvalue;
        element.dispatchEvent(new Event('input', { bubbles: true }));
        
        function updatePrice(){
            var reviews = document.getElementById('counter1').value;
            
            var additionalAmount = 0;

            if (document.getElementById("checkbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("priceTag").innerText = "$" + totalAmount.toFixed(2);
            
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
    
@endpush