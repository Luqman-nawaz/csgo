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
                            <div id="faqContent10" style="font-family:Karla;"
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
        €(document).ready(function () {
            €('.center').slick({
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