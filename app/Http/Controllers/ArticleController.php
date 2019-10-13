<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('categories')
            ->withCount('categories')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('articles.index', compact('articles'));
    }

    public function show($article)
    {
        $article = Article::with(['tags', 'categories'])
            ->withCount(['tags', 'categories'])
            ->whereId($article)
            ->first();

        $article->timestamps = false;
        $article->views_count++;
        $article->save();
        
        return view('articles.show', compact('article'));
    }
}
