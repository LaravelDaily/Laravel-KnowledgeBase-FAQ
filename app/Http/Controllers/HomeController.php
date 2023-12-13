<?php

namespace App\Http\Controllers;

use App\Article;
use App\FaqQuestion;

class HomeController extends Controller
{
    public function index()
    {
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
        $faqs = FaqQuestion::get();
        return view('endUser.pages.faqs', compact('faqs'));
    }

    public function articles()
    {
        $articles = Article::paginate(10);
        return view('endUser.pages.articles', compact('articles'));
    }
}
