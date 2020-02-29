<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\BlogImage;
use Illuminate\Http\Request;

class AdminAjaxBlogController extends Controller
{

    public function viewAllBlog()
    {
        $blog = Blog::all();
        return response()->json([
            'blog' => $blog,
        ]);
    }

    public function viewSingleBlog(Request $request)
    {

        $blog = Blog::findOrFail($request->id);
        $blogImages = BlogImage::where('blog_id', $request->id)->get();

        return response()->json([
            'blog' => $blog,
            'blogImages' => $blogImages,
        ]);

    }

    //
    //
}
