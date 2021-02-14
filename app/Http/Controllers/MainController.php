<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {
        $isExistRecords = Reviews::exists() ?? false;
        $reviews = Reviews::get();
//        dd($reviews);
        if ($request->ajax()) {
            return view('main.reviews', compact('reviews', 'isExistRecords'));
        }
        return view('main.index', compact('reviews', 'isExistRecords'));
    }
}
