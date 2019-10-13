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
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($questions as $question)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-{{ $question->id }}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $question->id }}" aria-expanded="true" aria-controls="collapse-{{$question->id}}">
                                            {{ $question->question }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-{{ $question->id }}" class="panel-collapse collapse{{ $loop->first ? ' in' : '' }}" role="tabpanel" aria-labelledby="heading-{{ $question->id }}">
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
    </div>
</div>
@endsection