<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_name',
        'saying',
        'user_id',
        'education_degree',
        'photo',
    ];

    //
}
