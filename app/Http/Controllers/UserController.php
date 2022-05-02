<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLoginGet()
    {
        return view('user/login');
    }

    public function reviewDetail()
    {
        $reviews = review::all();

        return view('review/reviewDetail', [
            'reviews' => $reviews,
        ]);
    }
}
