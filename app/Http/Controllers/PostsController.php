<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use PhpParser\Node\Stmt\Return_;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return post view page in admin
        return view('admin.posts.manage', [
            'posts' => Posts::Paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createBlog()
    {
        //return create post view page in admin
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($url_slug)
    {
        $post = Posts::where('url_slug', $url_slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
