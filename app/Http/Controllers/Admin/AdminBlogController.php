<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function viewAllBlog()
    {
        $blog = Blog::all();
        return view('admin.Blog.index')->with('blog', $blog);
    }

    //
}
