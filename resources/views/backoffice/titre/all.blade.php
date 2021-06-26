@extends('layouts.appBack')
@section('content')


<div class="container jumbotron">
    @if (session('message'))
    <div class="container  p-0">
        <div class="alert alert-succes">
            {{ session('message') }}
        </div>
    </div>
        
    @endif

    <dir>
        @foreach ($titres as $titre)
            <div class="section-title">
                <h2>{{ $titre->id }}. {{ $titre->title }}</h2>
                 <a href= {{ route('titres.edit', $titre->id) }} > Edit</a>
            </div>
        @endforeach
    </dir>
    {{ $titres->links() }}
</div>

