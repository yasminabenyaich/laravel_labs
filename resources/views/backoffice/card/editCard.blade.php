@extends('layouts.appBack')
@section('content')
    
<form method="POST" action="{{route("cards.update",$card)  }}" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="mb-3 ">
        <label class="form-label ">Icone</label>
        <br>
        @foreach ($icones as $icone)
      <input type="radio" class="btn-check" name="icone_id" value={{ $icone->id }} id="option1" autocomplete="off" checked>
      <label class="btn btn-secondary" for="option1"><i class={{ $icone->icone }}></i></label>
      @endforeach
    <label for="form-label">Titre</label>
    
    <div class="mb-3">
        <label class="form-label">Titre</label>
        <input value="{{ $card->h2 }}" type="text" class="form-control"  name="h2">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Description</label>
        <input value="{{ $card->p }}" type="text" class="form-control"  name="p">
      </div>
    </div>      
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection