@extends('layouts.main')

@section('content')
    <!-- HOME MAIN SLIDER -->
    <section class="home-slide">
        <ul class="slides">

            <!-- SLIDER 1 -->
            <li class="slide-img-1" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>Business Process Management</h1>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a>
                </div>
            </li>

            <!-- SLIDER 2 -->
            <li class="slide-img-2" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>Enterprise Content Management</h1>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> </div>
            </li>

            <!-- SLIDER 2 -->
            <li class="slide-img-1" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>Business Intelligence</h1>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> </div>
            </li>

            <!-- SLIDER 2 -->
            <li class="slide-img-2" data-stellar-background-ratio="0.6">
                <div class="position-center-center">
                    <h1>Digitalisation</h1>
                    <a href="#." class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> </div>
            </li>
        </ul>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- SERVICES -->
        <section class="services padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Services</h4>
                </div>
            </div>
            <div class="best-services">
                <!-- Row -->
                <div class="container">
                    <ul class="row list">
                        <!-- Analytics -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="far fa-chart-bar"></i>
                                    <h5>Change Management</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>

                        <!-- Storage -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="fa fa-archive"></i>
                                    <h5>Project Management</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>

                        <!-- Security -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="fas fa-shield-alt"></i>
                                    <h5>Business Analysis</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="fa fa-rocket"></i>
                                    <h5>enterprise architecture</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="far fa-comments"></i>
                                    <h5>agility coaching</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>

                        <!-- Worth -->
                        <li class="col-md-4">
                            <article class="thumb">
                                <a class="button" href="#">
                                    <i class="fa fa-bullhorn"></i>
                                    <h5>Optimization process</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
                                </a>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="portfolio light-gray-bg padding-top-70 padding-bottom-20">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>LATESTS CAREERS</h4>
                </div>

                <!-- PORTOFLIO ITEMS FILTER -->
                <div class="text-center">
                    <div id="ajax-work-filter" class="cbp-l-filters-buttonCenter filter-style-2">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".ana" class="cbp-filter-item"> Project Manager
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".dial" class="cbp-filter-item"> Business Analyst
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".direc" class="cbp-filter-item"> Test Manager
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".growth" class="cbp-filter-item"> Zürich
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".sec" class="cbp-filter-item">Geneva
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".storage" class="cbp-filter-item">Lausanne
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".storage" class="cbp-filter-item">Bern
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".storage" class="cbp-filter-item">Basle
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".storage" class="cbp-filter-item">Zug
                            <div class="cbp-filter-counter"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PORTFOLIO ROW -->
            <div class="ajax-work col-3">
                <!-- ITEMS -->
                <div class="cbp-item ana dial growth">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-1.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-1.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana dial sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-2.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-2.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-3.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-3.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item sec storage">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-4.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-4.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana sec">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-5.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i
                                            class="fa fa-link"></i> </a>
                                <a href="{{ asset('assets/images/portfolio/img-5.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>

                <!-- ITEMS -->
                <div class="cbp-item ana dial direc">
                    <article class="item"><img class="img-responsive" src="{{ asset('assets/images/portfolio/img-6.jpg') }}" alt="" >
                        <!-- Hover -->
                        <div class="over-detail">
                            <!-- Link -->
                            <div class="top-detail"> <a href="/" class="cbp-singlePage"><i class="fa fa-link"></i>
                                </a>
                                <a href="{{ asset('assets/images/portfolio/img-6.jpg') }}" class="cbp-lightbox" data-title=""><i class="icon-magnifier"></i></a> </div>
                            <!-- TITTLE HEADING -->
                            <div class="bottom-detail">
                                <h3>Long Project Title can go Here</h3>
                                <span>Category Name</span> </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- BLOG -->
        <section class="blog padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>NEXT TRAINING SESSIONS</h4>
                </div>
                <!-- Blog Row -->
                <div class="row blog-slide">
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-1.jpg') }}" alt="" >

                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>

                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">AGILITY</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-2.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">Scrum</a> <span>By Admin  /  2
                                    Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">CHANGE MANAGEMENT</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-2.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">EU LAWs vs US Laws</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">PROJECT MANAGEMENT</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                    <!-- Blog Post -->
                    <div class="col-md-12 no-padding">
                        <article> <img class="img-responsive" src="{{ asset('assets/images/blog/img-3.jpg') }}" alt="" >
                            <!-- Date -->
                            <div class="date"> 19 <span>MAY</span> </div>
                            <!-- Detail -->
                            <div class="post-detail"> <a href="#." class="post-tittle">BUSINESS ANALYSIS</a> <span>By Admin  /  2 Comments</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features light-gray-bg padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>INDUSTRIES</h4>
                </div>

                <!-- Features -->
                <div class="list-style-featured">
                    <div class="row no-margin">
                        <!-- LIST LEFT -->
                        <div class="col-md-4 no-padding">
                            <ul class="text-right">
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Banks & Financial</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fa fa-paint-brush"></i> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Insurance Companies / Pension Funds</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fa fa-tablet"></i> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Public Sector</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                        <div class="media-right">
                                            <div class="icon"> <i class="fab fa-chrome"></i> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- LIST IMAGE -->
                        <div class="col-md-4 text-center no-padding"> <img class="img-responsive"
                                                                           src="{{ asset('assets/images/iphone.png') }}" alt=""> </div>

                        <!-- LIST ICON RIGHT -->
                        <div class="col-md-4 no-padding">
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="fa fa-cog"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Energy &amp; Commodities</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="icon-layers"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Transport</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon"> <i class="icon-bulb"></i> </div>
                                        </div>
                                        <div class="media-body">
                                            <h6>Not for Profit Organizations / Specialized agencies</h6>
                                            <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus,  ultricies id orci.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testi -->
        <section class="testi-bg padding-top-100 padding-bottom-100" >
            <div class="container">
                <div class="testi">
                    <p>Good reference</p>
                    <h6>Chantal Bellue / <span class="primary-color">ProActys Inc.</span></h6>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="light-gray-bg padding-top-70 padding-bottom-70">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Team</h4>
                </div>

                <!-- Team -->
                <div class="team">
                    <div class="row">

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-2.jpg') }}"
                                           alt="" >
                                <h5>Chantal</h5>
                                <span>CEO</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-1.jpg') }}"
                                           alt="" >
                                <h5>Sylvain</h5>
                                <span>Human Resources</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-3.jpg') }}" alt="" >
                                <h5>Luca</h5>
                                <span>New Business Manager</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>

                        <!-- Member -->
                        <div class="col-md-3">
                            <article> <img class="img-responsive" src="{{ asset('assets/images/team-img-1-1.jpg') }}"
                                           alt="" >
                                <h5>Jean-Marc</h5>
                                <span>Public Relations</span>
                                <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci.</p>
                                <ul class="social">
                                    <li><a href="#."><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#."><i class="fab fa-google"></i></a></li>
                                    <li><a href="#."><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter -->
        <section class="counter padding-top-50 padding-bottom-50">
            <div class="container">

                <!-- Team Member -->
                <ul class="row">
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                                                        data-refresh-interval="10" data-to="2016"
                                                                        data-from="0"></span> </span>
                            <h5 class="lightGray">Creation date</h5>
                        </div>
                    </li>

                    <!-- Line Of Codes -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                                                        data-refresh-interval="10" data-to="3"
                                                                        data-from="0"></span> </span>
                            <h5 class="weightH5">Cantons included</h5>
                        </div>
                    </li>

                    <!-- Satisfied Client -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="92" data-from="0"></span> </span>
                            <h5>Realized projects</h5>
                        </div>
                    </li>

                    <!-- PSD file included -->
                    <li class="col-md-3">
                        <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="2980" data-from="0"></span> </span>
                            <h5>Happy customers</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Counter -->
        <section class="clients padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center">
                    <h4>Our Amazing Clients</h4>
                    <span>We trust in longlasting partnerships with the most important brands on the market</span> </div>

                <!-- Clients -->
                <div class="single-slide">
                    <div class="item">
                        <ul class="row col-5">
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-2.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-5.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="row col-5">
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-4.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-5.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-3.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-1.jpg') }}" alt=""></a></li>
                            <li><a href="#."><img class="img-responsive" src="{{ asset('assets/images/client-img-2.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
