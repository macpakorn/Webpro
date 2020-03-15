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

Route::get('', 'PostController@index');

use App\Post;

Route::get('/posts/{post}', function (Post $post){
    return view('post',compact('post'));
});

Route::get('upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');


Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');
