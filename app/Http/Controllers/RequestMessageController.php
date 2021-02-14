<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RequestMessageController extends Controller
{
    public function getForm(Request $request)
    {
        $title = 'Оставить заявку';
        return response()->json([
            'form' => view('layouts.forms.request_form')->render(),
            'title' => $title
        ]);
    }

    public function storeForm(Request $request)
    {
        $fields = [];
        $fields['name'] = $request->input('firstName');
        $fields['number'] = $request->input('phoneNumber');
        $fields['email'] = $request->input('email');
        $fields['request'] = $request->input('request');

        $title = 'Оставить заявку';

        $messages = [
            'firstName.required' => 'Введите имя',
            'firstName.max' => 'Имя должно содержать не более :max символов',
            'phoneNumber.required' => 'Введите номер телефона',
            'phoneNumber.min' => 'Недостаточно цифр',
            'email.email' => 'Почта некорректна',
            'request.max' => 'Письмо должно содержать не более :max символов'
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required|max:20',
            'phoneNumber' => 'required|min:17',
            'email' => 'nullable|email:rfc,dnsgit,filter,strict',
            'request' => 'max:1000'
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'message' => 'error',
                'title' => $title,
                'body' => view('layouts.forms.request_form', compact('fields'))->withErrors($validator)->render()
            ]);
        }

        Requests::createOrUpdateRequest($fields);

        return response()->json([
            'result' => true,
            'message' => 'success',
        ]);
    }
}
