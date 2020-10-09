<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'aboutController@index')->name('about');
Route::get('/contact-us', 'contactController@index')->name('contact');
Route::get('/search', 'searchController@index');
Route::post('/subscriber', 'subscriberController@index');
Route::get('/single_post/{id}/{post_url}', 'singleController@index');
Route::get('/category/{category_id}', 'singleController@category');

Route::get('/dashboard', 'dashController@index');
/* 
---------------------------------------------------------------------------
    Category Routes Section
---------------------------------------------------------------------------
*/
Route::get('/dashboard/add-category', 'categoryController@index');
Route::post('/add-category', 'categoryController@insert');

/* 
---------------------------------------------------------------------------
    Post Routes Section
---------------------------------------------------------------------------
*/
Route::post('/add-post', 'postController@insert');
Route::get('/dashboard/create-post', 'postController@index');
Route::get('/dashboard/post-list', 'postController@show');
Route::get('/edit-post/{id}', 'postController@edit');

/* 
---------------------------------------------------------------------------
    Image Upload Routes
---------------------------------------------------------------------------
*/
Route::post('/image_upload', 'imageController@upload')->name('upload');
Route::get('/dashboard/subscriber-list', 'dashController@show')->name('subscriber');


Route::get('/dashboard/my_profile', 'profileController@index')->name('profile');
Route::get('/dashboard/setting/site-setting', 'optionController@index')->name('site');
Route::get('/dashboard/setting/menu', 'menuController@index')->name('menu');
Route::post('/add-menu', 'menuController@insert');
Route::post('/update-menu/{id}', 'menuController@update');
Route::get('/menu-edit/{id}', 'menuController@edit');


/* 
---------------------------------------------------------------------------
    Comment Routes
---------------------------------------------------------------------------
*/
Route::post('/comment', 'commentController@insert');
