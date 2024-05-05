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
                    <form action="/coaching/checkout" method="post">
                        @csrf
                            <input type="text" value="Textual Review" name="boost_type" style="display: none;" />
                        
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">
                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="ingame_role" id="select" onchange="updateSelected(this)">
                                                <option value="RankIMG1">Universal Role</option>
                                                <option value="RankIMG1">Entry Fragger</option>
                                                <option value="RankIMG1">Support</option>
                                                <option value="RankIMG1">In-game Leader</option>
                                                <option value="RankIMG1">Lurker</option>
                                                <option value="RankIMG1">AWPer</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="counter-box">
                                        <label for="counter1">Number of Reviews</label>
                                        <div class="counter">
                                            <button type="button" class="minus" data-counter="counter1"><img
                                                    src="/assets/icons/MinusCircle.png" alt=""></button>
                                            <input type="number" name="no_of_reviews" class="updatecounter1 value" id="counter1" value="1" onchange="updatePrice();">
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
                    </form>
                </div>

                <div id="tab2" class="boostingTab">
                    <form action="/coaching/checkout" method="post">
                        @csrf
                            <input type="text" value="Call the Coach" name="boost_type" style="display: none;" />
                        
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">

                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="ingame_role" id="select" onchange="updateSelected(this)">
                                                <option value="RankIMG1">Universal Role</option>
                                                <option value="RankIMG1">Entry Fragger</option>
                                                <option value="RankIMG1">Support</option>
                                                <option value="RankIMG1">In-game Leader</option>
                                                <option value="RankIMG1">Lurker</option>
                                                <option value="RankIMG1">AWPer</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="counter-box">
                                        <label for="counter1">Number of Reviews</label>
                                        <div class="counter">
                                            <button type="button" class="minus" data-counter="counter1"><img
                                                    src="/assets/icons/MinusCircle.png" alt=""></button>
                                            <input type="number" name="no_of_reviews" class="DemoCoachmyRange value" id="counter1" value="1" onchange="updateCoachDemoPrice();">
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

                                        <label style="display:none;">
                                            <input type="checkbox">
                                            +1 Extra Win
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="DemoCoachingcheckbox2" onchange="updateCoachDemoPrice()" name="priority_order">
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
                                        <span>Final Price <h3 id="DemoCoachpriceTag">$56</h3></span>
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
                    </form>
                </div>

                <div id="tab3" class="boostingTab">
                    <form action="/coaching/checkout" method="post">
                        @csrf
                            <input type="text" value="Demo Review" name="boost_type" style="display: none;" />
                        
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">

                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="ingame_role" id="select" onchange="updateSelected(this)">
                                                <option value="RankIMG1">Universal Role</option>
                                                <option value="RankIMG1">Entry Fragger</option>
                                                <option value="RankIMG1">Support</option>
                                                <option value="RankIMG1">In-game Leader</option>
                                                <option value="RankIMG1">Lurker</option>
                                                <option value="RankIMG1">AWPer</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="counter-box">
                                        <label for="counter1">Number of Reviews</label>
                                        <div class="counter">
                                            <button type="button" class="minus" data-counter="counter1"><img
                                                    src="/assets/icons/MinusCircle.png" alt=""></button>
                                            <input type="number" name="no_of_reviews" class="CoachmyRange value" id="counter1" value="1" onchange="updateCoachPrice();">
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

                                        <label style="display:none;">
                                            <input type="checkbox">
                                            +1 Extra Win
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="Coachingcheckbox2" onchange="updateCoachPrice()" name="priority_order">
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
                                        <span>Final Price <h3 id="CoachpriceTag">$56</h3></span>
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
                    </form>
                </div>

                <div id="tab4" class="boostingTab">
                    <form action="/coaching/checkout" method="post">
                        @csrf
                            <input type="text" value="Team Demo Review" name="boost_type" style="display: none;" />
                        
                            <div class="boostingTabContent">

                                <div class="boosting-option-container">

                                    <div class="boosting-option-inner-container">

                                        <div class="custom-select">
                                            <label for="select">Label</label>
                                            <select name="ingame_role" id="select" onchange="updateSelected(this)">
                                                <option value="RankIMG1">Universal Role</option>
                                                <option value="RankIMG1">Entry Fragger</option>
                                                <option value="RankIMG1">Support</option>
                                                <option value="RankIMG1">In-game Leader</option>
                                                <option value="RankIMG1">Lurker</option>
                                                <option value="RankIMG1">AWPer</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="counter-box">
                                        <label for="counter1">Number of Reviews</label>
                                        <div class="counter">
                                            <button type="button" class="minus" data-counter="counter1"><img
                                                    src="/assets/icons/MinusCircle.png" alt=""></button>
                                            <input type="number" name="no_of_reviews" class="TeamCoachmyRange value" id="counter1" value="1" onchange="updateTeamCoachPrice();">
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

                                        <label style="display:none;">
                                            <input type="checkbox">
                                            +1 Extra Win
                                            <span>+20%</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="TeamCoachingcheckbox2" onchange="updateTeamCoachPrice()" name="priority_order">
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
                                        <span>Final Price <h3 id="TeamCoachpriceTag">$56</h3></span>
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
        
        function updatePrice(){
            var reviews = document.querySelector('.updatecounter1').value;
            
            var additionalAmount = 0;

            if (document.getElementById("checkbox2").checked) {
                additionalAmount += 0.20;
            }

            var totalAmount = (reviews * 20) * (1 + additionalAmount);
            
            document.getElementById("priceTag").innerText = "$" + totalAmount.toFixed(2);
            
        }

        function updateCoachDemoPrice(){
                var reviews = document.querySelector('.DemoCoachmyRange').value;
                
                var additionalAmount = 0;

                if (document.getElementById("DemoCoachingcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                var totalAmount = (reviews * 20) * (1 + additionalAmount);
                
                document.getElementById("DemoCoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
        }

        function updateCoachPrice(){
                var reviews = document.querySelector('.CoachmyRange').value;
                
                var additionalAmount = 0;

                if (document.getElementById("Coachingcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                var totalAmount = (reviews * 20) * (1 + additionalAmount);
                
                document.getElementById("CoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
   
        }

        function updateTeamCoachPrice(){
                var reviews = document.querySelector('.TeamCoachmyRange').value;
                
                var additionalAmount = 0;

                if (document.getElementById("TeamCoachingcheckbox2").checked) {
                    additionalAmount += 0.20;
                }

                var totalAmount = (reviews * 20) * (1 + additionalAmount);
                
                document.getElementById("TeamCoachpriceTag").innerText = "$" + totalAmount.toFixed(2);
            
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