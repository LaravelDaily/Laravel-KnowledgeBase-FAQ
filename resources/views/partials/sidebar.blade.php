<div class="col-md-4 padding-20">
    <div class="row margin-bottom-30">
        <div class="col-md-12 ">
            <div class="support-container">
                <h2 class="support-heading">Need more Support?</h2>
                If you cannot find an answer in the knowledgebase, you can
                <a href="#">contact us</a> for further help.
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Popular Articles
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($popularArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Latest Articles
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($latestArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Popular Tags
            </div>
            <hr class="style-three">
            <div class="fat-content-tags padding-left-10">
                @foreach ($popularTags as $tag)
                    <a href="{{ route('tags.show', [$tag->slug, $tag->id]) }}" class="btn btn-default btn-o btn-sm">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>