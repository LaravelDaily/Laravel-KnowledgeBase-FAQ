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
                @foreach ($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="pills-category-{{ $category->id }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-category-{{ $category->id }}"
                                type="button" role="tab" aria-controls="pills-category-{{ $category->id }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                data-category-id="{{ $category->id }}">
                            {{ $category->category }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($categories as $category)
                <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="pills-category-{{ $category->id }}" role="tabpanel" aria-labelledby="pills-category-{{ $category->id }}-tab">

                </div>
                @endforeach
{{--                <div class="tab-pane fade show active" id="pills-carigory-1" role="tabpanel"--}}
{{--                    aria-labelledby="pills-carigory-1-tab" tabindex="0">--}}
{{--                    <div id="accordionExample" class="accordion h-100">--}}
{{--                        <div class="accordion-item">--}}
{{--                                <h3 id="headingOne" class="accordion-header">--}}
{{--                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"--}}
{{--                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, sed!--}}
{{--                                    </button>--}}
{{--                                </h3>--}}
{{--                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"--}}
{{--                                     data-bs-parent="#accordionExample">--}}
{{--                                    <div class="accordion-body">--}}
{{--                                        <p>--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odit similique--}}
{{--                                            cupiditate cum accusamus blanditiis beatae natus ipsam, facilis,--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    {{-- End Faqs Section  --}}
@endsection

@push('js')
    <script !src="">
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.nav-link[data-category-id]');

            function loadCategoryContent(categoryId) {
                const tabContent = document.querySelector(`#pills-category-${categoryId}`);

                if (tabContent) {
                    fetch(`/faq-category/${categoryId}`)
                        .then(response => response.json())
                        .then(data => {
                            const faqContent = data.map(faq =>
                                `<div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${faq.id}">
                                    ${faq.question}
                                </button>
                            </h3>
                            <div id="collapse-${faq.id}" class="accordion-collapse collapse">
                                <div class="accordion-body">${faq.answer}</div>
                            </div>
                        </div>`).join('');

                            tabContent.innerHTML = `<div class="accordion h-100">${faqContent}</div>`;
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    console.error('Tab content area not found for category:', categoryId);
                }
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    const categoryId = this.getAttribute('data-category-id');
                    loadCategoryContent(categoryId);
                });
            });

            // Load content for the first tab on page load
            if (tabs.length > 0) {
                const firstTabCategoryId = tabs[0].getAttribute('data-category-id');
                loadCategoryContent(firstTabCategoryId);
            }
        });

    </script>
@endpush
