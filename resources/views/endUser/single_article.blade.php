@extends('endUser.Layouts.master')

@section('title', $article->slug)

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
                   {{ $article->title }}
                </li>
            </ul>
        </div>
    </header>
    <!-- End Header Section  -->

    {{-- Start Single Article  --}}
    <section class="single-article">
        <div class="container">
            <img class="single-article__img" src="{{ $article->main_image }}"
                alt="{{ $article->slug }}">
            <div class="single-article__content pt-3">
                <span class="single-article__content__date">
                    {{ $article->created_at }}
                </span>
                <h2 class="single-article__content__headding">
                    {{ $article->title }}
                </h2>
                    {!! $article->full_text !!}

            </div>
        </div>
    </section>

@endsection
