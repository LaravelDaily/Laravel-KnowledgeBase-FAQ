@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <!-- BREADCRUMBS -->
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
                <li>
                    <a href="{{ route('categories.show', [$article->category->slug, $article->category->id]) }}">{{ $article->category->name }}</a>
                </li>
                <li class="active">{{ $article->title }}</li>
            </ol>
        </div>
        <!-- END BREADCRUMBS -->
        <!-- ARTICLE  -->
        <div class="panel panel-default">
            <div class="article-heading margin-bottom-5">
                <i class="fa fa-pencil-square-o"></i> {{ $article->title }}
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
                {!! $article->full_text !!}
            </div>
            @if($article->tags_count)
                <div class="article-content">
                    <div class="article-tags">
                        <b>Tags:</b>
                        @foreach($article->tags as $tag)
                            <a href="{{ route('tags.show', [$tag->slug, $tag->id]) }}" class="btn btn-default btn-o btn-sm">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection