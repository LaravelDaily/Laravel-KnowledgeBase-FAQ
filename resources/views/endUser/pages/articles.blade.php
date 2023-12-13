@extends('endUser.Layouts.master')

@section('title', 'Faqs')

@section('content')
    <!-- Start Header Section  -->
    <header class="header">
        <div class="header__banar">
            <h1>Articles</h1>
            <ul class="header__banar__breadcrumb">
                <li>
                    <a href="{{ route('endUser.home') }}">
                        Home
                    </a>
                </li>
                <li>
                    Articles
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    {{-- Start Blogs Section  --}}
    <section class="articles">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                {{--
                    when you loop on col to render
                    i need the sracture like this 

                    1
                    <div class="col">
                        <div class="articles__card wow slideInUp"></div>
                    </div>
                    2
                    <div class="col">
                        <div class="articles__card wow slideInUp" data-wow-delay="100ms"></div>
                    </div>
                    3
                    <div class="col">
                        <div class="articles__card wow slideInUp" data-wow-delay="200ms"></div>
                    </div>
                    and repeat it 
                    --}}
                <div class="col">
                    <div class="articles__card wow slideInUp">
                        <a href="{{ route('endUser.articles.single_article') }}" class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </a>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="la la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="articles__card wow slideInUp" data-wow-delay="100ms">
                        <a href="{{ route('endUser.articles.single_article') }}" class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </a>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="las la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="articles__card wow slideInUp" data-wow-delay="200ms">
                        <div class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </div>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="las la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="articles__card wow slideInUp">
                        <div class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </div>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="las la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="articles__card wow slideInUp" data-wow-delay="100ms">
                        <a href="{{ route('endUser.articles.single_article') }}" class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </a>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="las la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
                <div class="col">
                    <div class="articles__card wow slideInUp" data-wow-delay="200ms">
                        <a href="{{ route('endUser.articles.single_article') }}" class="articles__card__img">
                            <img src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}" alt="">
                        </a>
                        <a href="{{ route('endUser.articles.single_article') }}">
                            <h4 class="articles__card__headding">
                                test
                            </h4>
                        </a>
                        <span class="articles__card__date">
                            May 11 2023
                        </span>
                        <p class="articles__card__pragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero voluptate quos
                            placeat? Hic blanditiis impedit aperiam molestiae cumque magni!
                        </p>
                        <a class="articles__card__action" href="{{ route('endUser.articles.single_article') }}"
                            target="_blank">Read More<i class="las la-chevron-right articles__card__action__arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Blogs Section  --}}
@endsection
