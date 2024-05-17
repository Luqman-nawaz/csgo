@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your CS2 Account, Rank Boost, Win Boost, Wingman Boost, Danger Zone</title> @endsection

    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
        </style>
    @endpush

@section('content')


<div class="landing-page-container">
    <x-navbar></x-navbar>

    <div class="heroSectionCS2-container">
        <div class="heroSectionCS2-inner-container">
            <div class="heroSectionCS2-innerLeft-container">
                <h5>ELEVATE YOUR CS2 EXPERIENCE</h5>
                <h1>CS2 Boosting Services</h1>
                <p>Unlock your full potential in CS2 with our professional boosting services. Whether you’re aiming
                    for higher ranks, better performance, or personalized coaching, our team of skilled players is
                    here to help. Get the edge you need to dominate the game.</p>
            </div>
        </div>
        <div class="boostLogo-box"><img src="/assets/images/cs2Boost.png" alt=""></div>
    </div>

    

    <!-- CS2 Boosting Tabs Start -->
    <div class="boosting-main-container">
        <div class="boosting-centered-container">


            <div class="tabs flex justify-between items-center gap-4">
                <button class="boostingTabBtn active" onclick="openTab(event, 'tab1')">CS2 Rank Boost</button>
                <button class="boostingTabBtn" onclick="openTab(event, 'tab2')">CS2 Win Boost</button>
                <button class="boostingTabBtn" onclick="openTab(event, 'tab3')">CS2 Wingman Boost</button>
                <button class="boostingTabBtn" onclick="openTab(event, 'tab4')">CS2 Placement Matches</button>
                <button class="boostingTabBtn lastBtn" onclick="openTab(event, 'tab5')">Danger Zone Boost</button>
            </div>

            <div id="tab1" class="boostingTab active">
                
                <form action="/cs2/checkout" method="post">
                    @csrf
                    <input type="text" value="Rank Boost" name="boost_type" style="display: none;" />

                    <div class="boostingTabContent">

                    

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="rankboostimage" alt="">
                                </div>
                                <div class="custom-select">
                                    <label for="select">Current Level</label>
                                    <select id="select" name="current_level" onchange="updateRankBoostPrice();">
                                                <option value="Silver I">Silver I</option>
                                                <option value="Silver II">Silver II</option>
                                                <option value="Silver III">Silver III</option>
                                                <option value="Silver IV">Silver IV</option>
                                                <option value="Silver Elite">Silver Elite</option>
                                                <option value="Silver Elite Master">Silver Elite Master</option>
                                                <option value="Gold Nova I">Gold Nova I</option>
                                                <option value="Gold Nova II">Gold Nova II</option>
                                                <option value="Gold Nova III">Gold Nova III</option>
                                                <option value="Gold Nova Master">Gold Nova Master</option>
                                                <option value="Master Guardian">Master Guardian</option>
                                                <option value="Master Guardian II">Master Guardian II</option>
                                                <option value="Master Guardian Elite">Master Guardian Elite</option>
                                                <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                                <option value="Legendary Eagle">Legendary Eagle</option>
                                                <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                                <option value="Supreme Master">Supreme Master First Class</option>
                                                <option value="Global Elite">Global Elite</option>
                                    </select>
                                </div>



                            </div>

                            <div class="boosting-rankConverttoImg-box">
                                <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                            </div>

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="rankImage1" alt="">
                                </div>

                                <div class="custom-select">
                                    <label for="select">Desired Level</label>
                                    <select id="select" name="desired_level" class="updateRankBoostPriceRequired" onchange="updateRankBoostPriceRequired()">
                                            <option value="Silver I">Silver I</option>
                                            <option value="Silver II">Silver II</option>
                                            <option value="Silver III">Silver III</option>
                                            <option value="Silver IV">Silver IV</option>
                                            <option value="Silver Elite">Silver Elite</option>
                                            <option value="Silver Elite Master">Silver Elite Master</option>
                                            <option value="Gold Nova I">Gold Nova I</option>
                                            <option value="Gold Nova II">Gold Nova II</option>
                                            <option value="Gold Nova III">Gold Nova III</option>
                                            <option value="Gold Nova Master">Gold Nova Master</option>
                                            <option value="Master Guardian">Master Guardian</option>
                                            <option value="Master Guardian II">Master Guardian II</option>
                                            <option value="Master Guardian Elite">Master Guardian Elite</option>
                                            <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                            <option value="Legendary Eagle">Legendary Eagle</option>
                                            <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                            <option value="Supreme Master">Supreme Master First Class</option>
                                            <option value="Global Elite">Global Elite</option>
                                    </select>
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
                                    <input type="checkbox" id="CS2RankBoostcheckbox1" name="solo_play" onclick="updateRankBoostPriceRequired()">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="CS2RankBoostcheckbox2" name="priority_order" onclick="updateRankBoostPriceRequired()">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="CS2RankBoostcheckbox3" name="play_with_booster" onclick="updateRankBoostPriceRequired()">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3 id="rankboostprice">$56</h3></span>
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
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                </div>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <span>4.9 on</span>
                                                </a>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                                </a>
                                            </div>
                                        </div>

                        </div>

                    </div>
                </form>
            </div>

            <div id="tab2" class="boostingTab">
                <form action="/cs2/checkout" method="post">
                    @csrf
                        <input type="text" value="Win Boost" name="boost_type" style="display: none;" />
                        <div class="boostingTabContent">

                            <div class="boosting-option-container">

                                <div class="boosting-option-inner-container">

                                    <div class="boosting-option-img-box">
                                            <img src="/assets/images/rankImgs/RankIMG1.png" id="winboostcurrentimage" alt="">
                                        </div>
                                        <div class="custom-select">
                                            <label for="select">Current Level</label>
                                            <select class="updateWinBoostPriceRequired" id="select" name="current_level" onchange="updateWinBoostImage()" >
                                                        <option value="Silver I">Silver I</option>
                                                        <option value="Silver II">Silver II</option>
                                                        <option value="Silver III">Silver III</option>
                                                        <option value="Silver IV">Silver IV</option>
                                                        <option value="Silver Elite">Silver Elite</option>
                                                        <option value="Silver Elite Master">Silver Elite Master</option>
                                                        <option value="Gold Nova I">Gold Nova I</option>
                                                        <option value="Gold Nova II">Gold Nova II</option>
                                                        <option value="Gold Nova III">Gold Nova III</option>
                                                        <option value="Gold Nova Master">Gold Nova Master</option>
                                                        <option value="Master Guardian">Master Guardian</option>
                                                        <option value="Master Guardian II">Master Guardian II</option>
                                                        <option value="Master Guardian Elite">Master Guardian Elite</option>
                                                        <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                                        <option value="Legendary Eagle">Legendary Eagle</option>
                                                        <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                                        <option value="Supreme Master">Supreme Master First Class</option>
                                                        <option value="Global Elite">Global Elite</option>
                                            </select>
                                    </div>

                                </div>

                                <div class="counter-box">
                                        <label for="counter1">Number of Wins</label>
                                        <div class="counter">
                                            <button type="button" class="minus" onclick="updatetab1minus();"><img
                                                    src="./assets/icons/MinusCircle.png" alt=""></button>
                                            <input name="desired_level" type="number" class="counter1winboost value" id="counter1" value="1" onchange="updatePriceWinBoost();">
                                            <button type="button" class="plus" onclick="updatetab1plus();"><img
                                                    src="./assets/icons/PlusCircle.png" alt=""></button>
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
                                        <input type="checkbox" name="solo_play" id="winboostcheckbox1" onclick="updatePriceWinBoost()">
                                        +1 Extra Win
                                        <span>+20%</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="priority_order" id="winboostcheckbox2" onclick="updatePriceWinBoost()">
                                        Priority Order
                                        <span>+20%</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="play_with_booster" id="winboostcheckbox3" onclick="updatePriceWinBoost()">
                                        Play with Booster
                                        <span>+20%</span>
                                    </label>

                                </div>

                            </div>

                            <div class="boosting-pricing-conatiner">

                                <div class="boosting-pricing-txt-conatiner">
                                    <span>Final Price <h3 id="winboostprice">$56</h3></span>
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
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                </div>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <span>4.9 on</span>
                                                </a>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                                </a>
                                            </div>
                                        </div>

                            </div>

                        </div>
                </form>
            </div>

            <div id="tab3" class="boostingTab">
                <form action="/cs2/checkout" method="post">
                                    @csrf
                                    <input type="text" value="Wingman Boost" name="boost_type" style="display: none;" />
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="wingmanboostcurrentimage" alt="">
                                </div>

                                        <div class="custom-select">
                                            <select id="select" class="wingmanboostcurrent" name="current_level" onchange="updateWingmanBoostImage();">
                                                <option value="Silver I">Silver I</option>
                                                <option value="Silver II">Silver II</option>
                                                <option value="Silver III">Silver III</option>
                                                <option value="Silver IV">Silver IV</option>
                                                <option value="Silver Elite">Silver Elite</option>
                                                <option value="Silver Elite Master">Silver Elite Master</option>
                                                <option value="Gold Nova I">Gold Nova I</option>
                                                <option value="Gold Nova II">Gold Nova II</option>
                                                <option value="Gold Nova III">Gold Nova III</option>
                                                <option value="Gold Nova Master">Gold Nova Master</option>
                                                <option value="Master Guardian">Master Guardian</option>
                                                <option value="Master Guardian II">Master Guardian II</option>
                                                <option value="Master Guardian Elite">Master Guardian Elite</option>
                                                <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                                <option value="Legendary Eagle">Legendary Eagle</option>
                                                <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                                <option value="Supreme Master">Supreme Master First Class</option>
                                                <option value="Global Elite">Global Elite</option>
                                            </select>
                                        </div>

                            </div>

                            <div class="boosting-rankConverttoImg-box">
                                <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                            </div>

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="wingmanboostimagerequired" alt="">
                                </div>

                                        <div class="custom-select">
                                            <select id="select" class="wingmanboostrequired" name="desired_level" onchange="updateWingmanBoostPriceRequired();">
                                                <option value="Silver I">Silver I</option>
                                                <option value="Silver II">Silver II</option>
                                                <option value="Silver III">Silver III</option>
                                                <option value="Silver IV">Silver IV</option>
                                                <option value="Silver Elite">Silver Elite</option>
                                                <option value="Silver Elite Master">Silver Elite Master</option>
                                                <option value="Gold Nova I">Gold Nova I</option>
                                                <option value="Gold Nova II">Gold Nova II</option>
                                                <option value="Gold Nova III">Gold Nova III</option>
                                                <option value="Gold Nova Master">Gold Nova Master</option>
                                                <option value="Master Guardian">Master Guardian</option>
                                                <option value="Master Guardian II">Master Guardian II</option>
                                                <option value="Master Guardian Elite">Master Guardian Elite</option>
                                                <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                                <option value="Legendary Eagle">Legendary Eagle</option>
                                                <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                                <option value="Supreme Master">Supreme Master First Class</option>
                                                <option value="Global Elite">Global Elite</option>
                                            </select>
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
                                    <input type="checkbox" name="solo_play" id="CS2wingmanBoostcheckbox1" onclick="updateWingmanBoostPriceRequired();">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="priority_order" id="CS2wingmanBoostcheckbox2" onclick="updateWingmanBoostPriceRequired();">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="play_with_booster" id="CS2wingmanBoostcheckbox3" onclick="updateWingmanBoostPriceRequired();">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3 id="wingmanboostprice">$56</h3></span>
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
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                </div>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <span>4.9 on</span>
                                                </a>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                                </a>
                                            </div>
                                        </div>

                        </div>

                    </div>
                </form>
            </div>

            <div id="tab4" class="boostingTab">
                <form action="/cs2/checkout" method="post">
                    @csrf
                        <input type="text" value="Placement Matches" name="boost_type" style="display: none;" />
                        <div class="boostingTabContent">

                            <div class="boosting-option-container">

                                <div class="boosting-option-inner-container">

                                    <div class="boosting-option-img-box">   
                                            <img src="/assets/images/rankImgs/RankIMG1.png" id="placementcurrent" alt="">
                                        </div>
                                        <div class="custom-select">
                                            <label for="select">Current Level</label>
                                            <select class="placementcurrent" id="select" name="current_level" onchange="updateplacementImage()" >
                                                        <option value="Silver I">Silver I</option>
                                                        <option value="Silver II">Silver II</option>
                                                        <option value="Silver III">Silver III</option>
                                                        <option value="Silver IV">Silver IV</option>
                                                        <option value="Silver Elite">Silver Elite</option>
                                                        <option value="Silver Elite Master">Silver Elite Master</option>
                                                        <option value="Gold Nova I">Gold Nova I</option>
                                                        <option value="Gold Nova II">Gold Nova II</option>
                                                        <option value="Gold Nova III">Gold Nova III</option>
                                                        <option value="Gold Nova Master">Gold Nova Master</option>
                                                        <option value="Master Guardian">Master Guardian</option>
                                                        <option value="Master Guardian II">Master Guardian II</option>
                                                        <option value="Master Guardian Elite">Master Guardian Elite</option>
                                                        <option value="Distunguished Master Guardian">Distunguished Master Guardian</option>
                                                        <option value="Legendary Eagle">Legendary Eagle</option>
                                                        <option value="Legendary Eagle Master">Legendary Eagle Master</option>
                                                        <option value="Supreme Master">Supreme Master First Class</option>
                                                        <option value="Global Elite">Global Elite</option>
                                            </select>
                                    </div>

                                </div>

                                <div class="counter-box">
                                        <label for="counter1">Number of Wins</label>
                                        <div class="counter">
                                            <button type="button" class="minus" onclick="updatetab4minus();"><img
                                                    src="./assets/icons/MinusCircle.png" alt=""></button>
                                            <input name="desired_level" type="number" class="placementrange value" id="counter1" value="1" onchange="updateplacement();">
                                            <button type="button" class="plus" onclick="updatetab4plus();"><img
                                                    src="./assets/icons/PlusCircle.png" alt=""></button>
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
                                        <input type="checkbox" name="solo_play" id="placementcheckbox1" onclick="updateplacement()">
                                        +1 Extra Win
                                        <span>+20%</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="priority_order" id="placementcheckbox2" onclick="updateplacement()">
                                        Priority Order
                                        <span>+20%</span>
                                    </label>
                                    <label>
                                        <input type="checkbox" name="play_with_booster" id="placementcheckbox3" onclick="updateplacement()">
                                        Play with Booster
                                        <span>+20%</span>
                                    </label>

                                </div>

                            </div>

                            <div class="boosting-pricing-conatiner">

                                <div class="boosting-pricing-txt-conatiner">
                                    <span>Final Price <h3 id="placementprice">$56</h3></span>
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
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                </div>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <span>4.9 on</span>
                                                </a>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                                </a>
                                            </div>
                                        </div>

                            </div>

                        </div>
                </form>
            </div>

            <div id="tab5" class="boostingTab">
                <form action="/cs2/checkout" method="post">
                                @csrf
                                <input type="text" value="Danger Zone Boost" name="boost_type" style="display: none;" />
                    <div class="boostingTabContent">

                        <div class="boosting-option-container">

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="dangerzonecurrentimage" alt="">
                                </div>

                                        <div class="custom-select">
                                            <select id="select" class="updatedangerzoneimage" name="current_level" onchange="updatedangerzoneimage();">
                                                <option value="Lab Rat I">Lab Rat I</option>
                                                <option value="Lab Rat II">Lab Rat II</option>
                                                <option value="Sprinting Hare I">Sprinting Hare I</option>
                                                <option value="Sprinting Hare II">Sprinting Hare II</option>
                                                <option value="Wild Scout I">Wild Scout I</option>
                                                <option value="Wild Scout II">Wild Scout II</option>
                                                <option value="Wild Scout Elite">Wild Scout Elite</option>
                                                <option value="Hunter Fox I">Hunter Fox I</option>
                                                <option value="Hunter Fox II">Hunter Fox II</option>
                                                <option value="Hunter Fox III">Hunter Fox III</option>
                                                <option value="Hunter Fox Elite">Hunter Fox Elite</option>
                                                <option value="Timber Wolf">Timber Wolf</option>
                                                <option value="Ember Wolf">Ember Wolf</option>
                                                <option value="Wildfire Wolf">Wildfire Wolf</option>
                                                <option value="The Howling Alpha">The Howling Alpha</option>
                                            </select>
                                        </div>

                            </div>

                            <div class="boosting-rankConverttoImg-box">
                                <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                            </div>

                            <div class="boosting-option-inner-container">

                                <div class="boosting-option-img-box">
                                    <img src="/assets/images/rankImgs/RankIMG1.png" id="dangerzoneimagerequired" alt="">
                                </div>
                                        <div class="custom-select">

                                            <select id="select" class="dangerzonerankrequired" name="desired_level" onchange="updateDangerZoneBoostPriceRequired();">
                                                <option value="Lab Rat I">Lab Rat I</option>
                                                <option value="Lab Rat II">Lab Rat II</option>
                                                <option value="Sprinting Hare I">Sprinting Hare I</option>
                                                <option value="Sprinting Hare II">Sprinting Hare II</option>
                                                <option value="Wild Scout I">Wild Scout I</option>
                                                <option value="Wild Scout II">Wild Scout II</option>
                                                <option value="Wild Scout Elite">Wild Scout Elite</option>
                                                <option value="Hunter Fox I">Hunter Fox I</option>
                                                <option value="Hunter Fox II">Hunter Fox II</option>
                                                <option value="Hunter Fox III">Hunter Fox III</option>
                                                <option value="Hunter Fox Elite">Hunter Fox Elite</option>
                                                <option value="Timber Wolf">Timber Wolf</option>
                                                <option value="Ember Wolf">Ember Wolf</option>
                                                <option value="Wildfire Wolf">Wildfire Wolf</option>
                                                <option value="The Howling Alpha">The Howling Alpha</option>
                                            </select>
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
                                    <input type="checkbox" name="solo_play" id="dangerzonecheckbox1" onclick="updateDangerZoneBoostPriceRequired()">
                                    +1 Extra Win
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="priority_order" id="dangerzonecheckbox2" onclick="updateDangerZoneBoostPriceRequired()">
                                    Priority Order
                                    <span>+20%</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="play_with_booster" id="dangerzonecheckbox3" onclick="updateDangerZoneBoostPriceRequired()">
                                    Play with Booster
                                    <span>+20%</span>
                                </label>

                            </div>

                        </div>

                        <div class="boosting-pricing-conatiner">

                            <div class="boosting-pricing-txt-conatiner">
                                <span>Final Price <h3 id="dangerzoneprice">$56</h3></span>
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
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                    <a href="https://www.trustpilot.com/review/myboost.gg"><img src="/assets/images/trustpilot_icon.png.png" alt=""></a>
                                                </div>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <span>4.9 on</span>
                                                </a>
                                                <a href="https://www.trustpilot.com/review/myboost.gg">
                                                    <img src="/assets/images/trustpilot_logo.svg.png" alt="">
                                                </a>
                                            </div>
                                        </div>

                        </div>

                    </div>
                </form>
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

    <x-boostingservices></x-boostingservices>

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
        //win boost

        function updatetab1minus(){
            var reviews = document.querySelector('.counter1winboost').value;
            let newvalue = +reviews - 1;
            document.querySelector('.counter1winboost').value = newvalue;

            updatePriceWinBoost();
        }

        function updatetab1plus(){
            var reviews = document.querySelector('.counter1winboost').value;
            let newvalue = +reviews + 1;
            document.querySelector('.counter1winboost').value = newvalue;

            updatePriceWinBoost();
        }


        function updatePriceWinBoost(){
                var reviews = document.querySelector('.counter1winboost').value;
                
                var additionalAmount = 0;

                if (document.getElementById("winboostcheckbox1").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("winboostcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("winboostcheckbox3").checked) {
                    additionalAmount += 0.20;
                }

                var totalAmount = (reviews * 7) * (1 + additionalAmount);
                document.getElementById("winboostprice").innerText = "$" + totalAmount.toFixed(2);
        }
        

        function updateWinBoostImage(){
                var selectedOption = document.querySelector('.updateWinBoostPriceRequired').value;
                // Rank Dropdown Img Change
                var rankImage = document.getElementById("winboostcurrentimage");
                rankImage.src = `/ranks/csgo/${selectedOption}.png`;
        }

        //wingman boost
        function updateWingmanBoostImage(){
                var selectedOption = document.querySelector('.wingmanboostcurrent').value;
                // Rank Dropdown Img Change
                var rankImage = document.getElementById("wingmanboostcurrentimage");
                rankImage.src = `/ranks/wingman/${selectedOption}.webp`;
        }

        function updateWingmanBoostPriceRequired(){
                var selectedOption = document.querySelector(".wingmanboostrequired").value;
                var prices = {
                    "Silver I": 10.00,
                    "Silver II": 15.00,
                    "Silver III": 20.00,
                    "Silver IV": 25.00,
                    "Silver Elite": 30.00,
                    "Silver Elite Master": 35.00,
                    "Gold Nova I": 40.00,
                    "Gold Nova II": 45.00,
                    "Gold Nova III": 50.00,
                    "Gold Nova Master": 55.00,
                    "Master Guardian": 60.00,
                    "Master Guardian II": 65.00,
                    "Master Guardian Elite": 70.00,
                    "Distunguished Master Guardian": 75.00,
                    "Legendary Eagle": 80.00,
                    "Legendary Eagle Master": 85.00,
                    "Supreme Master": 90.00,
                    "Global Elite": 100.00,
                };

                var additionalAmount = 0;

                if (document.getElementById("CS2wingmanBoostcheckbox1").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("CS2wingmanBoostcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("CS2wingmanBoostcheckbox3").checked) {
                    additionalAmount += 0.20;
                }

                var totalPrice = prices[selectedOption] * (1 + additionalAmount);

                document.getElementById("wingmanboostprice").innerText = "$" + totalPrice.toFixed(2);

                // Rank Dropdown Img Change
                var rankImage = document.getElementById("wingmanboostimagerequired");
                rankImage.src = `/ranks/wingman/${selectedOption}.webp`;
        }

        //placement matches
        function updateplacementImage(){
            var selectedOption = document.querySelector(".placementcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("placementcurrent");
            rankImage.src = `/ranks/csgo/${selectedOption}.png`;
        }

        function updatetab4minus(){
            var reviews = document.querySelector('.placementrange').value;
            let newvalue = +reviews - 1;
            document.querySelector('.placementrange').value = newvalue;

            updateplacement();
        }

        function updatetab4plus(){
            var reviews = document.querySelector('.placementrange').value;
            let newvalue = +reviews + 1;
            document.querySelector('.placementrange').value = newvalue;

            updateplacement();
        }

        function updateplacement(){
                var reviews = document.querySelector('.placementrange').value;
                
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
        }

        //Danger Zone Boost
        function updatedangerzoneimage(){
            var selectedOption = document.querySelector(".updatedangerzoneimage").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("dangerzonecurrentimage");
            rankImage.src = `/ranks/dangerzone/${selectedOption}.webp`;
        }

        function updateDangerZoneBoostPriceRequired(){
                var selectedOption = document.querySelector(".dangerzonerankrequired").value;
                var prices = {
                    "Lab Rat I": 10.00,
                    "Lab Rat II": 15.00,
                    "Sprinting Hare I": 20.00,
                    "Sprinting Hare II": 25.00,
                    "Wild Scout I": 30.00,
                    "Wild Scout II": 35.00,
                    "Wild Scout Elite": 40.00,
                    "Hunter Fox I": 45.00,
                    "Hunter Fox II": 50.00,
                    "Hunter Fox III": 55.00,
                    "Hunter Fox Elite": 60.00,
                    "Timber Wolf": 65.00,
                    "Ember Wolf": 70.00,
                    "Wildfire Wolf": 75.00,
                    "The Howling Alpha": 80.00,
                };

                var additionalAmount = 0;

                if (document.getElementById("dangerzonecheckbox1").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("dangerzonecheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("dangerzonecheckbox3").checked) {
                    additionalAmount += 0.20;
                }

                var totalPrice = prices[selectedOption] * (1 + additionalAmount);

                document.getElementById("dangerzoneprice").innerText = "$" + totalPrice.toFixed(2);

                // Rank Dropdown Img Change
                var rankImage = document.getElementById("dangerzoneimagerequired");
                rankImage.src = `/ranks/dangerzone/${selectedOption}.webp`;
        }

        //rank boost
        function updateRankBoostPrice(){
                var selectedOption = document.getElementById("select").value;

                // Rank Dropdown Img Change
                var rankImage = document.getElementById("rankboostimage");
                rankImage.src = `/ranks/csgo/${selectedOption}.png`;
                
        }

        function updateRankBoostPriceRequired(){
                
                var selectedOption = document.querySelector('.updateRankBoostPriceRequired').value;
                
                var prices = {
                    "Silver I": 10.00,
                    "Silver II": 15.00,
                    "Silver III": 20.00,
                    "Silver IV": 25.00,
                    "Silver Elite": 30.00,
                    "Silver Elite Master": 35.00,
                    "Gold Nova I": 40.00,
                    "Gold Nova II": 45.00,
                    "Gold Nova III": 50.00,
                    "Gold Nova Master": 55.00,
                    "Master Guardian": 60.00,
                    "Master Guardian II": 65.00,
                    "Master Guardian Elite": 70.00,
                    "Distunguished Master Guardian": 75.00,
                    "Legendary Eagle": 80.00,
                    "Legendary Eagle Master": 85.00,
                    "Supreme Master": 90.00,
                    "Global Elite": 100.00,
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
                var rankImage = document.getElementById("rankImage1");
                rankImage.src = `/ranks/csgo/${selectedOption}.png`;
                
        }
    </script>
    
@endpush