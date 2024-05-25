@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - Boost your ESEA Account, 100% Safe & Secure</title> @endsection
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
                    <h5>UNLOCK YOUR ESEA POTENTIAL</h5>
                    <h1>ESEA Boosting Services</h1>
                    <p>Take your ESEA rank to new heights with our professional boosting services. Our highly-skilled
                        Rank S boosters can elevate your rank by playing on your account or alongside you, eliminating
                        the need to share your account details.</p>
                </div>
            </div>
            <div class="boostLogo-box"><img src="/assets/images/eseaBoost.png" alt=""></div>
        </div>

        <!-- CS2 Boosting Tabs Start -->
        <div class="boosting-main-container">
            <div class="boosting-centered-container">


                <div class="tabs flex justify-between items-center gap-4">
                    <button class="boostingTabBtn boostingTabBtnOther active" onclick="openTab(event, 'tab1')">ESEA Rank
                        Boost</button>
                    <button class="boostingTabBtn boostingTabBtnOther" onclick="openTab(event, 'tab2')">ESEA Win
                        Boost</button>
                </div>

                <div id="tab1" class="boostingTab active">
                        <form action="/esea/checkout" method="post">
                            @csrf
                            <input type="text" value="ESEA Rank Boost" name="boost_type" style="display: none;" />

                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">

                                        <div class="boosting-option-img-box">
                                            <img src="/assets/images/rankImgs/RankIMG1.png" id="rankboostimage" alt="">
                                        </div>
                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="current_level" id="select" class="rankboostcurrent" onchange="updateRankBoostimage()">
                                                <option value="D-"><span>D-</span></option>
                                                <option value="D">D</option>
                                                <option value="D Plus">D+</option>
                                                <option value="C-">C-</option>
                                                <option value="C">C</option>
                                                <option value="C Plus">C+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="B Plus">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="A Plus">A+</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="boosting-rankConverttoImg-box">
                                        <img src="/assets/icons/CaretCircleDoubleRight.png" alt="">
                                    </div>

                                    <div class="boosting-option-inner-container">

                                        <div class="boosting-option-img-box">
                                            <img src="/assets/images/rankImgs/RankIMG1.png" id="rankboostimagerequired" alt="">
                                        </div>
                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="desired_level" id="select" class="rankboostrequired" onchange="updateRankBoostPriceRequired()">
                                                <option value="D-"><span>D-</span></option>
                                                <option value="D">D</option>
                                                <option value="D Plus">D+</option>
                                                <option value="C-">C-</option>
                                                <option value="C">C</option>
                                                <option value="C Plus">C+</option>
                                                <option value="B-">B-</option>
                                                <option value="B">B</option>
                                                <option value="B Plus">B+</option>
                                                <option value="A-">A-</option>
                                                <option value="A">A</option>
                                                <option value="A Plus">A+</option>
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
                                            <input type="checkbox" name="solo_play" id="CS2RankBoostcheckbox1" onclick="updateRankBoostPriceRequired()">
                                            +1 Extra Win
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" name="priority_order" id="CS2RankBoostcheckbox2" onclick="updateRankBoostPriceRequired()">
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
                    <form action="/esea/checkout" method="post">
                        @csrf
                        
                            <input type="text" value="ESEA Win Boost" name="boost_type" style="display: none;" />
                            
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">

                                        <div class="boosting-option-img-box">
                                            <img src="/assets/images/rankImgs/RankIMG1.png" id="placementcurrentimage" alt="">
                                        </div>
                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="current_level" id="select" class="placementcurrent" onchange="updateplacementImage()">
                                                        <option value="D-"><span>D-</span></option>
                                                        <option value="D">D</option>
                                                        <option value="D Plus">D+</option>
                                                        <option value="C-">C-</option>
                                                        <option value="C">C</option>
                                                        <option value="C Plus">C+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="B">B</option>
                                                        <option value="B Plus">B+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="A">A</option>
                                                        <option value="A Plus">A+</option>
                                                    </select>
                                        </div>



                                    </div>

                                    <div class="counter-box">
                                        <label for="counter2">Number of Wins</label>
                                        <div class="counter">
                                            <button type="button" class="minus" onclick="updatetab1minus();"><img
                                                    src="/assets/icons/MinusCircle.png" alt=""></button>
                                            <input name="desired_level" type="number" class="placementrange value" id="counter1" value="1" min="1" max="10" onchange="updateplacement();">
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

        <x-whyus></x-whyus>

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
        function updateplacementImage(){
            var selectedOption = document.querySelector(".placementcurrent").value;
                // Rank Dropdown Img Change
            var rankImage = document.getElementById("placementcurrentimage");
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
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
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
            
        }

        function updateRankBoostPriceRequired(){
            var selectedOption = document.querySelector(".rankboostrequired").value;
            var prices = {
                "D-": 10.00,
                "D": 15.00,
                "D Plus": 20.00,
                "C-": 25.00,
                "C": 30.00,
                "C Plus": 35.00,
                "B-": 40.00,
                "B": 45.00,
                "B Plus": 50.00,
                "A-": 55.00,
                "A": 60.00,
                "A Plus": 65.00,
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
            rankImage.src = `/ranks/esea/${selectedOption}.png`;
            
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