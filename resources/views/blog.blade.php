@extends('layouts.appFront')
@section('content')

@include('partials.navbar')

@include('partials.blog.headerBlog')
@include('partials.blog.postBlog')
@include('partials.blog.paginationPost')
@include('partials.blog.sidebar')
@include('partials.newsLetter')

@include('partials.footer')

    


@endsection
