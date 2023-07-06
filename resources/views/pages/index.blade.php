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
@else
@foreach($posts as $post)
<!-- Show post with odd if using lx-post, and post with even id using lx-post lx-post-right -->
@if ($post->id % 2 == 0)
<x-post-left :post="$post" />
@else
<x-post-right :post="$post" />
@endif
@endforeach
@endif


<div class="lx-navigation">
    <a href="{{ $posts->previousPageUrl() }}" class="lx-prev">PREV</a>
    <a href="{{ $posts->nextPageUrl() }}" class="lx-next">NEXT</a>
    <div class="lx-clear-fix">
    </div>
</div>
@endsection