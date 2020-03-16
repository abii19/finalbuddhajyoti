<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;


class ViewBlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('Website.News.blog')->with('blog', $blog);
    }

    public function singleBlog($id)
    {
        dd($id);
    }


    public function fetchBlogAjax()
    {
        $blog = Blog::all();
        return response()->json([
           'blog'=> $blog
        ]);
    }

    public function fetchSpecificBlog(Request $request){
        $blog =  Blog::find($request->id)->with('blogImage')->get();
        dd($blog);

    }




    //
}
