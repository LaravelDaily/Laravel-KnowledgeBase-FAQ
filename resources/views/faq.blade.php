@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
                Frequently Asked Questions
            </div>
            <hr class="style-three">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordionCategories" role="tablist" aria-multiselectable="true">
                        @foreach($categories as $category)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingCategory{{ $category->id }}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordionCategories" href="#collapseCategory{{ $category->id }}" aria-expanded="true" aria-controls="collapseCategory{{$category->id}}">
                                            {{ $category->category }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseCategory{{ $category->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCategory{{ $category->id }}">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordionQuestions{{ $category->id }}" role="tablist" aria-multiselectable="true">
                                            @foreach($category->faqQuestions as $question)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingQuestion{{ $question->id }}">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordionQuestions{{ $category->id }}" href="#collapseQuestion{{ $question->id }}" aria-expanded="true" aria-controls="collapseQuestion{{$question->id}}">
                                                                {{ $question->question }}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseQuestion{{ $question->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQuestion{{ $question->id }}">
                                                        <div class="panel-body">
                                                            {{ $question->answer }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection