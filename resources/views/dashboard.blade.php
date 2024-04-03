@extends('layouts.csgo')
@section('title') <title>MyBoost.GG - User Dashboard</title> @endsection

        @push('css')
            <!-- slider -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
            <!-- slider -->
        @endpush
        
    @section('content')
        

        <div class="landing-page-container">
            <x-navbar></x-navbar>
            
            <div class="dashboard-main-container">
                <div class="dashboard-centered-container">
                    
                    @if(App\Models\boost::where('user_id', Auth::id())->get()->count() == 0)
                        
                    <h2>Orders</h2>

                        <div class="nextOrder-box">
                            <img src="./assets/images/freepik--Character--inject-100.png" alt="">
                            <p>Your orders will be displaayed here!</p>
                        </div>

                    @else
    
                        <div class="tableSearch-main-container">
                            <div class="flex">
                                <h3>All Orders</h3>
                                <span>{{App\Models\boost::where('user_id', Auth::id())->get()->count()}} orders</span>
                            </div>
                            {{-- <div class="tableSearch-input-container">
                                <div class="tableSearch-input-box">
                                    <img src="./assets/icons/search.png" alt="">
                                    <input type="text" placeholder="Search...">
                                </div>
                            </div> --}}
                        </div>
                        <!-- Table -->
                        <div class="table-div relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right">
                                <thead class="uppercase">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            Boost Type
                                        </th>
                                        <th scope="col" class="px-6 py-4 flex items-center">
                                            Current Level
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Desired Level
                                        </th>
                                        <th scope="col" class="px-6 py-4 flex items-center">
                                            Price
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg>
                                            </a>
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            <span class="flex items-center">
                                                Status
                                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                    </svg>
                                            </span>
                                            </a>
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            <span class="flex items-center">
                                                Actions
                                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                    </svg>
                                            </span>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Models\boost::where('user_id', Auth::id())->get() as $orders)
                                        @if(empty($orders->payment)) @continue @endif
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{$orders->boost_type}}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{$orders->current_level}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{$orders->desired_level}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    ${{$orders->payment->total_amount}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="completed-pill">
                                                        @if($orders->payment->order_status == 'completed') Order in Progress
                                                        @elseif($orders->payment->order_status == 'delivered') Order Delivered
                                                        @else Pending Payment @endif
                                                    </span>
                                                </td>
                                                <td class="flex gap-2 px-6 py-4">
                                                    @if($orders->payment->order_status != 'completed' && $orders->payment->order_status != 'delivered')
                                                        <a href="/checkout/{{$orders->id}}"><span class="trans-pill">Pay Now!</span></a>
                                                    @endif
                                                    <a href="/csgoboost"><span class="trans-pill">Order Again</span></a>
                                                </td>
                                            </tr>
                                    @endforeach
                                    
                                    {{-- @foreach(App\Models\coaching::where('user_id', Auth::id())->get() as $orders)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$orders->boost_type}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$orders->current_level}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$orders->desired_level}}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${{$orders->payment}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="completed-pill">
                                                @if($orders->payment->order_status == 'completed') Order in Progress
                                                @elseif($orders->payment->order_status == 'delivered') Order Delivered
                                                @else Pending Payment @endif
                                            </span>
                                        </td>
                                        <td class="flex gap-2 px-6 py-4">
                                            @if($orders->payment->order_status != 'completed' && $orders->payment->order_status != 'delivered')
                                                <a href="/checkout/{{$orders->id}}"><span class="trans-pill">Pay Now!</span></a>
                                            @endif
                                            <a href="/csgoboost"><span class="trans-pill">Order Again</span></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- Table -->

                    @endif
    
                </div>
            </div>

            <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    
    @endsection
    
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
    <script src="/vendor/js/app.js"></script>
    <script src="/vendor/js/dropdowns.js"></script>
    <script src="/vendor/js/carousel.js"></script>
    <script src="/vendor/js/boosttabs.js"></script>
@endpush