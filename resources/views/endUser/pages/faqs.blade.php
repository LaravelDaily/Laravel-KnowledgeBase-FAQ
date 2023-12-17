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
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-carigory-1-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-carigory-1" type="button" role="tab" aria-controls="pills-carigory-1"
                        aria-selected="true">carigory-1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-carigory-2-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-carigory-2" type="button" role="tab" aria-controls="pills-carigory-2"
                        aria-selected="false">carigory-2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-carigory-3-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-carigory-3" type="button" role="tab" aria-controls="pills-carigory-3"
                        aria-selected="false">carigory-3</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-carigory-1" role="tabpanel"
                    aria-labelledby="pills-carigory-1-tab" tabindex="0">
                    <div id="accordionExample" class="accordion h-100">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h3 id="heading{{ $loop->iteration }}" class="accordion-header">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        {{ $faq->question }}
                                    </button>
                                </h3>
                                <div id="collapse{{ $loop->iteration }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordionExample">
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
                <div class="tab-pane fade" id="pills-carigory-2" role="tabpanel" aria-labelledby="pills-carigory-2-tab"
                    tabindex="0">
                    <div id="accordionExample" class="accordion h-100">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h3 id="heading{{ $loop->iteration }}" class="accordion-header">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        {{ $faq->question }}
                                    </button>
                                </h3>
                                <div id="collapse{{ $loop->iteration }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordionExample">
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
                <div class="tab-pane fade" id="pills-carigory-3" role="tabpanel" aria-labelledby="pills-carigory-3-tab"
                    tabindex="0">
                    <div id="accordionExample" class="accordion h-100">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h3 id="heading{{ $loop->iteration }}" class="accordion-header">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        {{ $faq->question }}
                                    </button>
                                </h3>
                                <div id="collapse{{ $loop->iteration }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent="#accordionExample">
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
            </div>
        </div>
    </section>

    {{-- End Faqs Section  --}}
@endsection
