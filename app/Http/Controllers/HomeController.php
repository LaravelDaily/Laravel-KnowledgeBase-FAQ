<?php

namespace App\Http\Controllers;

use App\Category;

class HomeController extends Controller
{
    public function index()
    {
//        $categories = Category::withCount('articles')
//            ->with(['articles' => function($query) {
//                $query->orderBy('id', 'desc');
//            }])
//            ->paginate(10);

        return view('endUser.index');
    }

    public function parent()
    {
        return view('endUser.pages.parent');
    }

    public function staff()
    {
        return view('endUser.pages.staff');
    }

    public function features()
    {
        return view('endUser.pages.features');
    }
    public function packages()
    {
        return view('endUser.pages.packages');
    }

    public function contactUs()
    {
        return view('endUser.pages.contactUs');
    }

    public function aboutUs()
    {
        return view('endUser.pages.aboutUs');
    }

    public function faqs()
    {
        return view('endUser.pages.faqs');
    }

    public function articles()
    {
        return view('endUser.pages.articles');
    }
}
