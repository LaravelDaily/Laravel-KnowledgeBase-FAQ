<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $category->loadCount('articles');

        $articles = $category->articles()
            ->paginate(5);
     
        return view('categories.show', compact(['category', 'articles']));
    }
}
