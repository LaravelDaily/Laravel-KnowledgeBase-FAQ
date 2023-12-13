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
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h3 id="heading{{ $loop->iteration }}" class="accordion-header">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                                       {{ $faq->question }}
                                    </button>
                                </h3>
                                <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="heading{{ $loop->iteration }}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
