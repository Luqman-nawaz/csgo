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
                                                <button type="button" class="minus" onclick="updatetab2minus();"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="current_level" type="number" class="placementrangecurrent value" id="counter1" value="1" onchange="updateRankBoostPriceRequiredCurrent()" min="1" max="36599" required>
                                                <button type="button" class="plus" onclick="updatetab2plus();"><img
                                                        src="/assets/icons/PlusCircle.png" alt=""></button>
                                            </div>
                                        </div>

                                        <div class="counter-box">
                                            <label for="counter1">Required Premiere Rank</label>
                                            <div class="counter">
                                                <button type="button" class="minus" onclick="updatetab3minus();"><img
                                                        src="/assets/icons/MinusCircle.png" alt=""></button>
                                                <input name="desired_level" type="number" class="placementrangerequired value" id="counter1" value="1" onchange="updateRankBoostPriceRequired()" min="1" max="45799" required>
                                                <button type="button" class="plus" onclick="updatetab3plus();"><img
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
                                                <span>+50%</span>
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
                                                <img src="/ranks/premier/Unrated.png" id="placementcurrentimage" alt="">
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
                                            <span>+50%</span>
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

        function updatetab1minus(){
            var reviews = document.querySelector('.placementrange').value;
            if(reviews <= 1){
                return;
            }
            let newvalue = +reviews - 1;
            document.querySelector('.placementrange').value = newvalue;

            updateplacement();
        }

        function updatetab1plus(){
            var reviews = document.querySelector('.placementrange').value;
            if(reviews <= 9){
                let newvalue = +reviews + 1;
                document.querySelector('.placementrange').value = newvalue;
            }

            updateplacement();
        }

        function updateplacement(){
                var reviews = document.querySelector('.placementrange').value;

                var rank = document.querySelector('.placementcurrent').value;
                
                var prices = @json(App\Models\orderamounts::where('boost_type', 'Premier Win Boost')->get());

                for(var i = 0; i < prices.length; i++)
                {
                    if(prices[i].current_level == rank && prices[i].desired_level == reviews)
                    {
                        var final_price = prices[i].amount;
                    }
                }

                if(final_price == undefined){
                    document.getElementById("placementprice").innerText = "--";
                    return;
                }

                if(reviews > 10){
                    reviews = 10;
                    document.querySelector('.placementrange').value = 10;
                }
                
                var additionalAmount = 0;

                if (document.getElementById("placementcheckbox1").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("placementcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                if (document.getElementById("placementcheckbox3").checked) {
                    additionalAmount += 0.50;
                }

                var totalAmount = final_price * (1 + additionalAmount);
                document.getElementById("placementprice").innerText = "€" + totalAmount.toFixed(2);
        }

        //rank boost

        function updateplacementImage(){
                var selectedOption = document.querySelector('.placementcurrent').value;
                // Rank Dropdown Img Change
                var rankImage = document.getElementById("placementcurrentimage");
                rankImage.src = `/ranks/premier/${selectedOption}.png`;
                updateplacement();
        }
                
        function updatetab2minus(){
            var reviews = document.querySelector('.placementrangecurrent').value;
            let newvalue = +reviews - 100;
            document.querySelector('.placementrangecurrent').value = newvalue;

            updateRankBoostPriceRequired();
        }

        function updatetab2plus(){
            var reviews = document.querySelector('.placementrangecurrent').value;
            let newvalue = +reviews + 100;
            document.querySelector('.placementrangecurrent').value = newvalue;

            updateRankBoostPriceRequired();
        }

        function updatetab3minus(){
            var reviews = document.querySelector('.placementrangerequired').value;
            let newvalue = +reviews - 100;
            document.querySelector('.placementrangerequired').value = newvalue;

            updateRankBoostPriceRequired();
        }

        function updatetab3plus(){
            var reviews = document.querySelector('.placementrangerequired').value;
            let newvalue = +reviews + 100;
            document.querySelector('.placementrangerequired').value = newvalue;

            updateRankBoostPriceRequired();
        }

        function updateRankBoostPriceRequiredCurrent(){
            var currentSelectedOption = document.querySelector(".placementrangecurrent").value;
            var selectedOption = document.querySelector(".placementrangerequired").value;
            
            if(currentSelectedOption > 36599){
                document.querySelector(".placementrangecurrent").value = 36599;
            }

            if(currentSelectedOption > selectedOption){
                document.getElementById("rankboostprice").innerText = "--";
                return;
            }    

            updateRankBoostPriceRequired();        
        }

        function updateRankBoostPriceRequired(){
            var selectedOption = document.querySelector(".placementrangerequired").value;
            var currentSelectedOption = document.querySelector(".placementrangecurrent").value;

            if(currentSelectedOption > selectedOption){
                document.getElementById("rankboostprice").innerText = "--";
                return;
            }
            
            if(selectedOption > 45799){
                document.querySelector(".placementrangerequired").value = 45799;
                selectedOption = 45799;
            }

            var goal = selectedOption - currentSelectedOption;

            var amount = goal * 0.011;

            const prices = {
                "0": 1.00,
                "1000": 1.00,
                "2000": 1.00,
                "3000": 1.00,
                "4000": 1.00,
                "5000": 2.00,
                "6000": 2.00,
                "7000": 2.00,
                "8000": 2.00,
                "9000": 2.00,
                "10000": 2.73,
                "11000": 2.73,
                "12000": 2.73,
                "13000": 2.73,
                "14000": 2.73,
                "15000": 3.28,
                "16000": 3.28,
                "17000": 3.28,
                "18000": 3.28,
                "19000": 3.28,
                "20000": 4.56,
                "21000": 4.56,
                "22000": 4.56,
                "23000": 4.56,
                "24000": 4.56,
                "25000": 5.84,
                "26000": 5.84,
                "27000": 5.84,
                "28000": 5.84,
                "29000": 5.84,
                "30000": 10.57,
                "31000": 10.57,
                "32000": 10.57,
                "33000": 10.57,
                "34000": 10.57,
                "35000": 10.57,
                "36000": 10.57,
                "37000": 10.57,
                "38000": 10.57,
                "39000": 10.57,
                "40000": 10.57,
                "41000": 10.57,
                "42000": 10.57,
                "43000": 10.57,
                "44000": 10.57,
                "45000": 10.57,
                "46000": 10.57,
            };

            newgoal = Math.round(selectedOption/1000)*1000;

            price = prices[newgoal];
            
            var additionalAmount = 0;

            if (document.getElementById("CS2RankBoostcheckbox1").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("CS2RankBoostcheckbox2").checked) {
                additionalAmount += 0.20;
            }

            if (document.getElementById("CS2RankBoostcheckbox3").checked) {
                additionalAmount += 0.50;
            }

            var totalPrice = amount * price * (1 + additionalAmount);

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
@endpush