<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\FaqQuestion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqQuestionRequest;
use App\Http\Requests\UpdateFaqQuestionRequest;
use App\Http\Resources\Admin\FaqQuestionResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FaqQuestionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('faq_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqQuestionResource(FaqQuestion::with(['category'])->get());
    }

    public function store(StoreFaqQuestionRequest $request)
    {
        $faqQuestion = FaqQuestion::create($request->all());

        return (new FaqQuestionResource($faqQuestion))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FaqQuestion $faqQuestion)
    {
        abort_if(Gate::denies('faq_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqQuestionResource($faqQuestion->load(['category']));
    }

    public function update(UpdateFaqQuestionRequest $request, FaqQuestion $faqQuestion)
    {
        $faqQuestion->update($request->all());

        return (new FaqQuestionResource($faqQuestion))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FaqQuestion $faqQuestion)
    {
        abort_if(Gate::denies('faq_question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $faqQuestion->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
