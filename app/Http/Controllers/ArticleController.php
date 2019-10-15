<?php

namespace App\Http\Controllers;

use App\Article;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('articles.index', compact('articles'));
    }

    public function show($slug, $article)
    {
        $article = Article::with(['tags', 'category'])
            ->withCount('tags')
            ->whereId($article)
            ->first();

        $article->timestamps = false;
        $article->views_count++;
        $article->save();
        
        return view('articles.show', compact('article'));
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->input('title',''));

        return response()->json(['slug' => $slug]);
    }
}
