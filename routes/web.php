<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('website.index');
});*/

/**Website Routing*/
Route::view('/', 'website.index');

Route::view('/about', 'website.AboutUs.aboutus');
Route::view('/history', 'website.AboutUs.history');
Route::view('/ourteam', 'website.AboutUs.ourteam');
Route::view('/teachers', 'website.Teachers.teachers');
Route::view('/notices', 'website.Information.notices');
Route::view('/upcomingevents', 'website.Information.upcomingevent');
Route::view('/blogs', 'website.Information.blog');
Route::view('/facilities', 'website.Facilities.facilities');

Route::get('/noticedetails', function (){
   return view('website.Information.eventdetails');
});
Route::get('/blogdetails', function (){
    return view('website.Information.blogdetails');
});







/**Admin Part Routing*/
Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    /*    LOGOUT*/
    Route::get('logout', function () {
        Auth::logout();
        return view('auth.login');
    });

    Route::resource('Index', 'Admin\IndexController')->only(['index', 'store']);

    /*    Index Page Photo          */

    Route::resource('FrontPic', 'Admin\Setting\IndexPagePhotoController')->only(['index', 'store']);



    /*SETTING ROUTE*/
    Route::resource('Setting', 'Setting\SettingController')->only(['index', 'store']);

    /*BLOG*/
    Route::resource('Blog', 'Blog\BlogController')->only(['index', 'store']);
    Route::resource('addBlog', 'Blog\AddBlogController')->only(['index', 'store']);
    Route::get('/view/Blog', 'Admin\AdminBlogController@viewAllBlog')->name('viewBlog');

    /*  NOTICE*/
    Route::resource('Notice', 'Admin\Notice\NoticeController')->only(['index']);

    /*                TESTEMONIAL                                */


    Route::resource('testemonial', 'Admin\Testemonial\TestemonialController')->only(['index']);

});


Route::get('/home', 'HomeController@index')->name('home');


/*                          NEWS EVENTS BLOGS                          */
Route::get('/news/blog', 'Blog\ViewBlogController@index')->name('blog');
Route::get('/blog/{$id}', 'Blog\ViewBlogController@singleBlog')->name('singleBlog');
Route::get('/event/{id}', 'Event\EventController@showSingleEvent')->name('editEvent');

/*               TEACHERS                    */

Route::resource('teacher', 'Teacher\TeacherController');



Route::get('/test', function () {
    return view('test');
});
