@extends('layouts.csgo')
    @section('title') <title>MyBoost.GG - Best CS2 Account Boosting Service</title> @endsection

    @push('css') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush
    
    @section('content')

    <div class="landing-page-container">
        <x-navbar></x-navbar>

        <div class="heroSectionterms-container">
            <div class="heroSectionterms-inner-container">

                <h2>Terms & Conditions</h2>

                <p>By accessing this Website, accessible from https://myboost.gg/, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

                <h2>2. Use License</h2>

                <p>Permission is granted to temporarily download one copy of the materials on MyBoost's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

                <ul>
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose or for any public display;</li>
                    <li>attempt to reverse engineer any software contained on MyBoost's Website;</li>
                    <li>remove any copyright or other proprietary notations from the materials; or</li>
                    <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
                </ul>

                <p>This will let MyBoost to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the <a href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a>.</p>

                <h2>3. Disclaimer</h2>

                <p>All the materials on MyBoost's Website are provided "as is". MyBoost makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, MyBoost does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

                <h2>4. Limitations</h2>

                <p>MyBoost or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on MyBoost's Website, even if MyBoost or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

                <h2>5. Revisions and Errata</h2>

                <p>The materials appearing on MyBoost's Website may include technical, typographical, or photographic errors. MyBoost will not promise that any of the materials in this Website are accurate, complete, or current. MyBoost may change the materials contained on its Website at any time without notice. MyBoost does not make any commitment to update the materials.</p>

                <h2>6. Links</h2>

                <p>MyBoost has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by MyBoost of the site. The use of any linked website is at the user's own risk.</p>

                <h2>7. Site Terms of Use Modifications</h2>

                <p>MyBoost may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

                <h2>8. Your Privacy</h2>

                <p>Please read our Privacy Policy.</p>

                <h2>9. Governing Law</h2>

                <p>Any claim related to MyBoost's Website shall be governed by the laws of de without regards to its conflict of law provisions.</p>
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
                <img src="./assets/images/Visa.png" alt="">
                <img src="./assets/images/Gpay.png" alt="">
                <img src="./assets/images/AE.png" alt="">
                <img src="./assets/images/Mastercard.png" alt="">
                <img src="./assets/images/Paypal.png" alt="">
                <img src="./assets/images/Applepay.png" alt="">
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