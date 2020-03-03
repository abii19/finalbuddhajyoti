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

Route::get('/', function () {
    return view('website.index');
});


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


/*--Facilities--*/
Route::get('/facilities', function () {
    return view('website.facilities');
});
Route::get('/facilities/library', function () {
    return view('website.facilities.library');
});
Route::get('/facilities/hostel', function () {
    return view('website.facilities.hostels');
});
Route::get('/facilities/extraclass', function () {
    return view('website.facilities.extraclasses');
});
Route::get('/facilities/extracurriculum', function () {
    return view('website.facilities.extracurriculum');
});

/*----News and Events-----*/
Route::get('/news/event', function () {
    return view('website.news.event');
});
Route::get('/news/eventdetail', function () {
    return view('website.news.eventdetails');
});


Route::get('/news/notice', function () {
    return view('website.news.notices');
});
/*About Us*/
Route::get('/aboutus', function () {
    return view('website.AboutUs.aboutus');
});
Route::get('/aboutus/history', function () {
    return view('website.AboutUS.history');
});
Route::get('/aboutus/ourteam', function () {
    return view('website.AboutUS.ourteam');
});


/*               TEACHERS                    */

Route::resource('teacher', 'Teacher\TeacherController');
