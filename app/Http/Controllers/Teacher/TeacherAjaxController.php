<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class TeacherAjaxController extends Controller
{
    public function  fetchTeacherAjax(){
        $teacher = Post::with('teacher')->get();

        return response()->json([
            'teacher'=> $teacher
        ]);
    }


    //
}
