@extends('endUser.Layouts.master')

@section('title', 'Package')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1 class="orange">Packages</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Packages
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->
    <!-- Start Packages Section -->
    <section class="packages">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="packages__card">
                        <h2>SILVER</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid"
                                src="{{ asset('assetsEndUser/content/assets/img/packages/silver.webp') }}"
                                alt="Silver Packages" title="Silver Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                🥈 Staff Management
                            </li>
                            <li>
                                🥈 Channel Book
                            </li>
                            <li>
                                🥈 Food menu
                            </li>
                            <li>
                                🥈 Attendance
                            </li>
                            <li>
                                🥈 Daily Reports
                            </li>
                            <li>
                                🥈 Notes
                            </li>
                            <li>
                                🥈 Media
                            </li>
                            <li>
                                🥈 Branding profile
                            </li>
                            <li>
                                🥈 Parent app
                            </li>
                            <li>
                                🥈 8 classes
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="packages__card">
                        <h2>GOLDEN</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/packages/gold.webp') }}"
                                alt="Gold Packages" title="Gold Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                🥇 Staff Management
                            </li>
                            <li>
                                🥇 Channel Book
                            </li>
                            <li>
                                🥇 Food menu
                            </li>
                            <li>
                                🥇 Attendance
                            </li>
                            <li>
                                🥇 Daily Reports
                            </li>
                            <li>
                                🥇 Notes
                            </li>
                            <li>
                                🥇 Media
                            </li>
                            <li>
                                🥇 Branding profile
                            </li>
                            <li>
                                🥇 Parent app
                            </li>
                            <li>
                                🥇 15 classes
                            </li>
                            <li>
                                🥇Policy
                            </li>
                            <li>
                                🥇News
                            </li>
                            <li>
                                🥇Attendance reports
                            </li>
                            <li>
                                🥇Academic
                            </li>
                            <li>
                                🥇Media
                            </li>
                            <li>
                                🥇Gallery
                            </li>
                            <li>
                                🥇Staff login tracking
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="packages__card">
                        <h2>DIAMOND</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid"
                                src="{{ asset('assetsEndUser/content/assets/img/packages/diamond.webp') }}"
                                alt="Diamond Packages" title="Diamond Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                💎 Staff Management
                            </li>
                            <li>
                                💎 Channel Book
                            </li>
                            <li>
                                💎 Food menu
                            </li>
                            <li>
                                💎 Attendance
                            </li>
                            <li>
                                💎 Daily Reports
                            </li>
                            <li>
                                💎 Notes
                            </li>
                            <li>
                                💎 Media
                            </li>
                            <li>
                                💎 Branding profile
                            </li>
                            <li>
                                💎 Parent app
                            </li>
                            <li>
                                💎 unlimited classes
                            </li>
                            <li>
                                💎 Policy
                            </li>
                            <li>
                                💎 News
                            </li>
                            <li>
                                💎 Attendance reports
                            </li>
                            <li>
                                💎 Academic
                            </li>
                            <li>
                                💎 Media
                            </li>
                            <li>
                                💎 Gallery
                            </li>
                            <li>
                                💎 Staff login tracking
                            </li>
                            <li>
                                💎 Parent login tracking
                            </li>
                            <li>
                                💎 Birthday
                            </li>
                            <li>
                                💎 Cash in
                            </li>
                            <li>
                                💎 Cash out
                            </li>
                            <li>
                                💎 Notifications
                            </li>
                            <li>
                                💎 Payments
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Packages Section -->
@endsection
