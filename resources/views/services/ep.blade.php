@extends('layouts.main')

@section('content')

    <!-- SUB BANNER -->
    <section class="sub-bnr" style="background:url({{ asset('assets/images/bg/sub-bnr-bg-3.jpg') }}) no-repeat;"
             data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h1>Enterprise Performance</h1>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Enterprise Performance</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">
        <section class="shop shop-single padding-top-70 padding-bottom-70">
            <div class="container">
                <h4 class="font-normal margin-bottom-30">ORGANIZATIONAL CHANGE MANAGEMENT</h4>
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>

                    <div class="col-md-12">
                        <p class="margin-bottom-30 margin-top-30">Shifting a culture requires a delicate, systematic,
                            and well-planned approach to avoid failure and affect positive change.</p>
                        <p>
                            ProActys can help your organization through the necessary transition, ensuring you are
                            ready for change, are prepared to lead the change, and are able to validate that change has occurred.
                        </p>
                        <p>
                            To maintain a controlled flow of information within an organization can be a difficult task. It is vital that everyone gets the information that was intended for them.
                        </p>
                        <p>
                            - Drive Operational Excellence across various production centers or functions and support
                            constant improvement of the gross profit margin<br>
                            - Write the procedures and implement controls within the organization<br>
                            - Support the development and the implementation of best practices for internal controls<br>
                            - Lead Kaizen events: improving standardized activities and processes to eliminate waste<br>
                            - Benchmark outsourcing vs. in house core competency models to maximise resource
                            allocation and business performance<br>
                            - Implement highly complex, large-scale and strategic business initiatives<br>
                            - Design, optimize and automate workflows and transversal processes.</p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">CHANGE READINESS ASSESSMENT</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>

                    <div class="col-md-8">
                        <p>A Change Readiness Assessment documents your organizational climate in terms of its
                            culture, its history with change/transformation initiatives, and its resistance to change
                            . ProActys uses a series of diagnostic tools to determine your organization's readiness
                            for a successful transformation effort.</p>
                        <p>
                            Information on attitudes and behaviors gathered during stakeholder interviews and surveys allows us to collectively identify areas of concern and barriers your are likely to encounter during your change efforts.
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">CHANGE MANAGEMENT ACTION PLAN</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>A Change Management Action Plan defines the transition path from the old way of doing business to the new. For each area of concern identified in the Change Readiness Assessment, ProActys works collaboratively with your organization's change agents to develop specific action steps to help mitigate the impact of the change management issues. These actions are designed to help overcome resistance, reduce the impact of past history, and convey a shared vision for acceptance into the business culture. Documented communication strategies are essential to ensure that stakeholders are receiving critical pieces of information at the right intervals.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm2.jpg') }}" alt=""> </li>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">CHANGE MONITORING AND REINFORCEMENT</h4>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm1.jpg') }}" alt=""> </li>
                    </div>
                    <div class="col-md-8">
                        <p>
                            Change Monitoring and Reinforcement activities are essential to validate the change has
                            been accepted and put into practice.</p><p>

                            To monitor change progress, ProActys can help you perform periodic reviews of the change initiatives identified in the Change Management Action Plan to confirm the transition is moving along as planned. If these reviews something is going awry, it serves as a trigger to immediately initiate actions required to address the issues so change efforts do not falter.</p><p>

                            Our change reinforcement services support cultural acceptance and include mentoring, coaching, workshops, and training.
                        </p>
                    </div>
                </div>

                <h4 class="font-normal margin-bottom-30 margin-top-30">PROCESS OPTIMIZATION</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            As core systems are modernized, business rules and processes have to be reevaluated and streamlined. Once that step is done, you are faced with the challenge of re-educating your employees on the new processes and systems.</p><p>

                            To avoid this situation, ProActys would advise you to first conduct a cross-functional business process improvement initiative and define performance scorecards. This information will give your employees insight into how their behaviors impact their performance metrics so they can more easily identifie opportunities to improve and streamline processes.</p><p>

                            As new systems and processes are rolled out, the activity data and performance scorecards will help management monitor application usage and process adoption.</p><p>

                            By adding people back into equation, ProActys can help you improve your operational efficiency not only through system and processes, but also by enhancing the efficiency of your greatest ressource - your staff.
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ asset('assets/img/expertise/bpm2.jpg') }}" alt=""> </li>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
