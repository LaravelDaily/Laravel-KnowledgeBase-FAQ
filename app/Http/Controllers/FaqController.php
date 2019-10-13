<?php

namespace App\Http\Controllers;

use App\FaqQuestion;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $questions = FaqQuestion::paginate(10);

        return view('faq', compact('questions'));
    }
}
