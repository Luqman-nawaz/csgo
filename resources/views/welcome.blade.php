@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSection-container">
            <h1>Raise your rank up to Global Elite with our help.</h1>
            <p>If you are bored of playing with trolls and unskilled players - purchase boost now and our professional
                players will help you with winning matches.</p>
            <div class="heroPills-container flex justify-center items-center gap-5" style="margin-bottom:10%;">
                <span><a href="/csgoboost">CS2 BOOST</span></a>
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
                        <p>We take security seriously. When you choose GameBoost, rest assured that your account is in
                            safe hands. Our boosters follow strict protocols to protect your login credentials, personal
                            information, and in-game assets. </p>
                    </div>
                </div>
            </div>
            <div class="specialOffer-right-container">
                <img src="/assets/images/offerImg.png" class="m-auto" alt="">
            </div>
        </div>

        <div class="services-container">
            <h5>OUR SERVICES</h5>
            <h2>We provide boosting for</h2>

            <div class="services-card-container">
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG.png" alt="">
                    <img class="services-small-img" src="/assets/images/cs2.png" alt="">
                    <div class="services-text">
                        <h3>CS 2 Boost</h3>
                        <p>Master CS2 with our boosting services! From map control to clutch plays, our boosters enhance
                            your performance.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG2.png" alt="">
                    <img class="services-small-img" src="/assets/images/esea.png" alt="">
                    <div class="services-text">
                        <h3>ESEA Boost</h3>
                        <p>Climb the ranks in ESEA League! Our expert boosters will elevate your Elo, improve your
                            gameplay, and help you compete at a higher level.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG3.png" alt="">
                    <img class="services-small-img" src="/assets/images/esportal.png" alt="">
                    <div class="services-text">
                        <h3>ESPortal Boost</h3>
                        <p>Unlock your potential on ESportal! Whether it’s improving your K/D ratio or achieving higher
                            ranks, our boosters have you covered.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG4.png" alt="">
                    <img class="services-small-img" src="/assets/images/faceit.png" alt="">
                    <div class="services-text">
                        <h3>Faceit Boost</h3>
                        <p>Faceit glory awaits! Our boosters will skyrocket your Faceit Elo, ensuring you play alongside
                            the best.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="services-card-box">
                    <img class="services-box-img" src="/assets/images/IMG5.png" alt="">
                    <img class="services-small-img" src="/assets/images/coashing.png" alt="">
                    <div class="services-text">
                        <h3>Coaching</h3>
                        <p>Personalized coaching for gamers! Learn from seasoned pros, refine your strategies, and
                            elevate your skills.</p>
                        <button class="themebtn-bg flex items-center gap-3">
                            Boost Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M8.10702 14.5266C8.07655 14.6477 7.31484 17.5 3.12499 17.5C2.95923 17.5 2.80026 17.4341 2.68305 17.3169C2.56584 17.1997 2.49999 17.0408 2.49999 16.875C2.49999 12.6852 5.35234 11.9234 5.47343 11.893C5.63432 11.8528 5.80459 11.8781 5.94678 11.9635C6.08897 12.0488 6.19144 12.1872 6.23163 12.348C6.27183 12.5089 6.24647 12.6792 6.16112 12.8214C6.07578 12.9636 5.93745 13.066 5.77655 13.1062C5.70624 13.1258 4.02499 13.6172 3.77968 16.2203C6.3828 15.975 6.87499 14.2969 6.8953 14.2187C6.93674 14.0581 7.04032 13.9204 7.18324 13.8361C7.32616 13.7518 7.49673 13.7277 7.65741 13.7691C7.8181 13.8106 7.95574 13.9142 8.04006 14.0571C8.12437 14.2 8.14846 14.3706 8.10702 14.5312V14.5266ZM15.3726 9.26093L15 9.63359V14.1906C15.0009 14.3554 14.9691 14.5187 14.9063 14.6711C14.8435 14.8234 14.7511 14.9618 14.6344 15.0781L11.9531 17.7578C11.8375 17.8743 11.6999 17.9667 11.5484 18.0297C11.3969 18.0927 11.2344 18.1251 11.0703 18.125C10.9349 18.125 10.8003 18.1031 10.6719 18.0602C10.4513 17.9872 10.2556 17.854 10.1067 17.6756C9.95791 17.4973 9.86194 17.2808 9.82968 17.0508L9.41015 14.0437L5.95624 10.5898L2.95077 10.1703C2.72042 10.138 2.50364 10.0421 2.32484 9.89327C2.14604 9.74448 2.0123 9.54875 1.93867 9.3281C1.86504 9.10745 1.85443 8.87063 1.90805 8.64428C1.96167 8.41794 2.07739 8.21104 2.24218 8.04687L4.92187 5.36562C5.03818 5.24889 5.17654 5.15645 5.3289 5.09368C5.48126 5.03091 5.64458 4.99907 5.80937 5H10.3664L10.7391 4.62734C12.8234 2.54375 15.3351 2.4539 16.318 2.5125C16.6227 2.53102 16.9101 2.66043 17.126 2.87631C17.3419 3.0922 17.4713 3.37963 17.4898 3.68437C17.5469 4.66484 17.457 7.17656 15.3734 9.26093H15.3726ZM3.12499 8.93281L6.02734 9.3375L9.1164 6.25H5.80937L3.12499 8.93281ZM7.13437 10L9.99999 12.8656L14.4883 8.37734C15.0931 7.77656 15.5624 7.05326 15.8645 6.25606C16.1666 5.45886 16.2946 4.60623 16.2398 3.75546C15.3895 3.70273 14.5377 3.83205 13.7414 4.13478C12.945 4.4375 12.2224 4.90667 11.6219 5.51093L7.13437 10ZM13.75 10.8836L10.6617 13.9719L11.068 16.875L13.75 14.1906V10.8836Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>

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
                    <h2>8 Years</h2>
                    <p>OF SERVICE</p>
                </div>
                <div class="ourstatSection-box">
                    <h2>20K</h2>
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
                        <h5>Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac aliquet odio mattis. Qorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h5>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/Avatar.png" alt="">
                            <h6>Smith J.</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac aliquet odio mattis. Qorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h5>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/Avatar.png" alt="">
                            <h6>Smith J.</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac aliquet odio mattis. Qorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h5>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/Avatar.png" alt="">
                            <h6>Smith J.</h6>
                        </span>
                    </div>
                </div>
            </div>



        </div>

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
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">What is an FAQ page?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="2">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">Why should I visit the FAQ page?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="3">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">How do I find answers to common questions?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
                            </div>
                        </div>

                        <div class="group flex flex-col gap-2 rounded-lg bg-black p-5 text-white" tabindex="4">
                            <div class="flex cursor-pointer items-center justify-between">
                                <span class="faq-1-span">What’s the difference between an FAQ page and an About Us
                                    page?</span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png"
                                    class="h-2 w-3 transition-all duration-500 group-focus:-rotate-180" />
                            </div>
                            <div
                                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero velit
                                interdum, aliquet odio mattis.
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

        <Footer class="flex">
            <div class="footer-left-container">

                <div class="footer-leftFirst-inner-container">
                    <img src="/assets//images/footerLogo.png" alt="">
                    <p>Unlock your gaming potential with MyBoost—your trusted partner for rank boosting, coaching, and
                        more. Level up today!</p>
                </div>

                <div class="footer-leftSecond-inner-container">
                    <div class="footer-leftSecond-box">
                        <h5>SERVICES</h5>
                        <ul>
                            <li><a href="#">CS2 Boost</a></li>
                            <li><a href="#">Faceit Boost</a></li>
                            <li><a href="#">ESEA Boost</a></li>
                            <li><a href="#">ESPortal Boost</a></li>
                            <li><a href="#">Coaching</a></li>
                        </ul>
                    </div>
                    <div class="footer-leftSecond-box">
                        <h5>COMPANY</h5>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-leftthird-inner-container">
                    <a href="#"><img src="/assets/icons/start icon.png" alt=""></a>
                    <a href="#"><img src="/assets/icons/start icon (1).png" alt=""></a>
                    <a href="#"><img src="/assets/icons/start icon (2).png" alt=""></a>
                    <a href="#"><img src="/assets/icons/start icon (3).png" alt=""></a>
                </div>

                <div class="footer-leftfourth-inner-container">
                    <p>Copyright © Hotel Chauffeur.com 2017. All rights reserved.</p>
                </div>

            </div>

            <div class="footer-right-container">
                <div class="footersubscribe-container">
                    <h2>Subscribe To Our Newsletter</h2>
                    <div class="flex setDirection-input gap-4 mt-5">
                        <div class="footersubscribe-input-container flex">
                            <img src="/assets/icons/✳️ Start Icon.png" alt="">
                            <input type="text" placeholder="Enter Your Email Here">
                        </div>
                        <button class="themebtn-bg">Subscribe</button>
                    </div>
                </div>
                <div class="flex justify-end">
                    <img src="/assets/images/IMG7.png" alt="">
                </div>
            </div>
        </Footer>

    </div>
    @endsection

    @push('js')
        <script>
            <!-- scripts -->
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
        {{-- <script>
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
        <script src="/vendor/js/carousel.js"></script> --}}
    @endpush