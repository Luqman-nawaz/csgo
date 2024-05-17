@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - About Us</title> @endsection
    
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush

@section('content')

<div class="landing-page-container">
    <x-navbar></x-navbar>/

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
                            <h6>Ryan</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>Good site. The boosters were great, had a blast being in game with them. Highly Recommended!</h5>
                        <br>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/avatar2.svg" alt="">
                            <h6>Judy Smith</h6>
                        </span>
                    </div>
                    <div class="Testimonials-card-box">
                        <h5>After experiencing everything for myself, I use MyBoost exclusively. Great service & staff. Recommended.</h5>
                        <br>
                        <span class="flex items-center gap-3">
                            <img src="/assets/icons/avatar1.png" alt="">
                            <h6>Jake</h6>
                        </span>
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

    {{-- <x-navbar></x-navbar>
    <div class="csgo-aboutUs-hero-container">
        <div class="csgo-aboutUs-hero-section">
            <h2>ABOUT US</h2>
            <h5>MyBoost.gg is a fast, affordable and safe CS2 boosting service to help you reach Counter-Strike 2 leaderboards through vetted Radiant players across all regions. We work with the most skilled CS2 boosters to acheive your desired rank effortlessly. Here, you will find a range of services handled by our skilled players such as Rank boost, Wins, ESEA Boosting, FACEIT Boosting, CS2 Placement Matches, ESPORTAL Boosting & so much more. Our team consists of elite players that have delivered thousands of orders, so the safety of your account is guarenteed.</h5>
        </div>
    </div>
    <!-- csgo-AboutHero Section End -->

    <!-- csgo-AboutHero Offer Section Start -->
    <div class="csgo-aboutUs-offer-container">
        <h2>WHAT WE OFFER</h2>
        <div class="csgo-aboutUs-Offer-section">
            <div class="csgo-aboutus-do-box">
                <div class="csgo-aboutus-do-inner-box">
                    <h6>CS:GO Boost</h6>
                    <p>We specialize in enhancing your CS2 rating through our Boosters. 
                        CS2 Rank Boost or CS2 Premier Rating Boost are the same boosting service.
                        Our team has CS2 boost professionals who are committed to ensuring 
                        your success.</p>
                </div>
                <div class="aboutcard-img">
                    <img src="/assets/img/587593.png" alt="">
                </div>
            </div>

            <div class="csgo-aboutus-do-box">
                <div class="csgo-aboutus-do-inner-box">
                    <h6>More Coming soon!</h6>
                    <p>Do you like our service & are looking for more?
                        Don't worry, many other Account boosting services are on the way
                        including Valorant, Apex Legends, League of Legends & DOTA!
                    </p>
                </div>
                <div class="aboutcard-img">
                    <img src="/assets/img/wallpaperflare.com_wallpaper.jpg" alt="">
                </div>
            </div>

            <!-- <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/aboutus-card.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>CS:GO Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div> -->
            <!-- <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/Group 5.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>Valorant Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div>
            <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/Group 6.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>LOL Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div>
            <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/Group 4.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>DOTA 2 Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div>
            <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/Group 7.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>APEX Legends Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div>
            <div class="csgo-aboutUs-Offer-box">
                <img src="/assets/img/aboutus-card.png" alt="">
                <div class="csgo-aboutUs-Offer-text-box">
                    <h6>CS:GO Boost</h6>
                    <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit scared/skeptical
                        with
                        boosting services but using this service has put my fears to rest.</p>
                </div>
            </div> -->
        </div>
    </div>

    <x-footer></x-footer> --}}
@endsection

@push('js')
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
@endpush