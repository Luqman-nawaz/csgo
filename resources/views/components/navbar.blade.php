<Header class="flex justify-between items-center">
    <div class="width-85 mx-auto flex justify-between items-center">
        <div class="leftmenu-container w-5/12 flex items-center">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/csboost">Boost</a>
                <a href="/coaching">Coaching</a>
                <a href="/contact">Contact</a>
            
        </div>
        <div class="logo-container w-3/12 flex justify-between items-center">
            <img src="/assets/logo.svg" class="m-auto" style="cursor: pointer;" alt="" onclick="window.location.href='/'";>
        </div>
        <div class="rightmenu-container w-5/12 flex justify-end items-center gap-4">
            @guest
                <a href="/login"><button class="themebtn-trans">LOGIN</button></a>
                <a href="/register"><button class="themebtn-bg">SIGN UP</button></a>
            @endguest
            @auth
            <a href="/#boostingservices">
                <button class="themebtn-bg">PLACE NEW ORDER&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H12.75V20.25C12.75 20.4489 12.671 20.6397 12.5303 20.7803C12.3897 20.921 12.1989 21 12 21C11.8011 21 11.6103 20.921 11.4697 20.7803C11.329 20.6397 11.25 20.4489 11.25 20.25V12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H11.25V3.75C11.25 3.55109 11.329 3.36032 11.4697 3.21967C11.6103 3.07902 11.8011 3 12 3C12.1989 3 12.3897 3.07902 12.5303 3.21967C12.671 3.36032 12.75 3.55109 12.75 3.75V11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12Z"
                            fill="black" />
                    </svg>
                </button>
            </a>
            <a href="/dashboard">
                    <button class="themebtn-trans">
                            DASHBOARD
                    </button>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a>
                        <button type="submit" class="themebtn-trans">
                                Logout
                        </button>
                    </a>
            </form>
            @endauth
        </div>
        <!-- Side Bar -->
        <button class="burger" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="sidebar" id="sidebar" style="z-index:1;">
            <button class="close-btn" onclick="toggleSidebar()">
                <span>&times;</span>
            </button>
            <div class="mob-logo">
                <img src="/assets/Logo.svg" class="m-auto" alt="">
            </div>
            <div class="menu-container-mob">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/csboost">Boost</a>
                <a href="/coaching">Coaching</a>
                <a href="/contact">Contact</a>
            </div>
            <div class="buttonmob-container">
                @guest
                    <a href="/login"><button class="themebtn-trans">LOGIN</button></a>
                    <a href="/register"><button class="themebtn-bg">SIGN UP</button></a>
                @endguest
                @auth
            <a href="/csboost">
                <button class="themebtn-bg">PLACE NEW ORDER&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H12.75V20.25C12.75 20.4489 12.671 20.6397 12.5303 20.7803C12.3897 20.921 12.1989 21 12 21C11.8011 21 11.6103 20.921 11.4697 20.7803C11.329 20.6397 11.25 20.4489 11.25 20.25V12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H11.25V3.75C11.25 3.55109 11.329 3.36032 11.4697 3.21967C11.6103 3.07902 11.8011 3 12 3C12.1989 3 12.3897 3.07902 12.5303 3.21967C12.671 3.36032 12.75 3.55109 12.75 3.75V11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12Z"
                            fill="black" />
                    </svg>
                </button>
            </a>
            <a href="/dashboard">
                    <button class="themebtn-trans">
                            DASHBOARD
                    </button>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a>
                        <button type="submit" class="themebtn-trans">
                                Logout
                        </button>
                    </a>
                </form>
            @endauth
            </div>

        </div>
        <!-- Side Bar -->
    </div>
</Header>
