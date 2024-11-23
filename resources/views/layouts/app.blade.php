<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Belajar Laravel')</title>
    <link rel="icon" href="{{ asset('assets/moon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <header>
        <div class="header-container">
            <div class="title">
                <h1>Belajar Laravel 11</h1>
                <p>Platform Belajar Laravel untuk Semua Tingkatan</p>
            </div>

            <nav class="navbar">
                <div class="navbar-container">
                    <ul>
                        <li> <a href="{{ route('home') }}"> Home </a> </li>
                        <li> <a href="{{ route('about') }}"> About </a> </li>
                        <li> <a href="{{ route('about') }}"> Course </a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-container">
            <div class="company">
                <h3>Company</h3>
                <ul>
                    <li>About Us</li>
                    <li>Our service</li>
                    <li>Privacy Police</li>
                    <li>Affiliate Program</li>
                </ul>
            </div>

            <div class="gethelp">
                <h3>Get Help</h3>
                <ul>
                    <li>FAQ</li>
                    <li>Shipping</li>
                    <li>Return</li>
                    <li>Order Status</li>
                    <li>Payment Options</li>
                </ul>
            </div>

            <div class="follow-us">
                <h3>Follow Us</h3>
                <ul>
                    <li> <img src="{{ asset('assets/facebook.png')}}"> </li>
                    <li> <img src="assets/twitter.png"> </li>
                    <li> <img src="assets/instagram.png"> </li>
                    <li> <img src="assets/facebook.png"> </li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>