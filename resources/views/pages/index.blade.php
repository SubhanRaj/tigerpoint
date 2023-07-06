<!-- use layout.blade.php as master layout -->
@extends('layouts.layout')
@section('content')
<div class="lx-personal-card">
    <div class="lx-personal-img">
        <img src="{{asset('images/profile3.jpg')}}">
    </div>
    <p>Professional Photographer</p>
    <h1>Every moment worth to be memorized</h1>
</div>
@if(count($posts) == 0)
<p>No Posts Found</p>
@endif
@foreach($posts as $post)
<!-- Show post with odd if using lx-post, and post with even id using lx-post lx-post-right -->
@if ($post->id % 2 == 0)
    <x-post-right :post="$post" />
@else
    <x-post-left :post="$post" />
@endif

@endforeach


<!-- <div class="lx-post">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post2.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Technology</a></span>
            <h3><a href="single-post.html">Push yourself, because no one else is going to do it for you</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>
<div class="lx-post lx-post-right">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post4.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Hiking</a></span>
            <h3><a href="single-post.html">Great things never come from comfort zones</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>
<div class="lx-post">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post5.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Technology</a></span>
            <h3><a href="single-post.html">Success doesn’t just find you. You have to go out and get it</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>
<div class="lx-post lx-post-right">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post6.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Cuisine</a></span>
            <h3><a href="single-post.html">The harder you work for something, the greater you’ll feel when you achieve it</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>
<div class="lx-post">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post7.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Hiking</a></span>
            <h3><a href="single-post.html">Don’t stop when you’re tired. Stop when you’re done</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>
<div class="lx-post lx-post-right">
    <div class="lx-post-img">
        <a href="single-post.html"><img alt="Alternative Title" src="images/post8.jpg" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="collection.html">Technology</a></span>
            <h3><a href="single-post.html">Wake up with determination. Go to bed with satisfaction</a></h3>
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div> 
-->
<div class="lx-navigation">
    <a href="#" class="lx-prev">PREV</a>
    <a href="#" class="lx-next">NEXT</a>
    <div class="lx-clear-fix"></div>
</div>
@endsection