<?php

namespace App\Http\Controllers\web\Dashboard;



use Illuminate\view\view;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    

        
    function index() {
        return view ('backend.layouts.blog-category.blog-category');
    }
  
function create():view{
    return view ('backend.layouts.blog-category.create');
}
    function store(Request $request) {
        // return view ('backend.layouts.blog-category.create');
        dd($request->all());
        
    }

}
