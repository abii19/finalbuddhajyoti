<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\BlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogEditController extends Controller
{

    public function deleteBlogImages(Request $request)
    {


        $blogImage = BlogImage::findOrFail($request->id);

        if (file_exists(public_path($blogImage->blog_photo))) {
            unlink(public_path($blogImage->blog_photo));
        }

        $blogImage->delete();
        return response()->json([
            'msg' => 'Deleted Succesfully'
        ]);

    }


    public function updateSingleBlogPic(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        if ($blog) {
            try {

                $baseName = Str::random(30);
                $originalName = $baseName . '.' . $request->photo->getClientOriginalExtension();
                $request->photo->move(public_path('/uploads'), $originalName);
            } catch (\Exception $e) {
                return response()->json([
                    'err' => $e->getMessage(),
                ]);
            }

            $blog->single_blog_pic = '/uploads/' . $originalName;
            $blog->save();
        }

        return response()->json([
            'success' => 'Succesfully Updated Photo',
        ]);


    }
    //
}
