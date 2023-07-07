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
            'posts' => Posts::latest()->filter(request(['search', 'category', 'tag']))->paginate(6)
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
    // Retun the categories page with data from database
    public function categories()
    {
        return view('pages.categories');
    }
    // Return a single post view with data from database
    public function posts(Posts $post)
    {
        return view('pages.post',[
            'post' => $post
        ]);
    }
    
    // Return a single collection view with data from database
    // public function categories(Posts $category_name)
    // {
    //     return view('pages.category',[
    //         'category_name' => $category_name
    //     ]);
    // }


    // Return Gallery view
    public function gallery()
    {
        return view('pages.gallery');
    }
}
