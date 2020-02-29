<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function fetchPosts()
    {

        $post = Post::select('post_name')->get();

        return response()->json([
            'post' => $post,
        ]);

    }

}
