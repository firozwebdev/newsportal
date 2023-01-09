<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use Image;
class PostController extends Controller
{
    public function index()
    {
        
        return view('backend.post.manage_post');
    }  
    
    public function create()
    {
        
        $categories = Category::all();
        return view('backend.post.add_post')->with('categories',$categories);
    }
    
    public function save(Request $request)
    {
        
        if ($request->has('post_image')) {
            $imageName = time().'.'.$request->post_image->extension();  
            $request->post_image->move(public_path('posts/images'), $imageName);
        }
        Post::create([
            'post_title' => $request->post_title,
            'category_name' => $request->category_name,
            'post_image' => $imageName,
            'post_description' => $request->post_description,
            'post_status' => $request->post_status,
            
        ]);

    
    return redirect()->back()->with('message','Post Saved Successfully !');
    }
}
