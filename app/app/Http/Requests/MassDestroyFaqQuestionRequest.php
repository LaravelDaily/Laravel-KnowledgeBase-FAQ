<?php

namespace App\Http\Requests;

use App\FaqQuestion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFaqQuestionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('faq_question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:faq_questions,id',
        ];
    }
}
