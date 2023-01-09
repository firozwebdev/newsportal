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


Route::get('/', function () {
    return view('backend.master');
});
Route::get('/site-login', function () {
    return view('backend.login');
});

Route::get('/add-category','Admin\CategoryController@create')->name('create.category');
Route::get('/all-category','Admin\CategoryController@index')->name('index.category');
Route::post('/save-category','Admin\CategoryController@save')->name('save.category');

// Route::post('/save-category', function (Request $request, Category $category) {
    
   
// })->name('save-category');

Route::get('/manage-category', function () {
    return view('backend.category.manage_category');
})->name('manage-category');

Route::get('/add-post','Admin\PostController@create')->name('create.post');

Route::post('/save-post','Admin\PostController@save')->name('save.post');

Route::get('/all-post', function () {


    return view('backend.post.manage_post');
})->name('manage-post');

// Datatable ajax request
Route::get('/category-datable','Admin\CategoryController@fetch')->name('category.datatable');