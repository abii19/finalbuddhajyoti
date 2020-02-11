<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/saveTeacher', 'Admin\TeacherController@saveTeacher');
Route::resource('addBlog', 'Blog\AddBlogController')->only(['store', 'edit']);


/*API ROUTE FOR TEACHERS MODEL*/
Route::get('/viewTeacher', 'Admin\TeacherController@viewAjaxTeacher');
Route::get('/fetchSingleTeacher/{id}', 'Admin\TeacherController@fetchSingleTeacher');
Route::post('/updateteacherPhoto', 'Admin\TeacherController@updateTeacherPhoto');
Route::post('/updateteacherForm', 'Admin\TeacherEditController@updateTeacherForm');



