@extends('admin.layout')
@section('title')
Write New Blog
@endsection
@section('content')
<div class="container-fluid">
    <!-- Top Breadcromb -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Write New Blog</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">New Blog</li>
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
                <form action="" class="form" id="edit-post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
                    <div class="mb-3 row">
                        <label for="title" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{old('title')}}" placeholder="Enter Post Title" id="title" name="title" />
                            @error('title')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="date_published" class="col-md-2 col-form-label">Date of Publishing</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="{{old('date_published')}}" id="date_published" name="date_published" />
                            @error('date_published')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="short_description" class="col-md-2 col-form-label">Short Description</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{old('short_description')}}" placeholder="Enter Short Description, that goes under the main image" id="short_description" name="short_description" />
                            @error('short_description')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for "tags" class="col-md-2 col-form-label">Tags</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{old('tags')}}" placeholder="Enter Comma Seprated tags without any space in-between, such as: tag 1,tag 2,tag 3" id="tags" name="tags" />
                            @error('tags')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="long_description" class="col-md-2 col-form-label">Long Description</label>
                        <!-- text editor using CKEditor -->
                        <div class="col-md-10">
                            <textarea class="form-control" id="long_description" placeholder="Enter Long Decription, or the main content of the post, use inbuilt styling methods to style content" name="long_description" rows="10" cols="10"></textarea>
                            @error('long_description')
                            <div class="invalid-feedback d-block">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- CKEditor -->


@endsection