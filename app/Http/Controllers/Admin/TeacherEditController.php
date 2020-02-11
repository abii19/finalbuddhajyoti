<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Teacher;
use Illuminate\Http\Request;

class TeacherEditController extends Controller
{

    public function updateTeacherForm(Request $request)
    {

        $teacher = Teacher::findOrFail($request->id);

        $teacher->teacher_name = $request->teacher_name;
        $teacher->education_degree = $request->education_degree;
        $teacher->saying = $request->saying;
        $teacher->save();

        return response()->json([
            'msg' => ' Succesfully Updated teacher',
            'teacher' => $teacher

        ]);

    }

    //
}
