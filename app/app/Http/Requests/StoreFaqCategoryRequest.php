<?php

namespace App\Http\Requests;

use App\FaqCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreFaqCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('faq_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'category' => [
                'required',
            ],
        ];
    }
}
