<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Konveksi Indonesia</title>
        
        <!-- Font Awesome Icons -->
        <link href="{{ asset('Front-End/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
        
        <!-- Google Fonts -->
        <link href="{{ asset('Front-End/vendor/google-font/google-font-MerriweatherSans.css') }}" rel="stylesheet">
        <link href="{{ asset('Front-End/vendor/google-font/google-font-MerriweatherSans-2.css') }}" rel='stylesheet' type='text/css'>
        
        <!-- Plugin CSS -->
        <link href="{{ asset('Front-End/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        
        <!-- Theme CSS - Includes Bootstrap -->
        <link href="{{ asset('Front-End/css/creative.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Front-End/Form/css/main.css') }}" rel="stylesheet">

        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="">Revolt Factory</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#feedback">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <!-- Masthead -->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                            @include('flash-message')
                        <h1 class="text-uppercase text-white font-weight-bold headmaster">Revolt Factory Print</h1>
                        <hr class="divider my-8">
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">We can help you build better Shirt/T-shirt. Our products are using best quality materials and we have best Price for your Pocket.</p>
                        <a class="btn btn-warning btn-xl js-scroll-trigger" href="#about">Find Out More!</a>
                    </div>
                </div>
            </div>
        </header>
    </head>