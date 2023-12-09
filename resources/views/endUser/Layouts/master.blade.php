<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   @include('endUser.Layouts.partials.head')
</head>

<body>
<!-- Start NavBar  -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('endUser.home') }}">
            <img src="{{ asset('assetsEndUser/content/assets/img/logo.avif') }}" alt="kiddowz-logo" title="kiddowz-logo" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        @include('endUser.Layouts.partials.nav')
    </div>
</nav>
<!-- End NavBar  -->

<!-- Start mobile Nav  -->
@include('endUser.Layouts.partials.navMobile')
<!-- End mobile Nav  -->

@yield('content')
<!-- Start Footer  -->
<footer class="footer pt-5">
    <div class="container b-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>KiddowZ</h3>
                <p>Kiddowz is virtual but leads you toward reality. Reality is a must while nourishing your kids.
                    Kiddowz is a seed, and your kid's growth is a tree.</p>
                <div class="row row-cols-1 row-cols-md-2 g-2 mb-2">
                    <div class="col">
                        <div class="footer__location">
                            <div class="footer__location__icon">
                                <i class="las la-map-marker-alt"></i>
                            </div>
                            <p class="footer__location__text">
                                EGYPT
                            </p>
                        </div>
                    </div>
                    <div class="footer__location">
                        <div class="footer__location__icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <p class="footer__location__text">
                            (+2) 01155 777 100
                        </p>
                    </div>
                    <div class="footer__location">
                        <div class="footer__location__icon">
                            <i class="las la-envelope"></i>
                        </div>
                        <p class="footer__location__text">
                            support@kiddowz.com
                        </p>
                    </div>
                </div>
                <h4>Visit Us</h4>
                <ul class="footer__social mb-2">
                    <li>
                        <a href="#">
                            <i class="lab la-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="lab la-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <img class="d-block mx-auto" src="{{ asset('assetsEndUser/content/assets/img/logo.avif') }}" alt="logo" title="logo"
                     width="150">
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        All Rights Reserved © 2023 KIDDOWZ
    </div>
</footer>
<!-- End Footer  -->

@include('endUser.Layouts.partials.footerJs')
</body>

</html>
