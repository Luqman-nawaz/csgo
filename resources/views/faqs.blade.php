@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
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
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron1"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent1"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="2">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent2', 'chevron2')">
                                <span class="faq-1-span">Why should I visit the FAQ page?</span>
                                <img id="chevron2"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent2"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="3">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent3', 'chevron3')">
                                <span class="faq-1-span">How do I find answers to common questions?</span>
                                <img id="chevron3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent3"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="4">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent4', 'chevron4')">
                                <span class="faq-1-span">What’s the difference between an FAQ page and an About Us
                                    page?</span>
                                <img id="chevron3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent4"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>
                    </div>
                </div>

                <div id="TRUST&SAFETY" class="tabcontent">
                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="5">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent5', 'chevron5')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent5"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="6">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent6', 'chevron6')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron6"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent6"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="7">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent7', 'chevron7')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent7"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="8">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent8', 'chevron8')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron8"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent8"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>
                </div>

                <div id="SERVICES" class="tabcontent">
                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="9">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent9', 'chevron9')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron9"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent9"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="10">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent10', 'chevron10')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron10"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent10"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="11">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent11', 'chevron11')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent11"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="12">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent12', 'chevron12')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron12"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent12"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>
                </div>

                <div id="BILLING" class="tabcontent">
                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="13">
                            <div class="flex cursor-pointer items-center justify-between"
                                onclick="toggleFAQ('faqContent13', 'chevron13')">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img id="chevron13"
                                    src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div id="faqContent13"
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                    </div>
                        
                </div>

            </div>

            <div class="frequentlyStill-inner-container">
                <div class="">
                    <h5>Still Have Questions?</h5>
                    <p>Can’t find the answer you’re looking for/ Please chat to our friendly team.</p>
                </div>

                <a href="/contact"><button class="themebtn-bg">Get In Touch</button></a>
            </div>
        </div>

        <x-boostcta></x-boostcta>

        <x-footer></x-footer>

    </div>
    @endsection

    @push('js')
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
