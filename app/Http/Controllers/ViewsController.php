<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //Return Home i.e. default view
    public function index(){
        return view('pages.index');
    }

    // Return About view
    public function about(){
        return view('pages.about');
    }

    // Return All Collections view with data from database
    public function collections(){
        return view('pages.collections');
    }

    // Return a single collection view with data from database
    public function category(){
        return view('pages.category');
    }

    // Return a single post view with data from database
    public function singlePost(){
        return view('pages.single-post');
    }
    
    // Return Gallery view
    public function gallery(){
        return view('pages.gallery');
    }
   


    
}
