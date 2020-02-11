<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'title',
        'post',
        'author',
        'status',
        'approve',
        'single_blog_pic'
    ];


    public function blogImage()
    {
        return $this->hasMany(BlogImage::class);
    }

    //
}
