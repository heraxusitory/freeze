<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function getForm(Request $request) {
//        return response()->json('123');/
        return response()->json([
            'form' => view('layouts.forms.form')->render()
        ]);
    }

    public function formStore(Request $request) {

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'phoneNumber' => 'required|min:11',
            'email' => 'required',
            'service' => 'required'
        ]);

        if ($validator->fails()) {
           return response()->json([
               'result' => false,
               'message' => 'error',
               'body' => view('layouts.forms.form')->withErrors($validator)->render()
           ]);
        }
        return response()->json([
            'result' => true,
            'message' => 'success'
            ]);
    }
}
