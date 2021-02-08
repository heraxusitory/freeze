<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
    public function getForm(Request $request) {
//        return response()->json('123');/
        return response()->json([
            'form' => view('layouts.forms.form')->render()
        ]);
    }

    public function formStore(Request $request) {
        $number = $request->input('phoneNumber');
        $email = $request->input('email');

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'nullable|email:rfc,dns,spoof,filter,strict',
            'service' => 'required'
        ]);

        if ($validator->fails()) {
           return response()->json([
               'result' => false,
               'message' => 'error',
               'body' => view('layouts.forms.form', compact('number', 'email'))->withErrors($validator)->render()
           ]);
        }
        return response()->json([
            'result' => true,
            'message' => 'success'
            ]);
    }
}
