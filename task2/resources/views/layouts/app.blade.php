<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style2.css') }}"> --}}
</head>
<body>
    <!-- Start navigation  -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#logo">
                <img src="{{ asset("images/web-logo-color.png") }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end menu-bar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.home') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

@yield('content')
<!-- End navigation  -->
<footer>
    <div class="container bg-color">
        <p class="text-center">© 2023 Copy Right Fashion . All Right Deserved. Md.Sahadat Hossain (Morad Patwary)</p>
    </div>
</footer>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@yield('script')
</body>
</html>