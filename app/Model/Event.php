<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'post',
        'date',
        'status',
        'photo',
        'is_notice'
    ];

    //
}
