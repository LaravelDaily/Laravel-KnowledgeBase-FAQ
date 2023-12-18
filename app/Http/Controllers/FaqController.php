<?php

namespace App\Http\Controllers;

use App\FaqCategory;
use App\FaqQuestion;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('faqQuestions')
            ->get();
        return view('endUser.pages.faqs', compact('categories'));
    }

    public function getFaqsByCategory($categoryId)
    {
        $faqs = FaqQuestion::where('category_id', $categoryId)->get();

        if (!$faqs) {
            return response()->json(['message' => 'Faqs not found'], 404);
        }

        return response()->json($faqs);
    }
}
