@extends('endUser.Layouts.master')

@section('title')
    KiddowZ App
@endsection

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="owl-carousel owl-theme owl-carousel--hero">
            <div class="item">
                <img class="header__slide" src="{{ asset('assetsEndUser/content/assets/img/hero/hero-img-1.webp') }}" alt="">
            </div>
            <div class="item">
                <img class="header__slide" src="{{ asset('assetsEndUser/content/assets/img/hero/hero-img-2.webp') }}" alt="">
            </div>
        </div>
    </header>
    <!-- End Header Section  -->
    <!-- Start Option of Application  -->
    <section class="app-types py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 col-lg-3 text-sm-center">
                    <div class="app-types__card">
                        <a href="{{route('endUser.parent')}}" class="app-types__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/app-types/parents.webp') }}"
                                 alt="Parents Application" title="Parents Application">
                        </a>
                        <h4 class="app-types__card__title">
                            <a href="{{route('endUser.parent')}}" class="main-heading-card">
                                Parents App
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-3 text-sm-center">
                    <div class="app-types__card">
                        <a href="{{route('endUser.staff')}}" class="app-types__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/app-types/stuff.webp') }}"
                                 alt="Stuff Application" title="Stuff Application">
                        </a>
                        <h4 class="app-types__card__title ">
                            <a href="{{route('endUser.staff')}}" class="main-heading-card">
                                Stuff App
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Option of Aplication  -->

    <!-- Start About Section  -->
    <section class="about-section py-5">
        <div class="container">
            <h1 class="about-section__headding wow bounceInRight text-center">WE HERE, FOR YOU</h1>
            <p class="about-section__text wow bounceInRight text-center" data-wow-delay="0.5s">
                We cordially welcome all nursery owners and parents to keep their kids' growth to another dimension.<br>
                We have no limits to direct you to an unseen world of nursery management in Egypt, MENA and Gulf with
                the easy-to-navigate mobile nursery application,
                Kiddowz
            </p>
        </div>
    </section>
    <!-- End About Section  -->

    <!-- Start Features Section  -->
    <section class="features py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="main__headding">
                        Features
                    </h2>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/book.avif') }}" alt="Channel Book"
                                 title="Channel Book" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Channel Book
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/children.avif') }}" alt="Profile"
                                 title="Profile" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Profile
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/notepad.webp') }}" alt="Notes"
                                 title="Notes" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Notes
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/abc-block.webp') }}" alt="Academy"
                                 title="Academy" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Academy
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/family.webp') }}" alt="Gallery"
                                 title="Gallery" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Gallery
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/expenses.webp') }}" alt="Cash In-Out"
                                 title="Cash In-Out" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Cash In-Out
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/apple.webp') }}" alt="Food Menu"
                                 title="Food Menu" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Food Menu
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/cupcake.webp') }}" alt="Birthday"
                                 title="Birthday" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Birthday
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/mentor.webp') }}"
                                 alt="Staff Management" title="Staff Management" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Staff Management
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card">
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/attendance.webp') }}" alt="Attendance"
                                 title="Attendance" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                Attendance
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="features__card features__card--see-more">
                        <span class="see-more">See More</span>
                        <a href="{{ route('endUser.features') }}" class="features__card__icon zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/features/see-more.webp') }}" alt="And more"
                                 title="And more" width="127">
                        </a>
                        <h5 class="features__card__title">
                            <a class="main-heading-card" href="{{ route('endUser.features') }}">
                                And more...
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section  -->

    <!-- Start Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/Kindergarten_student-cuate.webp') }}"
                         alt="Kindergarten_student-cuate" title="Kindergarten_student-cuate">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="text-center fs-3">BE MORE VIGILANT</h2>
                    <p class="text-center fs-4">
                        Learning is a must from the cradle to the grave. Every age requires a particular method of
                        learning. When children are properly guided in their learning, they develop positive attitudes,
                        self-assurance, and readiness.
                    </p>
                    <p class="text-center fs-4">
                        Kiddowz covers the early stages of education. Kiddowz's, a mobile application for nurseries,
                        aims
                        to provide parents and teaching staff with the tools and guidance they need to help their
                        children excel in education.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section  -->

    <!-- Start Section  -->
    <section class="iphones py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="main__headding">
                        Take Pride in Technology.
                    </h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="iphones__card">
                        <div class="iphones__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/iphones/mediamodifier_image_2.webp') }}"
                                 alt="mediamodifier_image_2" title="mediamodifier_image_2">
                        </div>
                        <h4 class="iphones__card__title">
                            Always Available
                        </h4>
                        <p class="text-center">
                            Always know<br>
                            what to do
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="iphones__card">
                        <div class="iphones__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/iphones/mediamodifier_image_2.webp') }}"
                                 alt="mediamodifier_image_2" title="mediamodifier_image_2">
                        </div>
                        <h4 class="iphones__card__title">
                            Always Efficient
                        </h4>
                        <p class="text-center">
                            Tracking is more accessible than before
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="iphones__card">
                        <div class="iphones__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/iphones/mediamodifier_image_2.webp') }}"
                                 alt="mediamodifier_image_2" title="mediamodifier_image_2">
                        </div>
                        <h4 class="iphones__card__title">
                            Always in touch
                        </h4>
                        <p class="text-center">
                            Feel like<br>
                            you were there
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="iphones__card">
                        <div class="iphones__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/iphones/mediamodifier_image_2.webp') }}"
                                 alt="mediamodifier_image_2" title="mediamodifier_image_2">
                        </div>
                        <h4 class="iphones__card__title">
                            Always On-time
                        </h4>
                        <p class="text-center">
                            Be<br>
                            more vigilant
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="iphones__card">
                        <div class="iphones__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/iphones/mediamodifier_image_2.webp') }}"
                                 alt="mediamodifier_image_2" title="mediamodifier_image_2">
                        </div>
                        <h4 class="iphones__card__title">
                            Always There
                        </h4>
                        <p class="text-center">
                            Continually updating new features
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section  -->

    <!-- Start Section  -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid wow bounceInUp" src="{{ asset('assetsEndUser/content/assets/img/Social_media-cuate.webp') }}"
                         alt="Kindergarten_student-cuate" title="Kindergarten_student-cuate" data-wow-duration="1.5s">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="text-center fs-2 wow bounceInUp">ALL HEURISTICS IN ONE PLACE</h2>
                    <p class="text-center fs-4 fw-light">
                        Kiddowz nursery app covers a wide range of topics for kids, including education, eating habits,
                        extracurricular activities, academic records, memorable moments, photo galleries, biodata, and
                        much more. All of this information is available in one easy-to-use nursery app.
                    </p>
                    <p class="text-center fs-4 fw-light">It gives parents and teaching staff the convenience of
                        accessing all the
                        essential data related to the kid's life in one place and doing nursery follow-ups accordingly.
                        We aim to integrate both parties involved in kids grooming in nurseries to ensure that parents
                        and teachers are on the same page regarding their kids' growth and education.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section  -->

    <!-- Start How To Register  -->
    <section class="how-to-register py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="main__headding">
                        How to Register (Nursery Owner)
                    </h2>
                </div>
                <div class="col-12 col-md-3">
                    <div class="how-to-register__card">
                        <div class="how-to-register__card__icon">
                            <img class="img-fluid zoom-eff" width="150"
                                 src="{{ asset('assetsEndUser/content/assets/img/register/download_1.avif') }}" alt="download" title="download">
                        </div>
                        <h4 class="text-center">Download App</h4>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="how-to-register__card">
                        <div class="how-to-register__card__icon">
                            <img class="img-fluid zoom-eff" width="150" src="{{ asset('assetsEndUser/content/assets/img/register/like.avif') }}"
                                 alt="Like" title="Like">
                        </div>
                        <h4 class="text-center">Create New Nursery</h4>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="how-to-register__card">
                        <div class="how-to-register__card__icon">
                            <img class="img-fluid zoom-eff" width="150" src="{{ asset('assetsEndUser/content/assets/img/register/app.avif') }}"
                                 alt="app" title="app">
                        </div>
                        <h4 class="text-center">Log-In</h4>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <a href="https://api.whatsapp.com/send?phone=201155777100">
                        <div class="how-to-register__card">
                            <div class="how-to-register__card__icon">
                                <img class="img-fluid zoom-eff" width="150"
                                     src="{{ asset('assetsEndUser/content/assets/img/register/whatsapp_2.avif') }}" alt="whatsapp" title="whatsapp">
                            </div>
                            <h4 class="text-center text-dark">Contact Us</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End How To Register  -->

    <!-- Start Download Section  -->
    <section class="download-app">
        <div class="container">
            <h3 class="text-center main__color">Parents' App</h3>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-3">
                    <div class="download-app__card">
                        <a href="https://apps.apple.com/eg/app/kiddowz-for-parents/id6445867379" target="_blank">
                            <div class="download-app__card__img zoom-eff">
                                <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/app-store-icon.avif') }}" alt="app store"
                                     title="app store">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="download-app__card">
                        <a href="https://play.google.com/store/apps/details?id=com.kiddowz.parentapp" target="_blank">
                            <div class="download-app__card__img zoom-eff">
                                <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/google-play-icon.avif') }}"
                                     alt="Google play store" title="Google play store">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 mt-5 mb-4">
                    <h3 class="text-center main__color">Nursery and Staff App</h3>
                </div>
                <div class="col-12 col-md-3">
                    <div class="download-app__card">
                        <a href="https://play.google.com/store/apps/details?id=com.kiddowz.nurseryapp">
                            <div class="download-app__card__img zoom-eff">
                                <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/google-play-icon.avif') }}"
                                     alt="Google play store" title="Google play store">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Download Section  -->
@endsection
