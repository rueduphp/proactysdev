@extends('layouts.main')

@section('content')

    <!-- SUB BANNER -->
    <section class="sub-bnr" style="background:url({{ asset('assets/images/bg/sub-bnr-bg-3.jpg') }}) no-repeat;"
             data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h1>Digital Transformation</h1>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Digital Transformation</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">
        <section class="shop shop-single padding-top-70 padding-bottom-70">
            <div class="container">
                <h4 class="font-normal margin-bottom-30">THE WAY TO INTELLIGENT ENTERPRISE</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>

                    <div class="col-md-8">
                        <p><i class="fas fa-quote-left fa-2x fa-pull-left"></i>The fourth industrial revolution ushered us in the "intelligence age" - and changed business life as we knew it up to now. Artificial intelligence, for example, enables the automation of numerous processes. The consequences for companies: in the future, employees can spend more time on value-adding and creative work.
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">THE INTELLIGENT ENTERPRISE: THE FUTURE OF THE DIGITAL ENTREPRISE</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <i class="fas fa-quote-left fa-2x fa-pull-left"></i>PROACTYS assists its customer in their transition to Intelligent Enterprise. so that they do not have to react to future developments, but can actively advance them, especially in these 3 areas:
                        </p>
                        <p>
                            1. Digital implementation - combining the talent, tools and experience needed to create
                            technology solutions for the digital world.<br>

                            2. Business Process Agility - reducing complexity by introducing agile processes<br>

                            3. Perspective and Innovation - combining artificial intelligence with human intelligence to stimulated targeted innovation.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm2.jpg') }}" alt=""> </li>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">WAVES OF DISRUPTION</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <span class="font-bold">1995+</span> Photography, Music, Video Rental<br>
                            <span class="font-bold">2005+</span>  HR, Travel, Print Media, TV<br>
                            <span class="font-bold">2015+</span>  Retail, Finance, Education, Automotive, Healthcare, ...<br>
                            <span class="font-bold">--> All safe havens will be subject to digital disruption!</span>
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">FROM STRATEGY TO IMPLEMENTATION</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            ProActys wil accompany you through this challenging process:
                        </p>
                        <p>
                            1. Understand disruption<br>
                            2. See the future<br>
                            3. Create a strategy<br>
                            4. Make a roadmap:
                        </p>

                        <p><span class="font-bold">5. Change organization</span>
                        <p class="padding-left-25">
                            - Digital governance and Digital leadership
                        </p>
                        </p>

                        <p><span class="font-bold">6. Change solutions</span>
                        <p class="padding-left-25">
                            - Service product design<br>
                            - Platform<br>
                            - Data
                        </p>
                        </p>

                        <p><span class="font-bold">7. Change business</span>
                        <p class="padding-left-25">
                            - Plan as a startup<br>
                            - Incubate (inside out)<br>
                            - Accelerate (outside in)
                        </p>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm2.jpg') }}" alt=""> </li>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
