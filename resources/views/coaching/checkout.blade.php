@extends('layouts.csgo')

@section('content')
    <x-navbar></x-navbar>
    
    <div class="csgo-payment-container">
        <form action="/coaching-payment/{{$order->id}}" method="post">
            @csrf
            @method('post')
            <input type="text" value="{{$order->id}}" name="order_id" style="display: none;">
        <div class="csgo-payment-section">
            <div class="csgo-payment-box">
                <div class="csgo-payment-inner-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                        fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                            stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E2E2E2" />
                                <stop offset="0.9999" stop-color="#D3D3D5" />
                                <stop offset="1" stop-color="#F3F3F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="YOUR NAME" name="name" required>
                </div>
                <div class="csgo-payment-inner-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                        fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                            stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E2E2E2" />
                                <stop offset="0.9999" stop-color="#D3D3D5" />
                                <stop offset="1" stop-color="#F3F3F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="SKYPE ID" name="skype_id" required>
                </div>
                <div class="csgo-payment-inner-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                        fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                            stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E2E2E2" />
                                <stop offset="0.9999" stop-color="#D3D3D5" />
                                <stop offset="1" stop-color="#F3F3F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="DISCORD USERNAME" name="discord_username" required>
                </div>
                <div class="csgo-payment-inner-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80"
                        fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z"
                            stroke="url(#paint0_linear_466_9811)" stroke-opacity="0.7" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_466_9811" x1="250" y1="-76.25" x2="253.75" y2="138.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E2E2E2" />
                                <stop offset="0.9999" stop-color="#D3D3D5" />
                                <stop offset="1" stop-color="#F3F3F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="AVAILABLE TIME(05:30AM, 24 July)" name="available_time" required>
                </div>
                <div class="csgo-payment-inner-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="228" viewBox="0 0 500 228"
                        fill="none">
                        <path d="M1.5 1.5H498.5V137.842L450.11 226.5H1.5V1.5Z" stroke="url(#paint0_linear_466_9882)"
                            stroke-opacity="0.7" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_466_9882" x1="250" y1="-217.312" x2="280.394"
                                y2="394.113" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E2E2E2" />
                                <stop offset="0.9999" stop-color="#D3D3D5" />
                                <stop offset="1" stop-color="#F3F3F3" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="ACCOUNT DATA" class="account-data-input" name="account_data" required>
                </div>
            </div>
            <div class="csgo-payment-box-2">
                <h3>Order ID # <span>{{$order->id}}</span></h3>
                <p>{{$order->created_at->diffForHumans()}}</p>
                <br>
                <h3>Boost Type: <span>{{$order->boost_type}}</span></h3>
                <h3>In Game Role: <span>{{$order->ingame_role}}</span></h3>
                <h3>No of Reviews: <span>{{$order->no_of_reviews}}</span></h3>

                <div class="csgo-paymen-method-container">
                    <h5>Select Your Payment Method</h5>
                    <label><input type="radio" name="e" value="crypto"> Cryptocurrency</label>
                    <label><input type="radio" name="e" value="stripe"> Mastercard/VISA Card</label>
                </div>
                <div class="csgo-payment-rate-conatiner">
                    <ul>
                        <li>
                            <p>Coaching</p>
                            <span>$ {{$order->no_of_reviews * 20}}</span>
                        </li>
                        @if($order->priority_order == 1)
                            <li>
                                <p>Priority Order</p>
                                <span>$ {{($order->no_of_reviews * 20)/5}}</span>
                            </li>
                        @endif
                    </ul>
                </div>
                <hr>
                <div class="csgo-total-payment-conatiner">
                    <h5>Total Amount</h5>
                    <h6>$ {{($order->no_of_reviews * 20) + (($order->no_of_reviews * 20) / 5)}}</h6>
                </div>
                <a href="/payment"><button class="csgo-btn csgo-payment-checkout">CHECKOUT</button></a>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
@endsection