@extends('endUser.Layouts.master')

@section('title', 'Parents')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1 class="purple">Parents</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Parents
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->
    <!-- Start parents Section  -->
    <section>
        <div class="container">
            <h4 class="text-center fw-light main__color">
                Parents now have more control over kids' activities in nurseries and other considerations such as
                payments, menus, performance reports, and asking questions until they feel satisfied with the responses.
                This provides parents with the following:
            </h4>
            <div class="row justify-content-center">
                <div class="col-4 py-4">
                    <div class="app-types__card">
                        <a href="{{ route('endUser.parent') }}" class="app-types__card__img zoom-eff">
                            <img class="img-fluid" src="{{ asset('assetsEndUser/content/assets/img/app-types/parents.webp') }}"
                                 alt="Parents Application" title="Parents Application">
                        </a>
                        <h4 class="app-types__card__title">
                            <a href="{{ route('endUser.parent') }}" class="main-heading-card">
                                FOR PARENTS
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <h4 class="text-center fw-light main__color">
                Delivering the payments and systematically tracking them.<br>
                Greater autonomy and control over the activities of children.<br>
                The peace of mind that their kids engage in healthy and beneficial activities.<br>
                Greater involvement in their children's lives enables them to be more proactive in parenting.<br>
                Creating an environment of mutual trust and respect between parents and children.<br>
                To set a menu that aids in their child's productive mental and physical growth.<br>
                <br>
                and more...
            </h4>
        </div>
    </section>
    <!-- End parents Section  -->

    <section class="download-app py-5">
        <div class="container">
            <h3 class="text-center main__color">Download Parents App Now</h3>
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
            </div>
        </div>
    </section>
@endsection
