@extends('layouts.main')

@section('content')

    <!-- SUB BANNER -->
    <section class="sub-bnr" style="background:url({{ asset('assets/images/bg/sub-bnr-bg-3.jpg') }}) no-repeat;"
             data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h1>Business Process Management</h1>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Business Process Management</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">
        <section class="shop shop-single padding-top-70 padding-bottom-70">
            <div class="container">
                <h4 class="font-normal margin-bottom-30">WHAT IS BPM?</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>

                    <div class="col-md-8">
                        <p><i class="fas fa-quote-left fa-2x fa-pull-left"></i>Gartner defines Business Process Management as "a discipline that improves enterprise performance by driving operational excellence and business agility". Think of a business as an engine and BPM as a tool to fine-tune every component of that engine in order to achieve maximum performance with minimum of gas.
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">WHY BPM?</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <i class="fas fa-quote-left fa-2x fa-pull-left"></i>To become and remain successful and
                                competitive, companies must continually improve their
                            processes. Failure to do so may result in higher costs, lower incomes, less motivated
                            employees and less satisfied customers.</p>
                        <p>
                            Business Process Management (BPM) is a powerful tool businesses can use to keep all aspects of operations running optimally.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm2.jpg') }}" alt=""> </li>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">WHAT DOES BPM BRING TO YOUR COMPANY?</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <i class="fas fa-quote-left fa-2x fa-pull-left"></i>If you are not convinced that your organization needs to implement business process management solutions as soon as possible, the following 10 reasons should help sway you:
                        </p>
                        <p>
                            1. Increase Transparency<br>
                            2. Boost in Efficiency<br>
                            3. Assure Compliance<br>
                            4. Develop Collaboration and Communication<br>
                            5. Bring more Flexibility<br>
                            6. Improve Quality<br>
                            7. Align your Processes to your Strategy<br>
                            8. Access to Accurate Information<br>
                            9. Secure your Resources and Data<br>
                            10. Monitor Performance
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">WHAT ARE THE MAIN BENEFITS OF BPM FOR YOUR COMPANY?</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <i class="fas fa-quote-left fa-2x fa-pull-left"></i>Business Process Management allows
                            companies to significantly reduce delays in the creation of product flow and
                            implementation of financial services by:
                        </p>
                        <p>
                            Eliminating non-value added activities (waste-waste)<br>
                            Defining the value from a customer's point of view<br>
                            Synchronizing the flow at an operational level<br>
                            Standardizing processes and operations<br>
                            Implementing self-management processes and performance by the team.
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
