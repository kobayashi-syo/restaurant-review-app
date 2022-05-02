<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Folder;
use App\Http\Requests\ReviewCreate;
use Illuminate\Broadcasting\PrivateChannel;
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

    private $formItems = ["name", "sex", "age", "mail", "mail-sent", "review", "opinion"];

    public function reviewCreatePost(ReviewCreate $request)
    {
        $review = $request->only($this->formItems);

        $request->session()->put("review_input", $review);

        return redirect()->route('review.confirmation.get');
    }

    public function reviewConfirmationGet(Request $request)
    {
        $input = $request->session()->get('review_input');

        if (!$input) {
            return redirect()->route('review.create.get');
        }

        return view('review/reviewConfirmation', ['input' => $input]);
    }

    public function reviewConfirmationPost(Request $request)
    {
        $input = $request->session()->get('review_input');

        if ($request->has('back')) {
            return redirect()->route('review.create.get')
                ->withInput($input);
        }

        if (!$input) {
            return redirect()->route('review.create.get');
        }

        $review = new review();
        $review->name = $input['name'];
        $review->sex = $input['sex'];
        $review->age = $input['age'];
        $review->mail = $input['mail'];
        $review->review = $input['review'];
        $review->opinion = $input['opinion'];
        $review->save();

        $request->session()->forget('review_input');
        return redirect()->route('review.complete');
    }

    public function reviewComplete()
    {
        return view('review/reviewComplete');
    }
}
