<?php

namespace App\Http\Controllers;

use App\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug, Category $category)
    {
        $category->loadCount('articles');

        $articles = $category->articles()
            ->paginate(5);
     
        return view('categories.show', compact(['category', 'articles']));
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->input('name',''));

        return response()->json(['slug' => $slug]);
    }
}
