@extends('layouts.appBack')

@section('content')
<div class="w-100 overlay">
    

    <div class="row">
    <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1> Cartes Home Service</h1>
       
    </div>
    
 {{-- <div class="w-100  mb-5">
        <a href={{ route('cards.createCards') }} class="btn site-btn">Create</a>
    </div>  --}}
        <!-- single card -->
        @foreach ($cards as $card)
        <div class="col-md-4 col-sm-6">
            <div class="lab-card mt-5">
                <div class="icone">
                    <i class="{{ $card->icone->icone }}"></i>
                </div>
                <h2>{{ $card->h2 }}</h2>
                <p>{{ $card->p }}</p>
                <a href={{ route('cards.edit',$card) }} class="site-btn btn-2">Edit</a>
            
            </div>
        </div>
        
        @endforeach
     

@endsection
