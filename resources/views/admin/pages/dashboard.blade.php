@extends('admin.layout')
@section('content')
@include('admin.includes.sidebar')
<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    @include('admin.includes.header')
    <!--  Header End -->
</div>
<!--  Let user choose dark or light mode -->
@include('admin.includes.theme-button')


@endsection