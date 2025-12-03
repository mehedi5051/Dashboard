<?php

namespace App\Http\Controllers\web\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    function index() {
        return view ('backend.layouts.blog-category');
    }

  
}
