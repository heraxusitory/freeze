<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getForm() {
        $response = [];
        $view = view('layouts.forms.question')->render();
        $response['form'] = $view;
        return response()->json($response);
    }

    public function storeGuestQuestion(Request $request, Questions $question) {
        $newQuestion = $question::makeQuestion(
            $request->input('name'),
            $request->input('phone'),
            $request->input('question')
        );
        $response = [];
        if ($newQuestion) {
            $response['status'] = 'ok';
        } else {
            $response['status'] = 'error';
        }
        return response()->json($response);
    }
}
