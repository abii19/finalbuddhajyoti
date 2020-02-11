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
Route::get('/teachers', function () {
   return view('website.teachers');
});

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
Route::get('/news/blog', function () {
    return view('website.news.blog');
});
Route::get('/news/eventdetail', function () {
    return view('website.news.eventdetails');
});


