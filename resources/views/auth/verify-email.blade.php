@extends('layouts.csgo')

@section('title') <title>MyBoost.GG - User Dashboard</title> @endsection

        @push('css')
            <!-- slider -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
            <!-- slider -->
            <style>
                .widthfix{
                    width:25% !important;
                }
                @media (max-width: 1010px) {
                    .widthfix{
                        width:25% !important;
                    }
                }
                @media (max-width: 930px) {
                    .widthfix{
                        width:50% !important;
                    }
                }
                @media (max-width: 700px) {
                    .widthfix{
                        width:100% !important;
                    }
                }
                @media (max-width: 550px) {
                    .widthfix{
                        width:100% !important;
                    }
                }
                @media (max-width: 440px) {
                    .widthfix{
                        width:100% !important;
                    }
                }
            </style>
        @endpush
        
    @section('content')
        

        <div class="landing-page-container">
            <x-navbar></x-navbar>
            
            <div class="dashboard-main-container">
                <div class="dashboard-centered-container">
                    
                    <h2>Account Verification</h2>

                    <div class="dashboard-userInfoMain-container">
                        <h5>Your account verification is still pending. Please make sure to check Spam/Junk Folder of your email.</h5>
                        <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                            <button type="submit" class="themebtn-bg widthfix">Resend Verification Email</button>
                        </form>
                    </div>

    
                </div>
            </div>

            <x-footer></x-footer>
            <!-- csgo-Footer Section End -->

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
    @endpush
    
    @push('js')
    <script>
        window.intercomSettings = {
          api_base: "https://api-iam.intercom.io",
          app_id: "ukzjpgts",
          name: @php print_r(json_encode(Auth::user()->name)); @endphp, // Full name
          user_id: @php print_r(json_encode(Auth::user()->id)); @endphp, // a UUID for your user
          email: @php print(json_encode(Auth::user()->email)); @endphp, // the email for your user
          created_at: "<?php echo strtotime(Auth::user()->created_at) ?>" // Signup date as a Unix timestamp
        };
    </script>
      
      <script>
      // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/ukzjpgts'
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/ukzjpgts';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      </script>

@endpush

