<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use DataTables;
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
            $request->post_image->move(public_path('backend/posts/images'), $imageName);
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


    public function fetch(Request $request)
    {
        
        if ($request->ajax()) {
            $data = Post::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('post_image', function ($data) {
                        $url= asset('backend/posts/images/'.$data->post_image);
                        return '<img src="'.$url.'" border="0" width="50%" class="img-rounded" align="center" />';
                    })
                     ->addColumn('post_description', function ($data) {
                        
                        $data= html_entity_decode($data->post_description);
                        return $data;
                    })
                    ->addColumn('action', function($row){
   
                           $btn = '<button type="button" class="btn btn-info btn-flat"><i class="fas fa-align-left"></i></button> | <button type="button" class="btn btn-danger btn-flat"><i class="fas fa-align-right"></i></button> ' ;
     
                            return $btn;
                    })
                    ->rawColumns(['post_description','post_image', 'action'])
                    ->make(true);
        }
      
        return view('backend.post.manage_post');
    }
}
