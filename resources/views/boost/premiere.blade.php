@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Safe & Secure CS2 Premier Account Boost</title> @endsection

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
                        <h5>UNLEASH YOUR COMPETITIVE EDGE ON CS2 Premier</h5>
                        <h1>CS2 Premier Boosting Services</h1>
                        <p>Step up your game on CS2 Premier with our elite rank boosting services. Our seasoned boosters, armed
                            with lightning-fast ping, will elevate your rank, enhance your gameplay, and secure those
                            crucial wins. Fair play, no shortcuts—just pure skill and dedication. </p>
                    </div>
                </div>
                <div class="boostLogo-box"><img src="/assets/images/cs2premier.png" style="opacity:0.5;" alt=""></div>
            </div>

            <!-- CS2 Boosting Tabs Start -->
            <div class="boosting-main-container">
                <div class="boosting-centered-container">


                    <div class="tabs flex justify-between items-center gap-4">
                        <button class="boostingTabBtn boostingTabBtnOther active" onclick="openTab(event, 'tab1')">Premier
                            Rank Boost</button>
                        <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab2')">Premier Win
                            Boost</button>
                    </div>

                    <div id="tab1" class="boostingTab active">
                        <form action="/premier/checkout" method="post">
                                @csrf
                                <input type="text" value="Premier Rank Boost" name="boost_type" style="display: none;" />
                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="counter-box">
                                            <label for="counter1">Current Premiere Rank</label>
                                            <div class="counter">
                                                <button type="button" class="minus" data-counter="counter1"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="current_level" type="number" class="placementrangecurrent value" id="counter1" value="1" onchange="updateRankBoostPriceRequired()" min="1" max="35000" required>
                                                <button type="button" class="plus" data-counter="counter1"><img
                                                        src="/assets/icons/PlusCircle.png" alt=""></button>
                                            </div>
                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Required Premiere Rank</label>
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
                                                <input type="checkbox" name="solo_play" id="CS2RankBoostcheckbox1" onclick="updateRankBoostPriceRequired()">
                                                +1 Extra Win
                                                <span>+20%</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="priority_order"  id="CS2RankBoostcheckbox2" onclick="updateRankBoostPriceRequired()">
                                                Priority Order
                                                <span>+20%</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="play_with_booster" id="CS2RankBoostcheckbox3" onclick="updateRankBoostPriceRequired()">
                                                Play with Booster
                                                <span>+20%</span>
                                            </label>

                                        </div>

                                    </div>

                                    <div class="boosting-pricing-conatiner">

                                        <div class="boosting-pricing-txt-conatiner">
                                            <span>Final Price <h3 id="rankboostprice">€56</h3></span>
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
                        <form action="/premier/checkout" method="post">
                                @csrf
                                <input type="text" value="Premier Win Boost" name="boost_type" style="display: none;" />
                            
                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="/ranks/premier/unrated.png" id="placementcurrentimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" class="placementcurrent" onchange="updateplacementImage()" name="current_level">
                                                    <option value="Unrated"><span>Unrated</span></option>
                                                    <option value="Grey"><span>Grey</span></option>
                                                    <option value="Cyan"><span>Cyan</span></option>
                                                    <option value="Blue"><span>Blue</span></option>
                                                    <option value="Purple"><span>Purple</span></option>
                                                    <option value="Pink"><span>Pink</span></option>
                                                    <option value="Red"><span>Red</span></option>
                                                    <option value="Gold"><span>Gold</span></option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Number of Wins</label>
                                            <div class="counter">
                                                <button type="button" class="minus" onclick="updatetab1minus();"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="desired_level" type="number" class="placementrange value" id="counter1" value="1" onchange="updateplacement()" min="1" max="10">
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
                                            <span>Final Price <h3 id="placementprice">€56</h3></span>
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

                var totalAmount = (reviews * 7) * (1 + additionalAmount);
                document.getElementById("placementprice").innerText = "€" + totalAmount.toFixed(2);
        }

        //rank boost

        function updateplacementImage(){
                var selectedOption = document.querySelector('.placementcurrent').value;
                // Rank Dropdown Img Change
                var rankImage = document.getElementById("placementcurrentimage");
                rankImage.src = `/ranks/premier/${selectedOption}.png`;
        }

        function updateRankBoostPriceRequired(){
            var selectedOption = document.querySelector(".placementrangerequired").value;
            var currentSelectedOption = document.querySelector(".placementrangecurrent").value;
            var goal = selectedOption - currentSelectedOption;

            const prices = {
                "0": 5.00,
                "1000": 10.00,
                "2000": 15.00,
                "3000": 20.00,
                "4000": 25.00,
                "5000": 30.00,
                "6000": 35.00,
                "7000": 40.00,
                "8000": 45.00,
                "9000": 50.00,
                "10000": 55.00,
                "11000": 60.00,
                "12000": 65.00,
                "13000": 70.00,
                "14000": 75.00,
                "15000": 80.00,
                "16000": 85.00,
                "17000": 90.00,
                "18000": 95.00,
                "19000": 100.00,
                "20000": 105.00,
                "21000": 110.00,
                "22000": 120.00,
                "23000": 130.00,
                "24000": 140.00,
                "25000": 150.00,
                "26000": 160.00,
                "27000": 170.00,
                "28000": 180.00,
                "29000": 190.00,
                "30000": 200.00,
                "31000": 225.00,
                "32000": 250.00,
                "33000": 275.00,
                "34000": 300.00,
                "35000": 350.00,
                "36000": 400.00,
            };

            goal = Math.round(goal/1000)*1000;

            price = prices[goal];
            
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

            var totalPrice = price * (1 + additionalAmount);

            document.getElementById("rankboostprice").innerText = "€" + totalPrice.toFixed(2);

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