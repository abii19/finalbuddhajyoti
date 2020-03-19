<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_name',
        'phone_number',
        'address',
        'years_active',
        'education_degree',
        'post_id',
        'teacher_photo',
        'user_id',
    ];

    //
}
