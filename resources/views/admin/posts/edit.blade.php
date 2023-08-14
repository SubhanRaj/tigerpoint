@extends('admin.layout')
@section('title')
Edit {{$post->title}}
@endsection
@section('content')
<div class="container-fluid">
    <!-- Top Breadcromb -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Edit {{$post->title}}</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Edit Post</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{asset('images/admin/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit form -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <form action="" class="form" id="edit-post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$post->id}}">
                    <div class="mb-3 row">
                        <label for="title" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{$post->title}}" id="title" name="title" />
                            @error('title')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="date_published" class="col-md-2 col-form-label">Date of Publishing</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="{{$post->date_published}}" id="date_published" name="date_published" />
                            @error('date_published')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="short_description" class="col-md-2 col-form-label">Short Description</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{$post->short_description}}" id="short_description" name="short_description" />
                            @error('short_description') 
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror                            
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="long_description" class="col-md-2 col-form-label">Long Description</label>
                       <!-- text editor using CKEditor -->
                       <div class="col-md-10">
                            <textarea class="form-control" id="long_description" name="long_description" rows="3" cols="10">{{$post->long_description}}</textarea>
                            @error('long_description')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection