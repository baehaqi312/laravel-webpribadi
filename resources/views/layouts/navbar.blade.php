<!-- ===== NAVBAR ===== -->
<nav class="shadow">
    <div class="nav-bar container">
        <h1 class="bx bx-menu sidebarOpen"></h1>
        <span class="logo navLogo"><a href="/">My Web</a></span>
        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"> <a href="/">My Web</a></span>
                <i class="bx bx-x siderbarClose"></i>
            </div>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('portofolio') }}">Portfolio</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                {{-- <li>
                    <div class="tot dark-lightot">
                        <i class="bx bx-moon moon"></i>
                        <i class="bx bx-sun sun"></i>
                    </div>
                </li> --}}
            </ul>
        </div>

        <div class="darkLight-searchBox">
            <div class="lol dark-light">
                <i class="bx bx-moon moon"></i>
                <i class="bx bx-sun sun"></i>
            </div>

            {{-- <div class="searchBox">
                <div class="searchToggle">
                    <i class="bx bx-x cancel"></i>
                    <i class="bx bx-search search"></i>
                </div>

                <div class="search-field">
                    <input type="text" placeholder="Search..." />
                    <i class="bx bx-search"></i>
                </div>
            </div> --}}
        </div>
    </div>
</nav>

<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
