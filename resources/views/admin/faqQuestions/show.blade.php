@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.faqQuestion.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.id') }}
                        </th>
                        <td>
                            {{ $faqQuestion->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.category') }}
                        </th>
                        <td>
                            {{ $faqQuestion->category->category ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.question') }}
                        </th>
                        <td>
                            {!! $faqQuestion->question !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.faqQuestion.fields.answer') }}
                        </th>
                        <td>
                            {!! $faqQuestion->answer !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection