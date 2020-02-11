<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;

class ViewBlogController extends Controller
{
    public function index()
    {

        $blog = Blog::latest()->paginate(20);

        return view('Website.Blog.index')->with('blog', $blog);
    }

    public function singleBlog($id)
    {
dd($id);
    }




    public function fetchBlogAjax()
    {


    }


    //
}
