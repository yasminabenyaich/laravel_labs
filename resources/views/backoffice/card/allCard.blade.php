@extends('layouts.appBack')

@section('content')
<div class="container">
    <div class="row">
        <h1> Cartes home</h1>
        <!-- single card -->
        @foreach ($cards as $card)
        <div class="col-md-4 col-sm-6">
            <div class="lab-card">
                <div class="icone">
                    <i class="{{ $card->icone->icone }}"></i>
                </div>
                <h2>{{ $card->h2 }}</h2>
                <p>{{ $card->p }}</p>
                <a href={{ route('cards.edit',$card) }} class="site-btn btn-2">Edit</a>
                <button class="site-btn btn-2">Create</button>
            </div>
        </div>
        
        @endforeach
     

@endsection