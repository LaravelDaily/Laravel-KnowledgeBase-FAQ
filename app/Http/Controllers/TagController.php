<?php

namespace App\Http\Controllers;

use App\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug, Tag $tag)
    {
        $tag->loadCount('articles');

        $articles = $tag->articles()
            ->with('category')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('tags.show', compact(['articles', 'tag']));
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Tag::class, 'slug', $request->input('name',''));

        return response()->json(['slug' => $slug]);
    }
}