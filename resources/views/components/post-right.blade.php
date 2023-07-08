@props(['post'])
<div class="lx-post lx-post-right">
    <div class="lx-post-img">
        <a href="/{{$post->url_slug}}"><img alt="{{$post->title}}" src="{{$post->image}}" /></a>
    </div>
    <div class="lx-post-title">
        <figure>
            <span><a href="/?category={{$post->category_name}}">{{$post->category_name}}</a></span>
            <h3><a href="/{{$post->url_slug}}">{{$post->title}}</a></h3>
            <p>{{$post->short_description}}</p>
            <x-tags :tagsCsv="$post->tags" />
        </figure>
    </div>
    <div class="lx-clear-fix"></div>
</div>