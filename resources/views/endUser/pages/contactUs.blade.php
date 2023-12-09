@extends('endUser.Layouts.master')

@section('title', 'ContactUs')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>Contact Us</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    <!-- Start Contact Us Section  -->
    <section class="py-5">
        <div class="container">
            <p class="fw-normal text-center fs-5">
                We love to hear from you on our customer service, merchandise, website or any topics you want to share
                with us. Your comments and suggestions will be appreciated. Please complete the form below.
            </p>
            <div class="d-flex justify-content-center align-items-center mb-4">
                <i class="las la-map-marker-alt"></i>
                EGYPT
            </div>
            <div class="d-flex justify-content-center align-items-center mb-4">
                <i class="las la-phone"></i>
                (+2) 01155 777 100
            </div>
            <div class="d-flex justify-content-center align-items-center mb-4">
                <i class="lar la-envelope"></i>
                support@kiddowz.com
            </div>
            <a href="https://api.whatsapp.com/send?phone=201155777100" target="_blank"
               class="whatsapp__btn rounded-pill">
                Whats App
            </a>
        </div>
    </section>
    <!-- End Contact Us Section  -->
@endsection
