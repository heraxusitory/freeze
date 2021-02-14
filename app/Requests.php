<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = [
        'name',
        'number',
        'email',
        'request',
    ];

    protected $table = 'requests';

    public static function createOrUpdateRequest($fields) {
        return self::updateOrCreate(
            ['number' => $fields['number'], 'email' => $fields['email']],
            ['name' => $fields['name'], 'request' => $fields['request']]
        );
    }
}
