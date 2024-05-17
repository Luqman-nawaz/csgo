@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your FaceIT Account, Win Boost, Eloboost</title> @endsection

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
                        <h5>UNLOCK YOUR GAMING POTENTIAL WITH FACEIT BOOST</h5>
                        <h1>Faceit Boosting Services</h1>
                        <p>Enhance your Faceit experience with our professional boosting services. Whether you’re striving
                            for a higher rank, better performance, or personalised coaching, our skilled team is here to
                            assist you. We offer fair play—no cheats, bots, or prohibited methods.</p>
                    </div>
                </div>
                <div class="boostLogo-box"><img src="/assets/images/faceitBoost.png" alt=""></div>
            </div>

            <!-- CS2 Boosting Tabs Start -->
            <div class="boosting-main-container">
                <div class="boosting-centered-container">


                    <div class="tabs flex justify-between items-center gap-4">
                        <button class="boostingTabBtn boostingTabBtnOther active" onclick="openTab(event, 'tab1')">Faceit
                            Level Boost</button>
                        <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab2')">Faceit ELO
                            Boost</button>
                        <button class="boostingTabBtn boostingTabBtnOther lastBtn" onclick="openTab(event, 'tab3')">Faceit Win
                            Boost</button>
                    </div>

                    <div id="tab1" class="boostingTab active">
                        <form action="/faceit/checkout" method="post">
                                @csrf
                                <input type="text" value="Level Boost" name="boost_type" style="display: none;" />

                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="/assets/images/rankImgs/RankIMG1.png" id="faceitcurrentimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" class="faceitcurrent" onchange="updatefaceitcurrentimage()" name="current_level">
                                                    <option value="Level 1"><span>Level 1</span></option>
                                                    <option value="Level 2">Level 2</option>
                                                    <option value="Level 3">Level 3</option>
                                                    <option value="Level 4">Level 4</option>
                                                    <option value="Level 5">Level 5</option>
                                                    <option value="Level 6">Level 6</option>
                                                    <option value="Level 7">Level 7</option>
                                                    <option value="Level 8">Level 8</option>
                                                    <option value="Level 9">Level 9</option>
                                                    <option value="Level 10">Level 10</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="boosting-rankConverttoImg-box">
                                            <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                                        </div>

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="/assets/images/rankImgs/RankIMG1.png" id="faceitrequiredimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" class="faceitrequired" onchange="updatefaceitpricerequired()" name="desired_level">
                                                    <option value="Level 1"><span>Level 1</span></option>
                                                    <option value="Level 2">Level 2</option>
                                                    <option value="Level 3">Level 3</option>
                                                    <option value="Level 4">Level 4</option>
                                                    <option value="Level 5">Level 5</option>
                                                    <option value="Level 6">Level 6</option>
                                                    <option value="Level 7">Level 7</option>
                                                    <option value="Level 8">Level 8</option>
                                                    <option value="Level 9">Level 9</option>
                                                    <option value="Level 10">Level 10</option>
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
                                                <input type="checkbox" name="solo_play" id="faceitcheckbox1" onclick="updatefaceitpricerequired()">
                                                +1 Extra Win
                                                <span>+20%</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="priority_order" id="faceitcheckbox2" onclick="updatefaceitpricerequired()">
                                                Priority Order
                                                <span>+20%</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="play_with_booster" id="faceitcheckbox3" onclick="updatefaceitpricerequired()">
                                                Play with Booster
                                                <span>+20%</span>
                                            </label>

                                        </div>

                                    </div>

                                    <div class="boosting-pricing-conatiner">

                                        <div class="boosting-pricing-txt-conatiner">
                                            <span>Final Price <h3 id="faceitprice">$56</h3></span>
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
                        <form action="/faceit/checkout" method="post">
                                @csrf
                                <input type="text" value="Elo Boost" name="boost_type" style="display: none;" />
                            
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="counter-box">
                                            <label for="counter1">Current Faceit Elo</label>
                                            <div class="counter">
                                                <button type="button" class="minus" data-counter="counter1"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="current_level" type="number" class="placementrangecurrent value" id="counter1" value="1" onchange="updateRankBoostPriceRequired()" min="1" max="35000" required>
                                                <button type="button" class="plus" data-counter="counter1"><img
                                                        src="/assets/icons/PlusCircle.png" alt=""></button>
                                            </div>
                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Required Faceit Elo</label>
                                            <div class="counter">
                                                <button type="button" class="minus" data-counter="counter1"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="desired_level" type="number" class="placementrangerequired value" id="counter1" value="1" onchange="updateRankBoostPriceRequired()" min="1" max="35000" required>
                                                <button type="button" class="plus" data-counter="counter1"><img
                                                        src="/assets/icons/PlusCircle.png" alt=""></button>
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
                                            <input type="checkbox" id="faceitelocheckbox1" name="solo_play" onclick="updatefaceitelopricerequired()">
                                            +1 Extra Win
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="faceitelocheckbox2" name="priority_order" onclick="updatefaceitelopricerequired()">
                                            Priority Order
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="faceitelocheckbox3" name="play_with_booster" onclick="updatefaceitelopricerequired()">
                                            Play with Booster
                                            <span>+20%</span>
                                        </label>

                                    </div>

                                </div>

                                <div class="boosting-pricing-conatiner">

                                    <div class="boosting-pricing-txt-conatiner">
                                        <span>Final Price <h3 id="faceiteloprice">$56</h3></span>
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
                        <form action="/faceit/checkout" method="post">
                                @csrf
                                <input type="text" value="Win Boost" name="boost_type" style="display: none;" />
                                
                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="/assets/images/rankImgs/RankIMG1.png" id="faceitwincurrentimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" name="current_level" class="faceitwincurrent" onchange="updatefaceitwincurrentimage()">
                                                    <option value="Level 1"><span>Level 1</span></option>
                                                    <option value="Level 2">Level 2</option>
                                                    <option value="Level 3">Level 3</option>
                                                    <option value="Level 4">Level 4</option>
                                                    <option value="Level 5">Level 5</option>
                                                    <option value="Level 6">Level 6</option>
                                                    <option value="Level 7">Level 7</option>
                                                    <option value="Level 8">Level 8</option>
                                                    <option value="Level 9">Level 9</option>
                                                    <option value="Level 10">Level 10</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Number of Wins</label>
                                            <div class="counter">
                                                <button type="button" class="minus" onclick="updatetab1minus();"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="desired_level" type="number" class="placementrange value" id="counter1" value="1" onchange="updateplacement()">
                                                <button type="button" class="plus" onclick="updatetab1plus();"><img
                                                        src="/assets/icons/PlusCircle.png" alt=""></button>
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
    function updatefaceitcurrentimage(){
            var selectedOption = document.querySelector(".faceitcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitcurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    function updatefaceitpricerequired(){
            var selectedOption = document.querySelector(".faceitrequired").value;
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
            var selectedOption = document.querySelector(".faceitelocurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitelocurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

    function updatefaceitelopricerequired(){
            var selectedOption = document.querySelector(".faceitelorequired").value;
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
            var selectedOption = document.querySelector(".faceitwincurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("faceitwincurrentimage");
            rankImage.src = `/ranks/faceit/${selectedOption}.svg`;
    }

        function updatetab1minus(){
            var reviews = document.querySelector('.placementrange').value;
            let newvalue = +reviews - 1;
            document.querySelector('.placementrange').value = newvalue;

            updateplacement();
        }

        function updatetab1plus(){
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

            var totalAmount = (reviews * 10) * (1 + additionalAmount);
            document.getElementById("placementprice").innerText = "$" + totalAmount.toFixed(2);
    }
    </script>
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
@endpush