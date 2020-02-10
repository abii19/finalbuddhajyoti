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
    return view('welcome');
});

Route::get('/', function () {
    return view('website.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'Blog\ViewBlogController@index')->name('blog');
Route::get('/blog/{$id}', 'Blog\ViewBlogController@singleBlog')->name('singleBlog');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('Index', 'Admin\IndexController')->only(['index', 'store']);


    /*SETTING ROUTE*/
    Route::resource('Setting', 'Setting\SettingController')->only(['index', 'store']);

    /*BLOG*/
    Route::resource('Blog', 'Blog\BlogController')->only(['index', 'store']);
    Route::resource('addBlog', 'Blog\AddBlogController')->only(['index', 'store']);

    Route::get('logout', function () {
        Auth::logout();
        return view('auth.login');
    });


});
