@extends('layouts.appFront')
@section('content')

@include('partials.navbar')


@include('partials.blog.headerBlog')
@include('partials.element.buttonElem')
@include('partials.element.progressBar')
@include('partials.element.accordion')
@include('partials.element.loader')
@include('partials.element.counter')
@include('partials.element.iconeBox')
@include('partials.footer')

    


@endsection
