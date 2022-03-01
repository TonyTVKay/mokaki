<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/home') }}"><span><img src="img/core-img/logo.png" alt="logo"></span> Mokaki</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Discover</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/auctions') }}">Live Auctions</a>
                        <a class="dropdown-item" href="{{ url('/discover') }}">Discover</a>
                        <a class="dropdown-item" href="{{ url('/item-details') }}">Item Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/activity') }}">Activity</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/wallet-connect') }}">Wallet Connect</a>
                        <a class="dropdown-item" href="{{ url('/create-item') }}">Create Item</a>
                        <a class="dropdown-item" href="{{ url('/authors') }}">Authors</a>
                        <a class="dropdown-item" href="{{ url('/profile') }}">Author Profile</a>
                        <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                        <a class="dropdown-item" href="{{ url('/signup') }}">Sign Up</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
                </li>
                <li class="lh-55px"><a href="{{ url('/wallet-connect') }}" class="btn login-btn ml-50">Connect Wallet</a></li>
            </ul>
        </div>
    </div>
</nav>
