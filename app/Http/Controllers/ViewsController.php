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
}
