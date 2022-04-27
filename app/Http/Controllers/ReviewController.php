<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Folder;
use App\Http\Requests\ReviewCreate;
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

    public function reviewCreatePost(ReviewCreate $request)
    {
        $review = new review();
        $review->name = $request->name;
        $review->sex = $request->sex;
        $review->age = $request->age;
        $review->mail = $request->mail;
        $review->review = $request->review;
        $review->opinion = $request->opinion;
        $review->save();

        return redirect()->route('review/reviewConfirmation');
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
