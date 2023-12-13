@extends('endUser.Layouts.master')

@section('title', 'name of single article')

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
                    <a href="{{ route('endUser.articles') }}">
                        ARTICLES
                    </a>
                </li>
                <li>
                    The Name Of Single Article
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    {{-- Start Single Article  --}}
    <section class="single-article">
        <div class="container">
            <img class="single-article__img" src="{{ asset('assetsEndUser/content/assets/img/articles/blog-1.webp') }}"
                alt="">

            <div class="single-article__content pt-3">
                <span class="single-article__content__date">
                    May 11 2023
                </span>
                <h2 class="single-article__content__headding">
                    Title Of Single Article
                </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                </p>
                <ol>
                    <li>lorem10</li>
                    <li>lorem10</li>
                    <li>asdsasd
                        <ul>
                            <li>asdnllsa</li>
                            <li>asdnllsa</li>
                            <li>asdnllsa</li>
                            <li>asdnllsa</li>
                            <li>asdnllsa</li>
                        </ul>
                    </li>
                    <li>lorem10</li>
                </ol>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                </p>
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                </p>
                <ul>
                    <li>lorem10</li>
                    <li>lorem10</li>
                    <li>lorem10</li>
                    <li>lorem10</li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta fugiat, voluptatem maiores at
                    reiciendis dolorum quibusdam consequuntur, expedita vitae nobis dolor perferendis, enim beatae?
                    Inventore modi enim necessitatibus quisquam!
                </p>
            </div>
        </div>
    </section>
    {{-- End Single Article  --}}


@endsection
