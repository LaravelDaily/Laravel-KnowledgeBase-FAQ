@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
                Article Categories
            </div>
            <hr class="style-three">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 margin-bottom-20">
                        <div class="fat-heading-abb">
                            <a href="{{ route('categories.show', [$category->slug, $category->id]) }}">
                                <i class="fa fa-folder"></i> {{ $category->name }}
                                <span class="cat-count">({{ $category->articles_count }})</span>
                            </a>
                        </div>
                        <div class="fat-content-small padding-left-30">
                            <ul>
                                @foreach($category->articles as $article)
                                    @if($loop->index >= 5)
                                        @break
                                    @endif
                                    <li>
                                        <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                            <i class="fa fa-file-text-o"></i> {{ $article->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{ $categories->links('partials.pagination') }}
    </div>
</div>
@endsection

@section('about')
<div class="container-fluid featured-area-grey padding-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fb-heading">
                    About Us
                </div>
                <div class="fb-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum ultricies magna sed tincidunt. Nullam aliquet est
                        eu magna suscipit ornare. Sed venenatis eget turpis imperdiet vulputate. Pellentesque in lectus
                        arcu. Vestibulum scelerisque, massa vitae suscipit accumsan, ex tellus eleifend ante, ut accumsan
                        quam risus eu leo. Phasellus vel diam id elit ultrices feugiat. Quisque sed massa in quam pulvinar
                        volutpat ut sed risus.
                    </p>
                    <p>
                        Sed eget ultricies lectus. Nulla in porttitor libero. Suspendisse potenti. Etiam iaculis in augue eu volutpat. Pellentesque
                        fringilla orci enim, ut vehicula mauris aliquet quis. Etiam sed rutrum justo. Etiam faucibus
                        consequat ipsum, a pharetra quam bibendum eget. Fusce a consequat mauris, vel vestibulum dolor.
                        Nam ornare enim eget ante pharetra condimentum. Donec feugiat arcu eu arcu faucibus, id ornare
                        enim venenatis. Suspendisse nisi felis, mattis in hendrerit a, pretium posuere mauris. Suspendisse
                        in ante in odio maximus ultrices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection