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
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm">Edit</a> | <a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a> ';
     
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
