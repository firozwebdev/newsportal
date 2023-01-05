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

Route::get('/add-post', function () {
    $categories = Category::all();
    return view('backend.post.add_post')->with('categories',$categories);
})->name('add-post');

Route::post('/save-post', function (Request $request) {
    
    

    
        if ($request->has('post_image')) {
            //$imageName = time().'.'.$request->post_image->extension();  
            //$request->post_image->move(public_path('images'), $imageName);
            $img = Image::make($request->post_image)->resize(700, 850);
            $imageName = time().'.'.$request->post_image->extension();
            $img->save(public_path('backend/post/images/').$imageName, 60);
        }

        return "image saved";

    

    
    return redirect()->back()->with('message','Post Saved Successfully !');
})->name('save.post');

Route::get('/manage-post', function () {


    return view('backend.post.manage_post');
})->name('manage-post');

