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
                @foreach($articles as $article)
                    <div class="col">
                        <div class="articles__card wow slideInUp">
                            <a href="{{ route('endUser.articles.single_article', $article->slug) }}" class="articles__card__img">
                                <img src="{{ $article->main_image }}" alt="{{$article->slug}}">
                            </a>
                            <a href="{{ route('endUser.articles.single_article', $article->slug) }}">
                                <h4 class="articles__card__headding">
                                    {{ $article->title }}
                                </h4>
                            </a>
                            <span class="articles__card__date">
                            {{ $article->created_at }}
                        </span>
                            <p class="articles__card__pragraph">
                                {{ $article->short_text }}
                            </p>
                            <a class="articles__card__action" href="{{ route('endUser.articles.single_article', $article) }}"
                               target="_blank">Read More<i class="la la-chevron-right articles__card__action__arrow"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            {{ $articles->links() }}
        </div>

    </section>
    {{-- End Blogs Section  --}}
@endsection
