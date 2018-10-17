<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Proactys">
    <title>ProActys</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/ico/logo-identité-48x48.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/ico/logo-identité.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/logo-identité-184x184.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/ico/logo-identité.png') }}" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}?time=<?=time()?>" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}?time=<?=time()?>" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800,200,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600italic,400italic,300,300italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic,400,700' rel='stylesheet' type='text/css'>

    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="{{ asset('assets/css/colors/proactysColor.css') }}">

    @yield('css')

    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Wrap -->
<div id="wrap">
    <!-- header -->
    <header>

        <!-- Top bar -->
        <div class="top-bar">
            <div class="top-info">
                <div class="container">
                    <ul class="personal-info">
                        <li>
                            <p><i class="fa fa-phone"></i> +41 44 687 76 39 </p>
                        </li>
                        <li>
                            <p>Firststrasse 1 CH-8835 Feusisberg </p>
                        </li>
                        <li>
                            <p>info@proactys.swiss </p>
                        </li>
                    </ul>

                    <!-- Right Sec -->
                    <div class="right-sec">

                        <!-- Language -->
                        <select class="selectpicker">
                            <option>English</option>
                            <option>Français</option>
                            <option>Deutsch</option>
                        </select>

                        <!-- social -->
                        <ul class="social">
                            <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fab fa-google"></i></a></li>
                            <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar">
            <div class="sticky">
                <div class="container">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img style="height:75px; position: relative; top: -20px;"
                                 src="{{ asset('assets/images/logo_color.svg') }}"
                                 alt="" >
                        </a>
                    </div>

                    <!-- Nav -->
                    <ul class="nav ownmenu">
                        <li @if (in_array(Route::currentRouteName(), ['expertise.bpm', 'expertise.ecm', 'expertise
                        .bi', 'expertise.db']))class="active"@endif> <a href="#" onclick="return false;">Our expertise</a>
                            <ul class="dropdown">
                                <li> <a href="{{ route('expertise.bpm') }}">Business Process Management</a> </li>
                                <li> <a href="{{ route('expertise.ecm') }}">Enterprise Content Management</a> </li>
                                <li> <a href="{{ route('expertise.bi') }}">Business Intelligence</a> </li>
                                <li> <a href="{{ route('expertise.db') }}">Digital Transformation</a> </li>
                                <li> <a href="{{ route('expertise.agility') }}">Agility</a> </li>
                            </ul>
                        </li>
                        <li @if (in_array(Route::currentRouteName(), ['services.ep', 'services.pm', 'services
                        .tc']))class="active"@endif> <a href="#" onclick="return false;">Services</a>
                            <ul class="dropdown">
                                <li> <a href="{{ route('services.ep') }}">Enterprise Performance</a> </li>
                                <li> <a href="{{ route('services.pm') }}">Program Management</a> </li>
                                <li> <a href="{{ route('services.tc') }}">Training &amp; Coaching</a> </li>
                            </ul>
                        </li>
                        <li @if ('about' === Route::currentRouteName())class="active"@endif> <a href="{{ route
                        ('about') }}">About us</a> </li>
                        <li @if ('contact' === Route::currentRouteName())class="active"@endif> <a href="{{ route
                        ('contact') }}">Contact</a> </li>
                    </ul>
                    <!-- Search -->
                    <div class="search-icon"> <a href="#."><i class="fa fa-search"></i></a>
                        <form>
                            <input class="form-control" type="search" placeholder="Type Here">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success shouldDisappear">{{ Session::get('success') }}</div>
        @endif
    </div>

    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <!-- ABOUT -->
                <div class="col-md-3">
                    <img style="height:90px; position: relative; top: -20px;" src="{{ asset
                    ('assets/images/logo_footer.svg') }}" alt="" >
                    <div class="about-foot">
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker"></i>Firststrasse 1 CH-8835 Feusisberg</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone"></i> +41 44 687 76 39</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope"></i> info@proactys.swiss</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Twitter Feed -->
                <div class="col-md-3">
                    <h6>Twitter Feed</h6>
                    <ul class="tweet">
                        <li>
                            <p>A Guide to Better Brainstorming <a href="#." class="primary-color">http://enva.to/nfNrz</a> by @jeff_haden </p>
                            <span>May 22, 2014</span> </li>
                        <li>
                            <p>Are you a student? You only have 48 hours left to grab a full year on Tuts+ for just $45! Don't miss out. <a href="#." class="primary-color">http://ow.ly/McvuJ</a> </p>
                            <span>May 22, 2014</span> </li>
                    </ul>
                </div>

                <!-- Photostream -->
                <div class="col-md-3">
                    <h6>Photostream</h6>
                    <ul class="photo-steam">
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-1.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-2.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-3.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-4.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-5.jpg') }}" alt="" ></a></li>
                        <li><a href="#."><img src="{{ asset('assets/images/photo-img-6.jpg') }}" alt="" ></a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="col-md-3">
                    <h6>Categories</h6>
                    <ul class="tags">
                        <li><a href="#.">Project Manager</a></li>
                        <li><a href="#.">Business Analyst</a></li>
                        <li><a href="#.">Test Manager</a></li>
                        <li><a href="#.">Zürich</a></li>
                        <li><a href="#.">Geneva</a></li>
                        <li><a href="#.">Lausanne</a></li>
                        <li><a href="#.">Bern</a></li>
                        <li><a href="#.">Basle</a></li>
                        <li><a href="#.">Zug</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- RIGHTS -->
    <div class="rights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p> © All Rights Reserved <span class="primary-color">ProActys </span></p>
                </div>
                <div class="col-md-6 text-right"> <a href="#">Privacy Policy</a> <a href="#">Terms & Conditions</a> </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/own-menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.colio.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('js')
</body>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function () {
            $('.shouldDisappear').fadeOut();
        }, 5000);
    });
</script>
</html>
