@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.faqCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.faq-categories.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label for="category">{{ trans('cruds.faqCategory.fields.category') }}*</label>
                <input type="text" id="category" name="category" class="form-control" value="{{ old('category', isset($faqCategory) ? $faqCategory->category : '') }}" required>
                @if($errors->has('category'))
                    <em class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faqCategory.fields.category_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection