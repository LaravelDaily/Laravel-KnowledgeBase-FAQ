<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\Admin\ArticleResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticlesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('article_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ArticleResource(Article::with(['category', 'tags'])->get());
    }

    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());
        $article->tags()->sync($request->input('tags', []));

        return (new ArticleResource($article))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Article $article)
    {
        abort_if(Gate::denies('article_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ArticleResource($article->load(['category', 'tags']));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        $article->tags()->sync($request->input('tags', []));

        return (new ArticleResource($article))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Article $article)
    {
        abort_if(Gate::denies('article_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $article->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
