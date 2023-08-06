@extends('admin.layout')
@section('title')
{{'Manage Posts'}}
@endsection
@section('content')
<div class="container-fluid">
    <!-- Top Breadcromb -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Manage All Posts</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="/admin/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Manage All Posts</li>
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
    <!-- table to show all posts from database -->
    <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">S. No.</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Title</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Published On</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Author</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Category</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Tags</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Actions</h6>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- use  a loop to repeat the table rows -->
                @foreach($posts as $post)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">
                                    <!-- get post id from database -->
                                    {{
                                        $post->id
                                    }}
                                </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h6 class="fs-4 fw-semibold mb-0">
                            <!-- get post title from database -->
                            {{$post->title}}
                        </h6>
                    </td>
                    <td>
                        <p class="mb-0 fw-normal">
                            <!-- Show published date from database -->
                            {{
                                $post->created_at->format('d M Y')
                            }}
                        </p>
                    </td>
                    <td>
                        <h6 class="fs-4 fw-semibold mb-0">
                            <!-- get post author from database -->
                            {{
                                $post->author_name
                            }}
                        </h6>
                    </td>
                    <td>
                        <h6 class="fs-4 fw-semibold mb-0">
                            <!-- get post author from database -->
                            {{
                                $post->category_name
                            }}

                        </h6>
                    </td>
                    <td>
                        <!-- get comma separated tags from database -->
                        @php
                        $tags = explode(',', $post->tags);
                        @endphp
                        @foreach($tags as $tag)
                        <span class="badge bg-light-primary rounded-3 py-8 text-primary fw-semibold fs-2">{{$tag}}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="dropdown dropstart">
                            <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="/posts/{{$post->url_slug}}" target="_blank"><i class="fs-4 ti ti-external-link"></i>View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="/admin/edit-post/{{$post->id}}"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection