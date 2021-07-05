@extends('layouts.appBack')
@section('content')
    
<form method="POST" action="{{route("cards.store",$card)  }}" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div>

      <div class="mb-3 ">
        <label class="form-label ">Icone</label>
        <br>
        @foreach ($icones as $icone)
      <input type="radio" class="btn-check" name="icone_id" value={{ $icone->id }} id="option1" autocomplete="off" checked>
      <label class="btn btn-secondary" for="option1"><i class={{ $icone->icone }}></i></label>
    </div>
    
      @endforeach
    
    <div class="mb-3">
        <label class="form-label">Titre</label>
        <input value="{{ $card->h2 }}" type="text" class="form-control"  name="h2">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Description</label>
        <input value="{{ $card->p }}" type="text" class="form-control"  name="p">
      </div>
     
   
    </div>
</form>
@endsection




















{{-- @extends('layouts.appBack')
@section('content')

@section('content')

                
<div class="form-label">
    <form action="/cards" method="POST" class="m-3">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        @csrf
                    
                            <div class="mb-3">
                                <label class="form-label ">Icone</label>
                                <br>
                                @foreach ($icones as $icone)
                                    <div class="input-group my-2 col">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input" value="{{$icone->id}}" name="icone_id">
                                            </div>
                                        </div>
                                        <i class="{{$icone->icone}}" style="font-size: 40px"></i>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" name="h2" class="form-control" value="{{old('h2')}}">
                        </div>

                        <div class="form-group">
                            <label for="p">Text : </label>
                            <input type="text" name="text" class="form-control" value="{{old('p')}}">
                        </div>

                        <button type="submit" ">Ajouter</button>
                        </div>
    </form>
  
@endsection --}}