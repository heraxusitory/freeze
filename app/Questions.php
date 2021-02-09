<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['question', 'phone', 'name'];
    protected $table = 'questions';

    public static function makeQuestion($user_name, $user_phone, $user_question) {
        return self::create([
            'name' => $user_name,
            'phone' => $user_phone,
            'question' => $user_question
        ]);
    }
}
