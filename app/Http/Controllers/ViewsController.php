<?php

namespace App\Http\Controllers;

use view;
use App\Models\Posts;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //Return Home i.e. default view with all posts with pagination
    public function index()
    {
        return view('pages.index', [
            'posts' => Posts::latest()->paginate(5)
        ]);
    }

    // Return About view
    public function about()
    {
        return view('pages.about');
    }

    // Return All Collections view with data from database
    public function collections()
    {
        return view('pages.collections');
    }

    // Return a single collection view with data from database
    public function categories(Posts $category_name)
    {
        return view('pages.category',[
            'category_name' => $category_name
        ]);
    }


    // Return Gallery view
    public function gallery()
    {
        return view('pages.gallery');
    }
}
