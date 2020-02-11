<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{

    protected $fillable = [
        'blog_id', 'blog_photo'

    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);

    }
    //
}
