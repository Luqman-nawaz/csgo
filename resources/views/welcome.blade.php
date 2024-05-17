@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <style>
            .invisible {
                display: none;
            }

            .visible {
                display: block;
            }

            .rotate-180 {
                transform: rotate(180deg);
            }
        </style>
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSection-container">
            <h1 style="letter-spacing:1px;">Raise your rank up to Global Elite with our help.</h1>
            <p>If you are bored of playing with trolls and unskilled players - purchase boost now and our professional
                players will help you with winning matches.</p>
            <div class="heroPills-container flex justify-center items-center gap-5" style="margin-bottom:10%;">
                <span><a href="/csboost">CS2 BOOST</span></a>
                <span><a href="/faceit">FACEIT BOOST</span></a>
                <span><a href="/esea">ESEA BOOST</span></a>
                <span><a href="/esportal">ESPORTAL BOOST</span></a>
                <span><a href="/coaching">COACHING</span></a>
            </div>
        </div>

        <div class="specialOffer-container flex justify-between items-center">
            <div class="specialOffer-left-container">
                <h5>FEATURES</h5>
                <h2>What’s special we offer</h2>
                <div class="specialOffer-box">
                    <span>
                        <img src="/assets/icons/SketchLogo.png" alt="">
                    </span>
                    <div class="specialOffer-txt-box">
                        <h6>Victory Awaits</h6>
                        <p>Tired of losing streaks? Fear not! Our boosters guarantee an improved win rate. Whether it’s
                            competitive matches or ranked games, we’ll turn the tide in your favour. Get ready to
                            celebrate those sweet victories!</p>
                    </div>
                </div>
                <br />
                <br />
                <div class="specialOffer-box">
                    <span>
                        <img src="/assets/icons/Shield.png" alt="">
                    </span>
                    <div class="specialOffer-txt-box">
                        <h6>Your Privacy Matters</h6>
                        <p>Worried about account security? We’ve got you covered. Our boosters operate with the utmost
                            discretion, using VPNs and offline mode to ensure your account remains anonymous. </p>
                    </div>
                </div>
                <br />
                <br />
                <div class="specialOffer-box">
                    <span>
                        <img src="/assets/icons/Headset.png" alt="">
                    </span>
                    <div class="specialOffer-txt-box">
                        <h6>We’re Here When You Need Us</h6>
                        <p>No bots, no automated responses—just real humans ready to assist you. Have questions,
                            concerns, or need help? Reach out to our friendly support team via Discord or live chat.
                        </p>
                    </div>
                </div>
                <br />
                <br />
                <div class="specialOffer-box">
                    <span>
                        <img src="/assets/icons/LockKey.png" alt="">
                    </span>
                    <div class="specialOffer-txt-box">
                        <h6>Your Account, Our Priority</h6>
                        <p>We take security seriously. When you choose MyBoost, rest assured that your account is in
                            safe hands. Our boosters follow strict protocols to protect your login credentials, personal
                            information, and in-game assets. </p>
                    </div>
                </div>
            </div>
            <div class="specialOffer-right-container">
                <img src="/assets/images/offerImg.png" class="m-auto" alt="">
            </div>
        </div>

        <x-boostingservices></x-boostingservices>

        <div class="aboutUsSection-container">
            <div class="aboutUsSection-inner-container">
                <h5>ABOUT US</h5>
                <h2>Who we are</h2>
                <p>Welcome to MyBoost—where gaming excellence meets passion! Our journey began with a simple goal: to
                    elevate the gaming experience for players worldwide. At MyBoost, we’re more than just a service;
                    we’re a
                    community of dedicated gamers who understand the thrill of competition, the joy of victory, and the
                    frustration of defeat.</p>
                <p>Our team comprises seasoned players, former esports professionals, and top-ranked streamers. They’re
                    not
                    just boosters; they’re your allies in the virtual battlefield. We safeguard your accounts like our
                    own,
                    using encrypted communication channels, VPNs, and strict protocols. Your privacy and security remain
                    our
                    priority.</p>
                <p>No cookie-cutter approaches here! Whether it’s ESEA, Faceit, or coaching services, we customize our
                    offerings to fit your unique gaming needs. And when you need assistance, our real humans are
                    available
                    24/7 via Discord or live chat.</p>
            </div>
            <img src="/assets/images/rocket.png" alt="">
        </div>

        <div class="whyUsSection-container">
            <h3>Why Us?</h3>
            <div class="whyUsSection-inner-container">
                <div class="whyUsSection-box">
                    <h5>Community Engagement and Events</h5>
                    <p>MyBoost isn’t just about boosting accounts; it’s about building a community. Join our Discord
                        server for exclusive events, tournaments, and giveaways. Connect with fellow gamers, share tips,
                        and celebrate victories together.</p>
                </div>
                <div class="whyUsSection-box">
                    <h5>Tailored Strategies for Every Game</h5>
                    <p>We don’t believe in one-size-fits-all solutions. Our boosters analyse each game’s maps, and
                        mechanics to create personalised strategies. Whether it’s capturing objectives, or mastering
                        rotations, we’ve got you covered.</p>
                </div>
                <div class="whyUsSection-box">
                    <h5>Transparency and Progress Tracking</h5>
                    <p>Wondering how your boost is progressing? We provide real-time updates. Track your rank gains, win
                        streaks, and achievements. Transparency is our policy—we want you to be part of the journey.</p>
                </div>
                <div class="whyUsSection-box">
                    <h5>Referral Rewards Program</h5>
                    <p>Spread the word about MyBoost! Refer friends, streamers, or fellow gamers, and earn rewards. It’s
                        a win-win—you help them level up, and we thank you with discounts and exclusive perks.</p>
                </div>
            </div>
        </div>

        <div class="ourstatSection-container">
            <h5>OUR STATS</h5>
            <h2>Because numbers Speak</h2>
            <div class="ourstatSection-inner-container">
                <div class="ourstatSection-box">
                    <h2>2+ Years</h2>
                    <p>OF SERVICE</p>
                </div>
                <div class="ourstatSection-box">
                    <h2>5000+</h2>
                    <p>HAPPY CLIENTS</p>
                </div>
                <div class="ourstatSection-box">
                    <h2>99%</h2>
                    <p>ORDERS COMPLETION</p>
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

        <div class="testimonialsSection-container">
            <div class="testimonialsSection-inner-container">
                <h5>TESTIMONIALS</h5>
                <h2>Let’s hear from happy clients</h2>
                <div class="center">
                     <div class="Testimonials-card-box">
                        <h5>The service was fast and very convenient. The boosters were great in person & very professional.</h5>
                        <br>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/Avatar.png" alt="">
                            <h6>Wn***ak</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>Good site. The boosters were great, had a blast being in game with them. Highly Recommended!</h5>
                        <br>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/avatar2.svg" alt="">
                            <h6>Si***er</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>After experiencing everything for myself, I use MyBoost exclusively. Great service & staff. Recommended.</h5>
                        <br>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/avatar1.png" alt="">
                            <h6>G*r03</h6>
                        </span>
                    </div>
                </div>
            </div>



        </div>

        <div class="frequentlySection-container">
            <div class="frequentlySection-inner-container">
                <h5>FREQUENTLY ASKED QUESTIONS</h5>
                <h2>Feel free to explore queries and find answers! </h2>
            </div>

            <div class="frequeantly-tabs-conatiner">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'general')" id="defaultOpen">GENERAL</button>
                    <button class="tablinks" onclick="openCity(event, 'TRUST&SAFETY')">TRUST & SAFETY</button>
                    <button class="tablinks" onclick="openCity(event, 'SERVICES')">SERVICES</button>
                    <button class="tablinks" onclick="openCity(event, 'BILLING')">BILLING</button>
                </div>

                <div id="general" class="tabcontent">
                    <div class="m-2 space-y-2">
                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="1">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent1', 'chevron1')">
                                <span class="faq-1-span">What is MyBoost.gg?</span>
                                <img id="chevron1"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent1"
                                style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Myboost.gg is a professional boosting & coaching service for Counter-Strike 2. We help players improve their rankings, achieve specific in-game goals, 
                                and enhance their overall gaming experience through expert assistance from highly skilled players.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="2">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent2', 'chevron2')">
                                <span class="faq-1-span">How does the boosting process work?</span>
                                <img id="chevron2"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent2"
                                style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Once you place an order, one of our experienced boosters will log into your account or play alongside you to achieve the desired rank or goal. We offer various types of boosts, 
                                including rank boosts, win boosts, and more. You can track the progress in real-time through our secure platform.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="3">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent3', 'chevron3')">
                                <span class="faq-1-span">Can I play with my booster instead of giving them my account details?</span>
                                <img id="chevron3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent3"
                                style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Absolutely! We offer a "Duo Queue" option where you can play alongside one of our professional boosters. 
                                This way, you retain full control of your account while still benefiting from the expertise of our team to achieve your desired rank or goals.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="4">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent4', 'chevron4')">
                                <span class="faq-1-span">How long does a boost typically take?</span>
                                <img id="chevron3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent4"
                                style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                The duration of a boost depends on the type and extent of the service you’ve ordered. Generally, rank boosts can take a few hours to several days, depending on the starting and desired ranks.
                                Our team strives to complete all orders as quickly and efficiently as possible while maintaining high-quality service.
                            </div>
                        </div>
                    </div>
                </div>

                <div id="TRUST&SAFETY" class="tabcontent">
                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="5">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent5', 'chevron5')">
                                <span class="faq-1-span">How does MyBoost.gg ensure my account's security?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent5"
                                style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                We prioritize your account's security by using secure VPN connections and employing strict confidentiality protocols. 
                                Our boosters are thoroughly vetted professionals who follow a code of conduct to protect your account information and maintain the integrity of your gaming profile.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="6">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent6', 'chevron6')">
                                <span class="faq-1-span">Are the boosters at MyBoost.gg verified and trustworthy?</span>
                                <img id="chevron6"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent6"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Yes, all boosters at myboost.gg undergo a rigorous verification process. We ensure that they are experienced, highly skilled, 
                                and adhere to our strict privacy and security standards. Your account is in safe hands with our trusted professionals.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="7">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent7', 'chevron7')">
                                <span class="faq-1-span">Can I trust MyBoost.gg with my account credentials?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent7"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Yes, you can. We understand the importance of trust when it comes to sharing your account credentials. 
                                Our secure platform ensures that your information is handled with the utmost care and is only accessible to the assigned booster and our support team.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="8">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent8', 'chevron8')">
                                <span class="faq-1-span">What happens if my account gets banned during the boost?</span>
                                <img id="chevron8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent8"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                In the unlikely event that your account is banned due to our services, we offer a comprehensive compensation policy. 
                                We will work with you to resolve the issue, which may include a full or partial refund or additional services to compensate for any inconvenience caused.
                            </div>
                    </div>
                </div>

                <div id="SERVICES" class="tabcontent">
                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="9">
                            <div class="flex cursor-pointer items-center justify-between"
                               style="font-family:Karla;" onclick="toggleFAQ('faqContent9', 'chevron9')">
                                <span class="faq-1-span">What types of boosting services do you offer?</span>
                                <img id="chevron9"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent9"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Myboost.gg offers a variety of boosting services for CS2, Faceit, Esportal, ESEA, including rank boosting, win boosting, placement matches, and specific achievements. 
                                We also provide personalized coaching sessions to help you improve your skills and strategies.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="10">
                            <div class="flex cursor-pointer items-center justify-between"
                               style="font-family:Karla;" onclick="toggleFAQ('faqContent10', 'chevron10')">
                                <span class="faq-1-span">Can I choose my preferred booster?</span>
                                <img id="chevron10"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent10"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                While we do not guarantee specific boosters due to availability, you can request a booster based on your preferences, such as language or region. 
                                We aim to match you with the best possible booster to meet your needs.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="11">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent11', 'chevron11')">
                                <span class="faq-1-span">How do I track the progress of my boost?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent11"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                You can track the progress of your boost through our secure client area on the myboost.gg website. Here, you can see real-time updates, communicate with your booster, 
                                and review detailed reports of completed matches.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="12">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent12', 'chevron12')">
                                <span class="faq-1-span">What if I am not satisfied with the service?</span>
                                <img id="chevron12"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent12"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Customer satisfaction is our priority. If you are not satisfied with the service, please contact our support team. We offer a satisfaction guarantee and will work with you to address any issues, 
                                which may include revisiting the boost or providing a partial refund.
                            </div>
                    </div>
                </div>

                <div id="BILLING" class="tabcontent">
                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="13">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent13', 'chevron13')">
                                <span class="faq-1-span">What payment methods does MyBoost.gg accept?</span>
                                <img id="chevron13"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent13"
                               style="font-family:Karla;" class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Myboost.gg accepts a variety of secure payment methods, including major credit cards (Visa, MasterCard, American Express), PayPal, and other popular online payment systems. 
                                We ensure that all transactions are processed through secure and encrypted payment gateways to protect your financial information.
                            </div>
                    </div>
                        
                </div>

            </div>
        </div>

        <x-boostcta></x-boostcta>

        
        <x-footer></x-footer>

    </div>
    @endsection


    @push('js')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="/vendor/js/tabs.js"></script>
    <!-- <script src="app.js"></script> -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.style.left = sidebar.style.left === '0px' ? '-280px' : '0px';
        }

    </script>
    <script>
        $(document).ready(function () {
            $('.center').slick({
                centerMode: true,
                dots: true,
                centerPadding: '60px',
                slidesToShow: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });

    </script>
    <script>
        function toggleFAQ(contentId, chevronId) {
            const chevron = document.getElementById(chevronId);
            const faqContent = document.getElementById(contentId);
            const isVisible = faqContent.classList.contains('visible');

            if (isVisible) {
                faqContent.classList.remove('visible');
                faqContent.classList.add('invisible');
                chevron.classList.remove('rotate-180');
            } else {
                faqContent.classList.remove('invisible');
                faqContent.classList.add('visible');
                chevron.classList.add('rotate-180');
            }
        }
    </script>
    @endpush