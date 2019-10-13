<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $tag->loadCount('articles');

        $articles = $tag->articles()
            ->with('categories')
            ->withCount('categories')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('tags.show', compact(['articles', 'tag']));
    }
}
