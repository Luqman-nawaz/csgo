@extends('layouts.csgo')

@section('title') <title>MyBoost.GG - Checkout</title> @endsection

    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    @endpush

@section('content')

    <div class="landing-page-container">

        <Header class="dashheader trans-header flex justify-between items-center">
            <div class="width-85 mx-auto flex justify-between items-center">
                <div class="leftmenu-container w-5/12 flex items-center">
                    <a href="/dashboard">
                        <button class="themebtn-trans">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 11.9999C21 12.1988 20.921 12.3896 20.7803 12.5303C20.6397 12.6709 20.4489 12.7499 20.25 12.7499H5.56029L11.0306 18.2193C11.1003 18.289 11.1556 18.3717 11.1933 18.4628C11.231 18.5538 11.2504 18.6514 11.2504 18.7499C11.2504 18.8485 11.231 18.9461 11.1933 19.0371C11.1556 19.1281 11.1003 19.2109 11.0306 19.2806C10.9609 19.3502 10.8782 19.4055 10.7872 19.4432C10.6961 19.4809 10.5985 19.5003 10.5 19.5003C10.4014 19.5003 10.3039 19.4809 10.2128 19.4432C10.1218 19.4055 10.039 19.3502 9.96935 19.2806L3.21935 12.5306C3.14962 12.4609 3.0943 12.3782 3.05656 12.2871C3.01882 12.1961 2.99939 12.0985 2.99939 11.9999C2.99939 11.9014 3.01882 11.8038 3.05656 11.7127C3.0943 11.6217 3.14962 11.539 3.21935 11.4693L9.96935 4.7193C10.1101 4.57857 10.301 4.49951 10.5 4.49951C10.699 4.49951 10.8899 4.57857 11.0306 4.7193C11.1713 4.86003 11.2504 5.05091 11.2504 5.24993C11.2504 5.44895 11.1713 5.63982 11.0306 5.78055L5.56029 11.2499H20.25C20.4489 11.2499 20.6397 11.3289 20.7803 11.4696C20.921 11.6103 21 11.801 21 11.9999Z"
                                    fill="white" />
                            </svg>
                            GO TO DASHBOARD
                        </button>
                    </a>
                </div>
                <div class="logo-container w-3/12 flex justify-between items-center">
                    <img src="/assets/Logo.svg" class="m-auto" alt="">
                </div>

                <div class="rightmenu-container w-5/12 flex justify-end items-center gap-4">

                    <a href="/csgoboost">
                        <button class="themebtn-bg">PLACE NEW ORDER<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H12.75V20.25C12.75 20.4489 12.671 20.6397 12.5303 20.7803C12.3897 20.921 12.1989 21 12 21C11.8011 21 11.6103 20.921 11.4697 20.7803C11.329 20.6397 11.25 20.4489 11.25 20.25V12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H11.25V3.75C11.25 3.55109 11.329 3.36032 11.4697 3.21967C11.6103 3.07902 11.8011 3 12 3C12.1989 3 12.3897 3.07902 12.5303 3.21967C12.671 3.36032 12.75 3.55109 12.75 3.75V11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </a>
                </div>
                <!-- Side Bar -->
                <button class="burger" onclick="toggleSidebar()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="sidebar" id="sidebar">
                    <button class="close-btn" onclick="toggleSidebar()">
                        <span>&times;</span>
                    </button>
                    <div class="mob-logo">
                        <img src="/assets/Logo.svg" class="m-auto" alt="">
                    </div>
                    <div class="buttonmob-container">
                        <button class="themebtn-trans">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21 11.9999C21 12.1988 20.921 12.3896 20.7803 12.5303C20.6397 12.6709 20.4489 12.7499 20.25 12.7499H5.56029L11.0306 18.2193C11.1003 18.289 11.1556 18.3717 11.1933 18.4628C11.231 18.5538 11.2504 18.6514 11.2504 18.7499C11.2504 18.8485 11.231 18.9461 11.1933 19.0371C11.1556 19.1281 11.1003 19.2109 11.0306 19.2806C10.9609 19.3502 10.8782 19.4055 10.7872 19.4432C10.6961 19.4809 10.5985 19.5003 10.5 19.5003C10.4014 19.5003 10.3039 19.4809 10.2128 19.4432C10.1218 19.4055 10.039 19.3502 9.96935 19.2806L3.21935 12.5306C3.14962 12.4609 3.0943 12.3782 3.05656 12.2871C3.01882 12.1961 2.99939 12.0985 2.99939 11.9999C2.99939 11.9014 3.01882 11.8038 3.05656 11.7127C3.0943 11.6217 3.14962 11.539 3.21935 11.4693L9.96935 4.7193C10.1101 4.57857 10.301 4.49951 10.5 4.49951C10.699 4.49951 10.8899 4.57857 11.0306 4.7193C11.1713 4.86003 11.2504 5.05091 11.2504 5.24993C11.2504 5.44895 11.1713 5.63982 11.0306 5.78055L5.56029 11.2499H20.25C20.4489 11.2499 20.6397 11.3289 20.7803 11.4696C20.921 11.6103 21 11.801 21 11.9999Z"
                                    fill="white" />
                            </svg>
                            GO TO DASHBOARD
                        </button>
                        <!-- <span>
                            <img src="/assets/icons/noticifation.png" alt="">
                            <div class="notictionNumber">1</div>
                        </span> -->

                        <button class="themebtn-bg">PLACE NEW ORDER<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H12.75V20.25C12.75 20.4489 12.671 20.6397 12.5303 20.7803C12.3897 20.921 12.1989 21 12 21C11.8011 21 11.6103 20.921 11.4697 20.7803C11.329 20.6397 11.25 20.4489 11.25 20.25V12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H11.25V3.75C11.25 3.55109 11.329 3.36032 11.4697 3.21967C11.6103 3.07902 11.8011 3 12 3C12.1989 3 12.3897 3.07902 12.5303 3.21967C12.671 3.36032 12.75 3.55109 12.75 3.75V11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>

                </div>
                <!-- Side Bar -->

            </div>
        </Header>

        <div class="dashboard-main-container">
            <div class="dashboard-centered-container">

                <h2>Checkout</h2>
                    <form action="/coaching-payment/{{$order->id}}" method="post">
                        @csrf
                        @method('post')
                        <input type="text" value="{{$order->id}}" name="order_id" style="display: none;">
                        <div class="dashboard-userInfoMain-container">
                            <h5>Information</h5>
                            <div class="dashboard-userInfo-container">
                                <div class="dashboard-userInfoInner-container">
                                    <label for="">Name</label>
                                    <div class="credentials-input-box">
                                        <img src="/assets/icons/✳️ Start Icon.png" alt="">
                                        <input type="text" placeholder="YOUR NAME" name="name" required>
                                    </div>
                                </div>
                                <div class="dashboard-userInfoInner-container">
                                    <label for="">Email Address</label>
                                    <div class="credentials-input-box">
                                        <img src="/assets/icons/✳️ Start Icon.png" alt="">
                                        <input type="text" placeholder="SKYPE ID" name="skype_id" required>
                                    </div>
                                </div>
                                <div class="dashboard-userInfoInner-container">
                                    <label for="">Username</label>
                                    <div class="credentials-input-box">
                                        <img src="/assets/icons/start icon (1).png" alt="">
                                        <input type="text" placeholder="DISCORD USERNAME" name="discord_username" required>
                                    </div>
                                </div>
                                <div class="dashboard-userInfoInner-container">
                                    <label for="">Availability</label>
                                    <div class="credentials-input-box">
                                        <img src="/assets/icons/calander.png" alt="">
                                        <input type="text" placeholder="AVAILABLE TIME(05:30AM, 24 July)" name="available_time" required>
                                    </div>
                                </div>
                                <div class="dashboard-userInfoInner-container">
                                    <label for="">Account Data</label>
                                    <div class="credentials-input-box">
                                        <img src="/assets/icons/@rate.png" alt="">
                                        <input type="text" placeholder="ACCOUNT DATA" class="account-data-input" name="account_data" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="boosting-main-container" style="padding: 20px 0px 0px 0px;">
                            <div class="boosting-centered-container" style="padding: 0px 24px 10px 24px;">
                                <div class="boostingTabContent" style="padding: 0px 0px 0px 0px;">

                                            <div class="boosting-additional-conatiner">
                                                <h5 style="margin:0;">Payment Method</h5>
                                                <span>
                                                    <img src="/assets/icons/Info.png" alt="">
                                                    <p>With credit card, you can pay with Giropay, Paypal or Google Pay.</p>
                                                </span>

                                                <div class="boosting-additionalInput-conatiner">

                                                    <label>
                                                        <input type="radio" value="card" id="CS2RankBoostcheckbox1" name="payment_method" onclick="stripeselect();">
                                                        Stripe
                                                        <span>(PayPal, Giropay, Google Pay)</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="crypto" id="CS2RankBoostcheckbox2" name="payment_method" onclick="cryptoselect();">
                                                        Crypto
                                                        <span>(25+ currencies supported)</span>
                                                    </label>

                                                </div>

                                            </div>

                                            

                        <div class="boostingTabContent" id="cryptopayment" style="padding:0 0 0 0; display:none;" >
                            <div class="boosting-option-container" style="justify-content:center;">
                                <div class="boosting-option-inner-container">
                                    <div class="custom-select">
                                        <label for="select">Select Crypto</label>
                                        <select id="select" name="crypto_currency" onchange="updateRankBoostPrice();">
                                                    <option value="BTC">Bitcoin</option>
                                                    <option value="ETH">Ether</option>
                                                    <option value="BCH">Bitcoin Cash</option>
                                                    <option value="LTC">Litecoin</option>
                                                    <option value="VLX">Velas (EVM)</option>
                                                    <option value="VLX.Native">Velas (Native)</option>
                                                    <option value="APL">Apollo</option>
                                                    <option value="BCN">Bytecoin</option>
                                                    <option value="BEAM">Beam</option>
                                                    <option value="BIZZ.TRC20">BizzCoin</option>
                                                    <option value="BNB">BNB Coin (Mainnet)</option>
                                                    <option value="BNB.BSC">BNB Coin (BSC Chain)</option>
                                                    <option value="BTCV">Bitcoin Vault</option>
                                                    <option value="BTG">Bitcoin Gold</option>
                                                    <option value="DASH">Dash</option>
                                                    <option value="DOGE">Doge Coin</option>
                                                    <option value="MATIC.POLY">MATIC</option>
                                                    <option value="TRX">TRON</option>
                                                    <option value="XMR">Monero</option>
                                                    <option value="USDT">Tether USD (Omni Layer)</option>
                                                    <option value="TUSD.TRC20">TrueUSD (Tron/TRC20)</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>
                                            <div class="boosting-pricing-conatiner">

                                                <div class="boosting-pricing-txt-conatiner">
                                                    <span>Price to pay <h3 id="rankboostprice">€{{ $total_amount }}</h3></span>
                                                    <button type="submit" class="themebtn-bg gap-3">Pay Now <img src="/assets/icons/circleArrow.png"
                                                            alt=""></button>
                                                </div>

                                            </div>

                                </div>
                            </div>
                        </div>

                    </form>

            </div>
        </div>

        <x-footer></x-footer>

    </div>
    @push('js')
        <script>
            function cryptoselect(){
                document.getElementById('cryptopayment').style.display = "block";
            }
            
            function stripeselect(){
                document.getElementById('cryptopayment').style.display = "none";
            }
        </script>
    @endpush
@endsection
