@extends('endUser.Layouts.master')

@section('title', 'Faqs')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>Faqs</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Faqs
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    {{-- Start Faqs Section  --}}
    <section class="faqs">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 mb-3 mb-lg-0 order-1">
                    <div id="accordionExample" class="accordion h-100">
                        <div class="accordion-item">
                            <h3 id="headingOne" class="accordion-header">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique
                                        cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 id="headingTwo" class="accordion-header">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique
                                        cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 id="headingThree" class="accordion-header">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique
                                        cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 id="headingFour" class="accordion-header">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique
                                        cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 id="headingfive" class="accordion-header">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!
                                </button>
                            </h3>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique
                                        cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0 order-lg-2">
                    <div class="text-center">
                        <img class="wow slideInUp" height="100%" width="100%"
                            src="{{ asset('assetsEndUser/content/assets/img/faqs/faqs-img.svg') }}" alt=""
                            title="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- End Faqs Section  --}}
@endsection
