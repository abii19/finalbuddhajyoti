<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_name','user_id'
    ];

    public $timestamps = false;

    //

    public function  teacher(){
        return $this->hasMany(Teacher::class);
    }

}
