<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/assets/Logo.svg" type="image/svg+xml">
        <link rel="stylesheet" href="/vendor/css/index.css">
        <link rel="stylesheet" href="/vendor/css/style.css">
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1586682518637956');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1586682518637956&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
        <!-- slider -->
        @stack('css')
        <style>
            .arrow {
                border: solid white;
                border-width: 0 3px 3px 0;
                display: inline-block;
                padding: 3px;
            }
            .down {
                transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
            }
        </style>
        <!-- slider -->
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="icon" type="image/x-icon" href="/assets/fav.png">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RKC8P5P1WQ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RKC8P5P1WQ');
        </script>

        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11145875376"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11145875376'); </script>

        @yield('title')
    </head>

    <body>
        
        @yield('content')
        
        
        @stack('js')
        <script>
        window.intercomSettings = {
            api_base: "https://api-iam.intercom.io/",
            app_id: "frpseq3h",
        };
        </script>


        <script>
        // Wir haben Ihre App-ID in der Widget-URL vorausgefüllt: 'https://widget.intercom.io/widget/frpseq3h'
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/frpseq3h';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
        </script>
        <script>
            function toggleDropdown() {
                var dropdownContent = document.getElementById("boostDropdown");
                dropdownContent.style.display === "none" ? dropdownContent.style.display = "flex" : dropdownContent.style.display = "none";
            }
        </script>
    </body>

</html>