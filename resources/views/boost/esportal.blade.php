@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Safe & Secure Esportal Account Boost</title> @endsection

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
                        <h5>UNLEASH YOUR COMPETITIVE EDGE ON ESPORTAL</h5>
                        <h1>Esportal Boosting Services</h1>
                        <p>Step up your game on ESportal with our elite rank boosting services. Our seasoned boosters, armed
                            with lightning-fast ping, will elevate your rank, enhance your gameplay, and secure those
                            crucial wins. Fair play, no shortcuts—just pure skill and dedication. </p>
                    </div>
                </div>
                <div class="boostLogo-box"><img src="./assets/images/esportalBoost.png" alt=""></div>
            </div>

            <!-- CS2 Boosting Tabs Start -->
            <div class="boosting-main-container">
                <div class="boosting-centered-container">


                    <div class="tabs flex justify-between items-center gap-4">
                        <button class="boostingTabBtn boostingTabBtnOther active" onclick="openTab(event, 'tab1')">Esportal
                            Rank Boost</button>
                        <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab2')">Esportal Win
                            Boost</button>
                    </div>

                    <div id="tab1" class="boostingTab active">
                        <form action="/esportal/checkout" method="post">
                                @csrf
                                <input type="text" value="Esportal Rank Boost" name="boost_type" style="display: none;" />
                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="/assets/images/rankImgs/RankIMG1.png" id="rankboostimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" class="rankboostcurrent" onchange="updateRankBoostimage()" name="current_level">
                                                    <option value="Silver"><span>Silver</span></option>
                                                    <option value="Gold 1">Gold 1</option>
                                                    <option value="Gold 2">Gold 2</option>
                                                    <option value="Veteran 1">Veteran 1</option>
                                                    <option value="Veteran 2">Veteran 2</option>
                                                    <option value="Master 1">Master 1</option>
                                                    <option value="Master 2">Master 2</option>
                                                    <option value="Elite 1">Elite 1</option>
                                                    <option value="Elite 2">Elite 2</option>
                                                    <option value="Pro 1">Pro 1</option>
                                                    <option value="Pro 2">Pro 2</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="boosting-rankConverttoImg-box">
                                            <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                                        </div>

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="./assets/images/rankImgs/RankIMG1.png" id="rankboostimagerequired" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" name="desired_level" class="rankboostrequired" onchange="updateRankBoostPriceRequired()">
                                                    <option value="Silver"><span>Silver</span></option>
                                                    <option value="Gold 1">Gold 1</option>
                                                    <option value="Gold 2">Gold 2</option>
                                                    <option value="Veteran 1">Veteran 1</option>
                                                    <option value="Veteran 2">Veteran 2</option>
                                                    <option value="Master 1">Master 1</option>
                                                    <option value="Master 2">Master 2</option>
                                                    <option value="Elite 1">Elite 1</option>
                                                    <option value="Elite 2">Elite 2</option>
                                                    <option value="Pro 1">Pro 1</option>
                                                    <option value="Pro 2">Pro 2</option>
                                                </select>
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
                                            <button class="themebtn-bg gap-3">ORDER NOW <img src="./assets/icons/circleArrow.png"
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
                        <form action="/esportal/checkout" method="post">
                                @csrf
                                <input type="text" value="Esportal Rank Boost" name="boost_type" style="display: none;" />
                            
                                <div class="boostingTabContent">

                                    <div class="boosting-option-container">

                                        <div class="boosting-option-inner-container">

                                            <div class="boosting-option-img-box">
                                                <img src="./assets/images/rankImgs/RankIMG1.png" id="placementcurrentimage" alt="">
                                            </div>
                                            <div class="custom-select">
                                                <label for="select">Label</label>
                                                <select id="select" class="placementcurrent" onchange="updateplacementImage()" name="current_level">
                                                    <option value="Silver"><span>Silver</span></option>
                                                    <option value="Gold 1">Gold 1</option>
                                                    <option value="Gold 2">Gold 2</option>
                                                    <option value="Veteran 1">Veteran 1</option>
                                                    <option value="Veteran 2">Veteran 2</option>
                                                    <option value="Master 1">Master 1</option>
                                                    <option value="Master 2">Master 2</option>
                                                    <option value="Elite 1">Elite 1</option>
                                                    <option value="Elite 2">Elite 2</option>
                                                    <option value="Pro 1">Pro 1</option>
                                                    <option value="Pro 2">Pro 2</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Number of Wins</label>
                                            <div class="counter">
                                                <button type="button" class="minus" onclick="updatetab1minus();"><img
                                                        src="./assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="desired_level" type="number" class="placementrange value" id="counter1" value="1" onchange="updateplacement()">
                                                <button type="button" class="plus" onclick="updatetab1plus();"><img
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
                                            <button class="themebtn-bg gap-3">ORDER NOW <img src="./assets/icons/circleArrow.png"
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

            <x-whyus></x-whyus>

            <x-boostingservices></x-boostingservices>


            <div class="stepsSection-container">

                <div class="stepsSection-inner-container">
                    <h5>HOW TO GET SERVICE</h5>
                    <h2>4 easy steps to start with us</h2>

                    <div class="stepsSection-flow-container">
                        <div class="stepsSection-box">
                            <span>
                                <img src="./assets//icons/HandTap.png" alt="">
                            </span>
                            <h2>1. Select Boosting</h2>
                            <p>Choose your desired game and rank boost type (ESEA, Faceit, etc.)</p>
                        </div>
                        <div class="stepsSection-box">
                            <span>
                                <img src="./assets//icons/CreditCard.png" alt="">
                            </span>
                            <h2>2. Make Payment</h2>
                            <p>Complete the secure payment process using your preferred method.</p>
                        </div>
                        <div class="stepsSection-box">
                            <span>
                                <img src="./assets//icons/Note.png" alt="">
                            </span>
                            <h2>3. Provide Order Details</h2>
                            <p>Share your account information and any specific requirements.</p>
                        </div>
                        <div class="stepsSection-box">
                            <span>
                                <img src="./assets//icons/RocketLaunch.png" alt="">
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
        function updateplacementImage(){
            var selectedOption = document.querySelector(".placementcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("placementcurrentimage");
            rankImage.src = `/ranks/esportal/${selectedOption}.png`;
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

                if(reviews > 10){
                    document.querySelector(".placementrange").value = 10;
                }
                
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

        function updateRankBoostimage(){
            var selectedOption = document.querySelector(".rankboostcurrent").value;

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("rankboostimage");
            rankImage.src = `/ranks/esportal/${selectedOption}.png`;
            
        }

        function updateRankBoostPriceRequired(){
            var selectedOption = document.querySelector(".rankboostrequired").value;
            var prices = {
                "Silver": 10.00,
                "Gold 1": 15.00,
                "Gold 2": 20.00,
                "Veteran 1": 25.00,
                "Veteran 2": 30.00,
                "Master 1": 35.00,
                "Master 2": 40.00,
                "Elite 1": 45.00,
                "Elite 2": 50.00,
                "Pro 1": 55.00,
                "Pro 2": 60.00,
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

            document.getElementById("rankboostprice").innerText = "€" + totalPrice.toFixed(2);

            // Rank Dropdown Img Change
            var rankImage = document.getElementById("rankboostimagerequired");
            rankImage.src = `/ranks/esportal/${selectedOption}.png`;
            
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