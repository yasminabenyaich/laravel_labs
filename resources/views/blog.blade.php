@extends('layouts.appFront')
@section('content')

@include('partials.navbar')

@include('partials.blog.headerBlog')
@include('partials.blog.postItemBlog')

@include('partials.blog.sidebar')
@include('partials.newsLetter')

@include('partials.footer')

    


@endsection
