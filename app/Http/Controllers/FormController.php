<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getForm(Request $request) {
//        return response()->json('123');/
        return response()->json([
            'form' => view('layouts.forms.form')->render()
        ]);
    }

    public function formStore(Request $request) {
        return response()->json(['data' => '!!!!!!!!!!!!!!!!122121212']);
    }
}
