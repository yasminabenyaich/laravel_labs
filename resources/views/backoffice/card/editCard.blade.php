
@extends('layouts.appBack')
@section('content')
    
<form method="POST" action="{{route("cards.update",$card)  }}" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div>

      <div class="mb-3 ">
          <label class="form-label ">Icone</label>
          <br>
          @foreach ($icones as $icone)
        <input type="radio" class="btn-check" name="icone_id" value={{ $icone->id }}>
        <label class="btn btn-secondary" for="option1"><i class={{ $icone->icone }}></i></label>
        @endforeach
      </div>
    <div class="mb-3">
        <label class="form-label">Titre</label>
        <input type="text" class="form-control" name="h2">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="p">
      </div>
     
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection