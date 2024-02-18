<div class="csgo-upperHeader-container">
    <a href="/"><img src="/assets/logo.svg" alt="" style="height: 100px; width:100px;"></a>
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
                <li><a href="/coaching">Coaching</a></li>
                <li><a href="/about">About</a></li>
                @guest
                <li class="hidden-links"><a href="/login">Login</a></li>
                <li class="hidden-links"><a href="/register">Register</a></li>
                @endguest
                @auth
                <li class="hidden-links"><a href="/dashboard">Dashboard</a></li>
                @endauth
                
            </ul>
        </div>
        <div>
            @guest
            <a href="/login"><button class="csgo-btn csgo-login-btn">Login</button></a>
            <a href="/register"><button class="csgo-btn csgo-login-btn">Register</button></a>
            @endguest
            @auth
            <a href="/dashboard"><button class="csgo-btn csgo-login-btn">Dashboard</button></a>
            
                <a onclick="document.getElementById('logout').submit();"><button class="csgo-login-btn">Logout</button></a>
                <form action="/logout" method="post" id="logout">
                    @csrf
                </form>
            @endauth
        </div>
        
        <div class="sidebar-header">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>
        <!--  -->
    </div>
</div>