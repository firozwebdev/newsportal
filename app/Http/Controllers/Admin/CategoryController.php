<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Admin\Category;
use DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        
        return view('backend.category.manage_category');
    }  
    
    public function create()
    {
        
        return view('backend.category.add_category');
    } 
    
    
    public function fetch(Request $request)
    {
        
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<button type="button" class="btn btn-info btn-flat"><i class="fas fa-align-left"></i></button> | <button type="button" class="btn btn-danger btn-flat"><i class="fas fa-align-right"></i></button> ' ;
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('backend.category.manage_category');
    }
    
    public function save(Request $request, Category $category)
    {
        //return Category::all();

       
        
        $category->create([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
        ]);
        return redirect()->back()->with('message','Category Saved Successfully !');
    }
}
