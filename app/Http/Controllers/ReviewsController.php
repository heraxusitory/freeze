<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewsController extends Controller
{
    public function getForm(Request $request) {
        $title = 'Оставить отзыв';
        return response()->json([
            'form' => view('layouts.forms.review_form')->render(),
            'title' => $title
        ]);
    }

    public function storeForm(Request $request)
    {
        $fields = [];
        $fields['name'] = $request->input('firstName');
        $fields['number'] = $request->input('phoneNumber');
        $fields['email'] = $request->input('email');
        $fields['review'] = $request->input('review');
        $fields['rating'] = $request->input('rating');
        if ($fields['rating'] < 1) {
            $fields['rating'] = 1;
        }
        if ($fields['rating'] > 5) {
            $fields['rating'] = 5;
         }

        $title = 'Оставить отзыв';

        $messages = [
            'firstName.required' => 'Введите имя',
            'firstName.max' => 'Имя должно содержать не более :max символов',
            'phoneNumber.min' => 'Недостаточно цифр',
            'email.email' => 'Почта некорректна',
            'email.required' => 'Заполните почту',
            'review.max' => 'Письмо должно содержать не более :max символов',
            'review.required' => 'Заполните отзыв',
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required|max:20',
            'phoneNumber' => 'nullable|min:17',
            'email' => 'nullable|required|email:rfc,dns,filter,strict',
            'review' => 'max:1000|required',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'message' => 'error',
                'title' => $title,
                'body' => view('layouts.forms.review_form', compact('fields'))->withErrors($validator)->render()
            ]);
        }
//        TODO: See model Review.php
        Reviews::createOrUpdateReview($fields);

        return response()->json([
            'result' => true,
            'message' => 'success',
        ]);
    }
}
