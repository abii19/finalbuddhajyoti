<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Teacher;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeacherController extends Controller
{

    public function viewAjaxTeacher()
    {
        $teacher = Teacher::all();
        return response()->json([
            'msg' => 'success',
            'teacher' => $teacher,
        ]);

    }

    public function saveteacher(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required',
            'education_degree' => 'required',
            'address'=>'required',
            'phone_number'=>'required',
        ]);

        if (!is_dir(public_path('/teacher_images'))) {
            mkdir(public_path('/teacher_images'), 0777);
        }

        /*      CHECK FOR ANY ERRORS AND RETURN USING JSON*/
        try {
            $baseName = Str::random(20);
            $originalName = $baseName . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/teacher_images'), $originalName);
        } catch (Exception $e) {
            return response()->json([
                'err' => $e->getMessage(),
            ]);
        }

        /*      DB SAVE*/
        Teacher::create([
            'teacher_name' => $request->teacher_name,
            'education_degree' => $request->education_degree,
            'phone_number' => $request->phone_number,
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'teacher_photo' => '/teacher_images/' . $originalName,
            'post_id' => $request->post_name,
            'years_active' => $request->years_active,
        ]);

        return response()->json([
            'success' => 'Succesfully Added teacher',
        ]);
    }


    public function fetchSingleTeacher($id)
    {


        $teacher = DB::table('teachers')
            ->select('id', 'teacher_name', 'saying', 'education_degree', 'years_active', 'teacher_posts', 'photo')
            ->where('id', $id)
            ->first();


        return response()->json([
            'msg' => 'success',
            'teacher' => $teacher,
        ]);

    }

    public function updateteacherPhoto(Request $request)
    {

        $teacher = Teacher::findOrFail($request->id);
//        dd($teacher->photo);

        if ($teacher->photo) {
            if (file_exists(public_path($teacher->photo))) {
                unlink(public_path($teacher->photo));
            }
        }

        if ($request->photo) {
            try {
                $baseName = Str::random(20);
                $originalName = $baseName . '.' . $request->photo->getClientOriginalExtension();
                $request->photo->move(public_path('/teacher_images'), $originalName);
            } catch (Exception $e) {
                return response()->json([
                    'err' => $e->getMessage(),
                ]);
            }

            /*         UPDATE DB */

            $teacher->photo = '/teacher_images/' . $originalName;
            $teacher->save();
        }

        return response()->json([
            'success' => 'Succesfully Updated Photo',
        ]);

    }

}
