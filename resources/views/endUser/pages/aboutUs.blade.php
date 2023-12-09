@extends('endUser.Layouts.master')

@section('title', 'AboutUs')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>About Us</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    About Us
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    <!-- Start About Us Section  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('assetsEndUser/content/assets/img/about/logo-big.webp') }}" alt="KIDDOWZ" title="KIDDOWZ"
                         class="img-fluid wow zoomIn">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="wow fadeInRight">
                        <p class="text-center mb-4">
                            As we consider how to handle the educational processes for children in a more engaging way,
                            we
                            frequently question the veracity of Egyptian parents and nursery owners. Childhood is a
                            stage
                            that requires a lot of monitoring, whether at daycare or at home. The parental control
                            feature
                            is also included in various social networking apps now.
                        </p>
                        <p class="text-center mb-4">
                            These catalysts encourage us to produce a Mobile application for nurseries that covers all
                            kids'
                            activities. Parents and staff members can access information about what children are doing
                            in
                            nurseries and at home. The aim of the Kiddowz app is to provide a platform that can be used
                            by
                            both parents and childcare staff to monitor children's activities and access data about
                            their
                            daily activities.
                        </p>
                        <p class="text-center mb-4">
                            We give early learning nursery management with tracking and all relevant information in an
                            integrated form using our Kiddowz apps. With the help of the Kiddowz app, families can
                            become
                            more involved and devoted to the activities. Kiddowz app facilitates the exchange of
                            information
                            between parents and teachers, allowing parents to track their kids' progress in nursery
                            better.
                            It helps parents understand what their children are learning, so they can better aid them in
                            their educational development. Kiddowz is here to revolutionise the Nursery system in Egypt.
                        </p>
                    </div>
                    <a href="{{ route('endUser.contact-us') }}" class="contact__btn rounded-pill">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section  -->
@endsection
