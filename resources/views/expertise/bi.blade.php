@extends('layouts.main')

@section('content')

    <!-- SUB BANNER -->
    <section class="sub-bnr" style="background:url({{ asset('assets/images/bg/sub-bnr-bg-3.jpg') }}) no-repeat;"
             data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h1>Business Intelligence</h1>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Business Intelligence</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">
        <section class="shop shop-single padding-top-70 padding-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bi.png') }}" alt=""> </li>
                    </div>

                    <div class="col-md-6">
                        <p class="font-bold">
                            &laquo; Facts do not cease to exist because they are ignored. &raquo;<br>
                            Aldous Huxley
                        </p>
                        <p>Organizations need to be nimble in anticipating growth opportunities and competitive
                            disruption, leveraging scarce resources and diversifying risk. Flexibility is critical as
                            companies will need to be able to adapt their strategies in real time to avoid being left
                            behind.</p><p>

                            Assist our clients' efforts to improve the delivery of capital projects and help meet their program objectives</p><p>
                            Evaluate and support implementation of sound cost reduction initiatives, monitor operating budgets and develop Key Performance Indicators contributing to process improvement</p><p>
                            Define, implement and monitor Key Performance Indicators contributing to process improvements for internal and where applicable external benchmarking</p><p>
                            Strengthen the role that the Finance and the Procurement functions play in steering the business</p><p>
                            Help to define and deploy the strategy into department, teams and individual goals and monitor progress to proactively guide business.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
