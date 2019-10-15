<?php

namespace App\Http\Requests;

use App\Article;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('article_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'        => [
                'required',
            ],
            'slug'        => [
                'required', 'unique:articles'
            ],
            'tags.*'       => [
                'integer',
            ],
            'tags'         => [
                'array',
            ],
        ];
    }
}
