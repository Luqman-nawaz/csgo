@extends('layouts.csgo')

@section('title') <title>MyBoost.GG - Contact Us</title> @endsection
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
@section('content')
    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSectionContact-container">
            <div class="heroSectionContact-inner-container">
                <div class="heroSectionContact-innerLeft-container">
                    <h5>CONTACT US</h5>
                    <h2>Get In Touch With Us</h2>

                    @if ($message = Session::get('success'))
                        <p style="text-align: center; color:white; margin:10px;">{{ $message }}</p>
                    @endif

                    @if ($message = Session::get('error'))
                        <p style="text-align: center; color:red; margin:10px;">{{ $message }}</p>
                    @endif
                    <form action="/contact" method="post">
                        @csrf
                        @method('post')
                            <label for="">Name</label>
                            <input type="text" placeholder="Enter name here" name="name" required>

                            <label for="">Email</label>
                            <input type="text" placeholder="abc@xyz.com" name="email" required>

                            <label for="">Message</label>
                            <textarea id="" cols="30" rows="6" placeholder="Type your message here..." name="message"></textarea>

                            <button class="themebtn-bg">Send Message</button>
                    </form>

                </div>
                <div class="heroSectionContact-innerRight-container">
                    <h5>Contact</h5>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/EnvelopeSimple.png" alt="">
                        </span>
                        <p>support@myboost.gg</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/ChatsCircle.png" alt="">
                        </span>
                        <p>Live Chat</p>
                    </div>

                    <div class="contact-line"></div>

                    <h5>Socials</h5>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/DiscordLogo.png" alt="">
                        </span>
                        <a href="https://discord.gg/M9PeWGEhcV"><p>Discord.gg/M9PeWGEhcV</p></a>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/FacebookLogo.png" alt="">
                        </span>
                        <p>facebook.com/MyBoost</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/TwitchLogo.png" alt="">
                        </span>
                        <p>twitch.com/MyBoost</p>
                    </div>
                    <div class="contactinfo-box">
                        <span>
                            <img src="/assets/icons/YoutubeLogo.png" alt="">
                        </span>
                        <p>youtube.com/MyBoost</p>
                    </div>

                </div>
            </div>
        </div>

        <x-boostcta></x-boostcta>

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
@endpush