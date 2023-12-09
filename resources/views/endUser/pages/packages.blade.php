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
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="packages__card">
                        <h2>FREE</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/packages/star.webp') }}" alt="Basic Packages"
                                 title="Basic Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                🤍 Parent Questions
                            </li>
                            <li>
                                🤍 Notes
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="packages__card">
                        <h2>SILVER</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/packages/silver.webp') }}" alt="Silver Packages"
                                 title="Silver Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                🥈 Parent Questions
                            </li>
                            <li>
                                🥈 Notes
                            </li>
                            <li>
                                🥈 Channel Book
                            </li>
                            <li>
                                🥈 Attendance
                            </li>
                            <li>
                                🥈 Reports
                            </li>
                            <li>
                                🥈 Food Menu
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="packages__card">
                        <h2>GOLDEN</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/packages/gold.webp') }}" alt="Gold Packages"
                                 title="Gold Packages">
                        </div>
                        <ul class="packages__card__list">
                            <li>
                                🥇 Parent Questions
                            </li>
                            <li>
                                🥇 Notes
                            </li>
                            <li>
                                🥇 Channel Book
                            </li>
                            <li>
                                🥇 Attendance Log
                            </li>
                            <li>
                                🥇 Food Menu
                            </li>
                            <li>
                                🥇 Academic
                            </li>
                            <li>
                                🥇 Gallery
                            </li>
                            <li>
                                🥇 Cash In
                            </li>
                            <li>
                                🥇 Cash Out
                            </li>
                            <li>
                                🥇 Birthdates
                            </li>
                            <li>
                                🥇 Staff Management
                            </li>
                            <li>
                                🥇 Attendance Report
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="packages__card">
                        <h2>DIAMOND</h2>
                        <div class="packages__card__img zoom-eff mb-3">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/packages/diamond.webp') }}"
                                 alt="Diamond Packages" title="Diamond Packages">
                        </div>
                        <h2 class="mt-5 pt-5">Comming Soon</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Packages Section -->

    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-medium mb-4">🌟 All Packages are Includes:</h2>
            <p class="text-center fs-5 lh-lg fw-medium">
                ✅ Unlimited Classes<br>
                ✅ Unlimited Kids<br>
                ✅ Nursery Logo<br>
                ✅ Nursery Contacts<br>
                ✅ Nursery Address<br>
                ✅ Nursery Policy<br>
                ✅ Customer Support<br>
                ✅ Multi Users<br>
            </p>
        </div>
    </section>
@endsection
