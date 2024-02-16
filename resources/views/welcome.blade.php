@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection
    @section('content')
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->
        <!-- csgo-HeroSection Start -->
        <div class="csgo-heroSection-main-conatiner">
            <div class="csgo-heroSection-text-container">
                <h1><span>Counter Strike 2</span><br> Boosting Service!</h1>
                <p>MyBoost.gg is a fast, affordable and safe CS2 boosting service to help you reach Counter-Strike 2 leaderboards through vetted Radiant players across all regions. We work with the most skilled CS2 boosters to acheive your desired rank effortlessly. Here, you will find a range of services handled by our skilled players such as Rank boost, Wins, ESEA Boosting, FACEIT Boosting, CS2 Placement Matches, ESPORTAL Boosting & so much more. Our team consists of elite players that have delivered thousands of orders, so the safety of your account is guarenteed.</p>
            </div>
            <div class="csgo-heroSection-img-container">
                <img src="/assets/img/hero.png" alt="">
            </div>
            <img src="/assets/img/right-hero-angle.png" alt="" class="hero-angle-corner-img">
        </div>
        <!-- csgo-HeroSection End -->
        <!-- csgo-HomeBoost Start -->
        <!-- csgo-HomeBoost Start -->
        <div class="csgo-HomeBoost-conatianer section">
            <img src="/assets/img/homeBoost-bg.jpg" alt="">
            <!--  -->
            <div class="csgo-HomeBoost-tabs-conatiner">
                <div class="csgo-boost-tabs">
                    <div class="svg-shape csgo-boost-tab active" onclick="openTab(0)"><span>CS2
                            Boost</span>
                    </div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(1)"><span>Esportal Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(2)"><span>Faceit Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(3)"><span>ESEA Boost</span></div>
                </div>

                <div class="csgo-boost-content">
                    <div class="csgo-boost-tab-content active" id="csgo-boost-tab1">
                        <div class="csgo-boost-para">
                            <h2>CS2 Boosting</h2>
                            <h5>We specialize in enhancing your CS2 rating through our Boosters. 
                                CS2 Rank Boost or CS2 Premier Rating Boost are the same boosting service.
                                Our team has CS2 boost professionals who are committed to ensuring 
                                your success. 
                            </h5>
                                <p style="display: none;">CS2 Rating Boost is designed to help you achieve a higher rating 
                                in Counter Strike 2 with the assistance of an experienced player. 
                                This service is commonly offered in Solo Boost mode, where a 
                                professional player logs into your account to participate in 
                                competitive matches, or in Duo/Lobby Boost mode, allowing you to 
                                team up with boosters in the same lobby.
                                </p>
                            <a href="/csgoboost"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/bg1.png" class="homeboost-hero" alt="">
                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-para">
                            <h2>Esportal Boosting</h2>
                            <h5>Esportal Boosting is an elite account boosting service provided by MyBoost.gg without using any cheats and with a 100% accurate & safe method. Boost your Esportal account now and enjoy the best experience we have to offer.</h5>
                                <a href="/esportal"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/image1.png" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab3">
                        <div class="csgo-boost-para">
                            <h2>Faceit Boosting</h2>
                            <h5>FaceIt boosting is a service to increase your FaceIT level. We boost through the most elite boosters in the FaceIt arena. Your account is 100% safe & secure and is in capable hands. Place your order now & enjoy the account with the actual rank that you deserve.</h5>
                                <a href="/faceit"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/image.png" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab4">
                        <div class="csgo-boost-para">
                            <h2>ESEA Boosting</h2>
                            <h5>Check out our service to boost your ESEA account. The service is provided through the most elite Counter Strike players. Place the order now, have your account boosted & play with skilled players that actually match your rank & skill.</h5>
                            <a href="/esea"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/image3.png" alt="">

                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <!-- csgo-HomeBoost End -->
        <!-- csgo-HomeBoost Start -->
        <div class="csgo-HomeFeatures-container">
            <div class="csgo-HomeFeatures-innerSection">
                <div class="csgo-HomeFeatures-box">
                    <h3>Why you should trust us?</h3>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>MyBoost.gg offers a Premium CS2 account boosting service, 
                            ensuring quick and safe boost to your desired rank with our team of skilled professionals.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>No Cheats</h4>
                        <p>At MyBoost.gg, all the boosting services uphold the highest standards,
                            ensuring your progress is achieved through expertise without any use of cheats.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>All your data is safe with us. Boost your Counter Strike 2 accounts without having to worry about
                            anything.
                        </p>
                    </div>
                </div>
            </div>
            <div class="csgo-HomeFeatures-innerSection">
                <div class="csgo-HomeFeatures-box">
                    <!-- <h3>Why you should trust us?</h3> -->
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>Account Safety</h4>
                        <p>At MyBoost.gg we have the most safe boosting procedures & the most elite players, with our
                            protocols in place, your account safety is guaranteed.
                        </p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Professional Boosters</h4>
                        <p>All our boosters are semi-professional veterans of Counter-Strike, they are all highly trained
                             and experienced in their craft.
                        </p>
                    </div>
                </div>
                
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Quick Delivery</h4>
                        <p>In MyBoost.gg we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- csgo-HomeBoost End -->
        <x-howtobuy></x-howtobuy>
        {{-- <!-- csgo-HomeBoosting Services Start -->
        <div class="csgo-HomeBoosting-services-container">
            <div class="csgo-HomeBoosting-services-innerSection">
                <h1>How to Buy <br> Boosting Services?</h1>
                <div class="csgo-HomeBoosting-services-line-container">

                    <div class="csgo-HomeBoosting-services-section-conatiner-one">
                        <div class="csgo-HomeBoosting-services-section">
                            <div class="csgo-HomeBoosting-services-box">
                                <h3>Select Boosting & Place Order</h3>
                                <p>Select details of your boost. 
                                    (Current Rank, Desired Rank, Your Level/Elo, Number of wins) then click the Buy button.
                                </p>
                            </div>
                        </div>
                        <div class="csgo-HomeBoosting-services-section">
                            <div class="csgo-HomeBoosting-services-box">
                                <h3>Receive Boost</h3>
                                <p>Receive your boosted account, that is boosted by professionals in a safe & elite environment, and enjoy the game!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="csgo-HomeBoosting-services-line">
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                    </div>
                    <!--  -->

                    <div class="csgo-HomeBoosting-services-section">
                        <div class="csgo-HomeBoosting-services-box">
                            <h3>Complete Payment</h3>
                            <p>Complete the payment for the order via your preffered methods. Once paid, watch the boosting magic happen!
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- csgo-HomeBoosting Services End --> --}}


        <div class="csgo-HomeWhyChoose-services-container">
            <img src="/assets/img/Rectangle 11.png" alt="" class="HomeWhyChoose-img">
            <div class="csgo-HomeWhyChoose-services-img-section">
                <img src="/assets/img/Daco_4402547.png" alt="">
            </div>
            <div class="csgo-HomeWhyChoose-services-detail-section">
                <h3>Why choose our CS2 Boosting Services?</h3>
                <p>Our boosters are experts who never resort to cheats or any other unfair advantages. 
                     All our orders are handled by exceptional players who were semi-professional
                     gamers before joining our boosting team. 
                     Our service is 100% safe, and there's no risk of getting banned. 
                     Each of our players works under a contract and undergoes rigorous testing to earn our trust. 
                     Rest assured that your Steam account and inventory are in safe hands.</p>
                <div class="csgo-HomeWhyChoose-happyCustomers-section">
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <!-- <h5>20k</h5> -->
                            <h5 id="happyCustomersCount">0</h5>
                            <h6>HAPPY CUSTOMERS</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <!-- <h5>8</h5> -->
                            <h5 id="boostingYearsCount">0</h5>
                            <h6>YEAS IN BOOSTING</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <!-- <h5>30k</h5> -->
                            <h5 id="ordersCompletedCount">0<span></h5>
                            <h6>ORDERS COMPLETED</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- csgo-whychoose Services Start -->
        <div class="csgo-HomeReview-container">
            <h3>Real Customer Reviews</h3>
            <p>All the reviews about our boosting services are from our buyers. Check some of them,
                they speak for themselves!</p>

            <div class="csgo-HomeReview-carousel-container">
                <div class="csgo-HomeReview-carousel">
                    <div class="csgo-HomeReview-cards">

                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="csgo-HomeReview-arrow-buttons">
                    <button class="csgo-HomeReview-left-arrow"><img src="/assets/icons/right-arrow.svg"
                            alt=""></button>
                    <button class="csgo-HomeReview-right-arrow"><img src="/assets/icons/left-arrow.svg"
                            alt=""></button>
                </div>
            </div>


        </div>
        <!-- csgo-whychoose Services End -->

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
                <button class="csgo-btn SUBSCRIBE-btn">SUBSCRIBE</button>
            </div>
        </div>
        <!-- csgo-Subscribe Section End -->

        <!-- csgo-Footer Section Start -->
       <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    @endsection

    @push('js')
        <script>
            function animateCount(elementId, targetValue, suffix = '') {
                let currentCount = 0;
                const interval = setInterval(function () {
                    currentCount += 100;
                    if (currentCount <= targetValue) {
                        document.getElementById(elementId).textContent = (currentCount / 100) + suffix;
                    } else {
                        document.getElementById(elementId).textContent = targetValue / 100 + suffix;
                        clearInterval(interval);
                    }
                }, 100); // You can adjust the interval duration as needed
            }

            // Call the animation function for each counter with 'k' suffix for thousands
            animateCount('happyCustomersCount', 2000, 'k');
            animateCount('boostingYearsCount', 800, ''); // No suffix for this counter
            animateCount('ordersCompletedCount', 3000, 'k');
        </script>
        <!-- Script -->
        <script src="/vendor/js/app.js"></script>
        <script src="/vendor/js/carousel.js"></script>
    @endpush