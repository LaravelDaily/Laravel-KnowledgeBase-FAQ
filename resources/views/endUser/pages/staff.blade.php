@extends('endUser.Layouts.master')

@section('title', 'Staff')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1 class="green">Stuff</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Stuff
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->
    <!-- Start parents Section  -->
    <section>
        <div class="container">
            <h4 class="text-center fw-light main__color">
                Teaching staff may now manage various permissions and access levels for their pupils, and they can alert
                the parents by sending reports regarding nursery follow-ups to their mobile devices. Kiddowz features
                provide teachers with the following:
            </h4>
            <div class="row justify-content-center">
                <div class="col-4 py-4">
                    <div class="app-types__card">
                        <a href="javascript:void()" class="app-types__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/app-types/stuff.webp') }}"
                                 alt="Stuff Application" title="Stuff Application">
                        </a>
                        <h4 class="app-types__card__title ">
                            <a href="{{ route('endUser.staff') }}" class="main-heading-card">
                                For Stuff
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <h4 class="text-center fw-light main__color">
                An efficient and effective way to track and monitor the progress of their students.<br>
                Get to know the advanced capabilities of kids in the nursery.<br>
                Better equipment to support their pupils' learning goals and ensure that all students have a safe and
                secure nursery in Egypt.<br>
                Maintaining an up-to-date record of their student's progress and tracking their behavior enables them to
                identify areas where the student may need additional help or guidance.<br>
                <br>
                <span class="fw-bold text-dark">Get started and get integrated.</span>
            </h4>
        </div>
    </section>
    <!-- End parents Section  -->

    <!-- Start Download Section  -->
    <section class="download-app py-5">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 mt-5 mb-4">
                    <h3 class="text-center main__color">Download Staff App Now</h3>
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
