<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function reviewCreateGet()
    {
        return view('review/reviewCreate');
    }

    public function reviewCreatePost()
    {
        
    }

    public function reviewConfirmation()
    {
        return view('review/reviewConfirmation');
    }

    public function reviewComplete()
    {
        return view('review/reviewComplete');
    }

    public function reviewDetail()
    {
        $reviews = review::all();

        return view('review/reviewDetail',[
            'reviews' => $reviews,
        ]);
    }
}
