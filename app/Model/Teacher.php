<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_name',
        'saying',
        'user_id',
        'years_active',
        'teacher_posts',
        'education_degree',
        'photo',
    ];

    //
}
