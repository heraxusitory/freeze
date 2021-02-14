<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'name',
        'number',
        'email',
        'review',
        'rating'
    ];

    protected $table = 'reviews';

    public static function createOrUpdateReview($fields)
    {
        return self::updateOrCreate(
            ['number' => $fields['number'], 'email' => $fields['email']],
            ['name' => $fields['name'], 'review' => $fields['review'], 'rating' => $fields['rating']]
        );
    }

    // TODO: Фича - криэйт отделить от апдейта, и юзать в разных функционалах ->
    // TODO: когда нужно дополнить отзыв, а когда написать новый
}
