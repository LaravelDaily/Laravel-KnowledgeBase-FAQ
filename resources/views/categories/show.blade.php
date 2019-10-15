@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">Knowledge Base</a>
                </li>
                <li class="active">{{ $category->name }}</li>
            </ol>
        </div>

        <div class="fb-heading">
            <i class="fa fa-folder"></i> Category: {{ $category->name }}
            <span class="cat-count">({{ $category->articles_count }})</span>
        </div>
        <hr class="style-three">
        @foreach($category->articles as $article)
            <div class="panel panel-default">
                <div class="article-heading-abb">
                    <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                        <i class="fa fa-pencil-square-o"></i> {{ $article->title }} </a>
                </div>
                <div class="article-info">
                    <div class="art-date">
                        <i class="fa fa-calendar-o"></i> {{ $article->created_at }}
                    </div>
                    @if($article->category->count())
                        <div class="art-category">
                            <a href="{{ route('categories.show', [$article->category->slug, $article->category->id]) }}">
                                <i class="fa fa-folder"></i> {{ $article->category->name }}
                            </a>
                        </div>
                    @endif
                </div>
                <div class="article-content">
                    <p class="block-with-text">
                        {{ $article->short_text }}
                    </p>
                </div>
                <div class="article-read-more">
                    <a href="{{ route('articles.show', [$article->slug, $article->id]) }}" class="btn btn-default btn-wide">Read more...</a>
                </div>
            </div>
        @endforeach

        {{ $articles->links('partials.pagination') }}
    </div>
</div>
@endsection