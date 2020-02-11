<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\BlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AddBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Blog.addBlog');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validate = $request->validate([
            'title' => 'required',
            'post' => 'required',
            'author' => 'required',
        ]);

        if ($validate) {
            /*    IF VALIDATED CREATE A NEW BLOG*/


            $blog = Blog::create([
                'title' => $request->title,
                'post' => $request->post,
                'author' => $request->author,
                'status' => 0,
                'approve' => 1,
                'single_blog_pic' => 'def',
            ]);
        }


        /*CHECK IF DIRECTORY EXISTS OR CREATE A NEW ONE AND GIVE PERMISSION TO READ WRITE*/

        if (!is_dir(public_path('/uploads'))) {
            mkdir(public_path('/uploads'), 0777);
        }


        /*CREATEE OR SAVE BLOG'S MULTIPLE IMAGES*/
        foreach ($request->image as $image) {
            $baseName = Str::random(20);
            $originalName = $baseName . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads'), $originalName);

            $blogImage = BlogImage::create([
                'blog_id' => $blog->id,
                'blog_photo' => '/uploads/' . $originalName,
            ]);
        }


        /*      NEED TO CHANGE LATEER*/
        Blog::find($blog->id)->update([
            'single_blog_pic' => $blogImage->blog_photo,
        ]);


        return response()->json([
            'msg' => 'Succesfull Added Blog'
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        dd($blog);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
