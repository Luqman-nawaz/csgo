@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="frequentlySection-container">
            <div class="frequentlySection-inner-container">
                <h5>FREQUENTLY ASKED QUESTIONS</h5>
                <h2>Feel free to explore queries and find answers! </h2>
            </div>

            <!-- Tabs -->
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
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">How does MyBoost.gg work?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                MyBoost.gg offers you all types of CS2 account boosting services, for CS2 matchmaking, FaceIt, ESEA and Esportal. We level up your account to where you believe it should be.
        
                                For boosting your CS2 account, we use our professional players. We do NOT use cheats or bots. Your accounts are completely safe.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="2">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">Is it safe for me to boost my account?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Yes, your account is in safe hands. Our professional players make sure to rank your account
                                by playing. NO cheats/bots are used.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="3">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">What payment methods does MyBoost.gg support?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                MyBoost currently accepts Mastercard/Visa/Crypto payments.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="4">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">Why choose our CS2 Boosting Services?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Our boosters are experts who never resort to cheats or any other unfair advantages. 
                     All our orders are handled by exceptional players who were semi-professional
                     gamers before joining our boosting team. 
                     Our service is 100% safe, and there's no risk of getting banned. 
                     Each of our players works under a contract and undergoes rigorous testing to earn our trust. 
                     Rest assured that your Steam account and inventory are in safe hands.
                            </div>
                        </div>
                    </div>
                </div>

                <div id="TRUST&SAFETY" class="tabcontent">
                    <h3>TRUST&SAFETY</h3>
                    <p>TRUST&SAFETY is the capital of France.</p>
                </div>

                <div id="SERVICES" class="tabcontent">
                    <h3>SERVICES</h3>
                    <p>SERVICES is the capital of Japan.</p>
                </div>

                <div id="BILLING" class="tabcontent">
                    <h3>BILLING</h3>
                    <p>BILLING is the capital of Japan.</p>
                </div>

            </div>
            <!-- tabs -->

            <div class="frequentlyStill-inner-container">
                <div class="">
                    <h5>Still Have Questions?</h5>
                    <p>Can’t find the answer you’re looking for/ Please chat to our friendly team.</p>
                </div>

                <button class="themebtn-bg">Get In Touch</button>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="/vendor/js/tabs.js"></script>
    @endpush
