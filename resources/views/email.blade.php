@extends('layouts.appFront')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $contenuEmail["name"] }}</h1>
        </div>
        <div>
            <h1>{{ $contenuEmail["email"] }}</h1>
        </div>
        <div class="col">
            <h2>{{ $contenuEmail["subject"] }}</h2>
        </div>
        <div class="col">
            <p>{{ $contenuEmail["message"] }}</p>
        </div>
     

    </div>

</div>
    
@endsection