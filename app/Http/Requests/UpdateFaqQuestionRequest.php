<?php

namespace App\Http\Requests;

use App\FaqQuestion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateFaqQuestionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('faq_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'category_id' => 'required|integer|exists:faq_categories,id',
            'question'    => 'required|string',
            'answer'      => 'required|string',
        ];
    }
}
