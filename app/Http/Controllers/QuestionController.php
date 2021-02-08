<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getForm() {
        $response = [];
        $view = view('layouts.forms.question')->render();
        $response['form'] = $view;
        return response()->json($response);
    }

    public function storeGuestQuestion(Request $request) {

        return response()->json(['status' => 'ok']);
    }
}
