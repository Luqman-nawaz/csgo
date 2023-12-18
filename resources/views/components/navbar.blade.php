<div class="csgo-upperHeader-container">
    <a href="/"><img src="/assets/logo.svg" alt=""></a>
</div>
<div class="main-site-inner-section">
    <div class="csgo-header-container">
        <!-- <div class="left">logo</div> -->

        <div class="addLocationProduct-dropdown">
            <div class="addLocationProduct-toggle" onclick="addLocationProducttoggleDropdown()">
                <img src="/assets/img/CSGO.png" alt="">
                CS2 <span class="addLocationProduct-arrow"></span>
            </div>
            <div class="addLocationProduct-dropdown-menu">
                <p class="addLocationProduct-option" href="#">CS2</p>
                <p class="addLocationProduct-option" href="#">Valorant</p>
                <p class="addLocationProduct-option" href="#">Call Of Duty</p>
            </div>
        </div>


        <div class="csgo-menu-conatiner">
            <ul>
                <li><a href="/csgoboost">CS2 Boost</a></li>
                <li><a href="/faceit">Faceit Boost</a></li>
                <li><a href="/esea">Esea Boost</a></li>
                <li><a href="/esportal">Esportal Boost</a></li>
                <li><a href="/about">About</a></li>

                <a href="/"><button class="csgo-login-btn responsive-login-btn mt-10px">Track Order</button></a>
            </ul>
        </div>
        @guest
            <a href="/login"><button class="csgo-login-btn">Login</button></a>
        @endguest
        @auth
        
        <a href="/dashboard"><button class="csgo-login-btn">Dashboard</button></a>
        @endauth
        <!--  -->
        <div class="sidebar-header">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>
        <!--  -->
    </div>
</div>