@extends('layouts.main')

@section('content')

    <!-- SUB BANNER -->
    <section class="sub-bnr" style="background:url({{ asset('assets/images/bg/sub-bnr-bg-3.jpg') }}) no-repeat;"
             data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container">
                <h1>Enterprise Content Management</h1>
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Enterprise Content Management</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">
        <section class="shop shop-single padding-top-70 padding-bottom-70">
            <div class="container">
                <h4 class="font-normal margin-bottom-30">Enterprise Content Management (ECM)</h4>
                <p>is an umbrella term for the strategy, technology and method used to capture, manage, access, integrate, measure and store information. This term is now more associated with business process automation and content strategies than just as an ECM system.</p>

                <h4 class="font-normal margin-bottom-30 margin-top-30">business process automation and workflow consulting</h4>
                <p>ProActys provides business process automation and workflow consulting focused on critical business process and document flow challenges related to enterprise content management (ECM) and document management. Our experience has evolved a prioritization strategy that first identifies and addresses processes with large potential cost savings to maximize their return on investment. Through meetings and discussions within focused areas of an organization and reviews of current documented processes, ProActys will identify solutions that address day-to-day needs with high ROI potential.</p>

                <h4 class="font-normal margin-bottom-30 margin-top-30">Our approach</h4>
                <p>Business process drives everything our clients set out to do. By concentrating first on processes and how people engage in those processes, and later, on the technology to help make the organization more efficient, ProActys focuses on designing the most efficient way to accomplish your goals while leveraging your existing investment in technology and infrastructure.</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="font-normal margin-bottom-30 margin-top-30">DEMATERIALIZATION AND WORKFLOW AUTOMATION</h4>
                        <p>Dematerialization consists in adapting the overall organization so that workflows are
                            based on digital documents (i.e. files such as .pdf) rather than on paper documents. It
                            requires to:</p>
<p>
                            adapt the infrastructure and the systems architecture to enable the dematerialization of paper documents (scanning) and the management of digital documents across systems and users;
                            integrate digital documents to workflows in order to automate the processing of embedded
    data</p><p>

                            Business processes are automated, in whole or part, which allows documents, information or tasks to pass from one participant to another for action, according to a set of procedural rules.</p>

                        <h4 class="font-normal margin-bottom-30 margin-top-30">AREAS OF EXPERTISE</h4>
                        <p>ProActys provides business process consulting focused on critical business process and document flow challenges within the following key areas:</p>

                        <h5 class="font-normal margin-bottom-25 margin-top-25">Banking</h5>
                        <p>
                            - Client Onboarding - KYC<br>
                            - Credit Request<br>
                            - Real Estate Lending Business<br>
                            - Account Closure<br>
                            - Management Mandates<br>
                            - Watchlist and Douteux Flow<br>
                            - Structured Products (FX and non FX) tool
                        </p>

                        <h5 class="font-normal margin-bottom-25 margin-top-25">Insurance</h5>
                        <p>
                            - Claims Processing<br>
                            - New Business Processing<br>
                            - Underwriting
                        </p>

                        <h5 class="font-normal margin-bottom-25 margin-top-25">Pension Funds</h5>
                        <p>
                            - Core System<br>
                            - Premium calculation<br>
                            - Pensions Payment
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="font-normal margin-bottom-30 margin-top-30">PROCESS AUTOMATION AND CONTENT MANAGEMENT SOLUTION</h4>
                        <p>ProActys will accompany you in the choice of a ECM/BPM software. The ideal solution should include elements of each of the following categories:</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Capture</h5>
                        <p>Your ECM solution should be able to capture any file type from any physical location, and automatically classify your document.</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Manage</h5>
                        <p>ECM helps you to optimize your processes, driving efficiency by eliminating wasted time.</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Access</h5>
                        <p>An ECM solution should allow you to access your important information quickly and easily.</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Integrate</h5>
                        <p>Your ECM solution should integrate with all your business applications (Core Banking System, ERP, CRM, ...)</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Measure</h5>
                        <p>Your ECM solution should allow you to monitor and report on the information and activity within your solution, without involving IT or database administrators.</p>

                        <h5 class="font-normal margin-bottom-15 margin-top-25">Store</h5>
                        <p>An ideal ECM solution will provide affordable redundancy of your data.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
