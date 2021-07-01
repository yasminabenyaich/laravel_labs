@extends('layouts.appFront')

@section('content')
@include('partials.navbar')
@include('partials.service.headerService')
@include('partials.service.serviceCard')
@include('partials.service.featureService')
@include('partials.service.service')
@include('partials.newsLetter')
@include('partials.contactContent')
@include('partials.contactForm')


@include('partials.footer')

@endsection