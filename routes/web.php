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
    $posts = App\Models\Admin\Post::latest()->paginate(10);
    
    return view('frontend.pages.front')->with('posts',$posts);
});
Route::get('/site-login', function () {
    return view('backend.login');
});


Route::group(['prefix'=>'admin'],function (){
    Route::get('/dashboard', function () {
        return view('backend.master');
    });
    Route::group(['namespace'=>'Admin'], function(){
        Route::get('/add-category','CategoryController@create')->name('create.category');
        Route::get('/all-category','CategoryController@index')->name('index.category');
        Route::post('/save-category','CategoryController@save')->name('save.category');

        Route::get('/add-post','PostController@create')->name('create.post');
        Route::post('/save-post','PostController@save')->name('save.post');
        Route::get('/all-post','PostController@index')->name('index.post');


        // Datatable ajax request
        Route::get('/category-datable','CategoryController@fetch')->name('category.datatable');
        Route::get('/post-datable','PostController@fetch')->name('post.datatable');
    });


    Route::get('/manage-category', function () {
        return view('backend.category.manage_category');
    })->name('manage-category');
    

    
    Route::get('/all-posts', function () {
    
    
        return view('backend.post.manage_post');
    })->name('manage-post');
    

});


// Route::post('/save-category', function (Request $request, Category $category) {
    
   
// })->name('save-category');

