@extends('layouts.appBack')
@section('content')
<section class="container-fluid overlay">
  <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
    <h2>Edit About</h2>
  </div>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

    </ul>

  <form method="POST" action="/aboutContents/{{ $aboutContent->id }}" enctype="multipart/form-data">
      @csrf
      @method("put")
      
 

      <div class="mb-3">
          <label class="form-label">paragraphe1</label>
          <input value="{{ $aboutContent->p1 }}" type="text" class="form-control"  name="p1">
        </div>

        <div class="mb-3">
          <label class="form-label">paragraphe2</label>
          <input value="{{ $aboutContent->p2 }}" type="text" class="form-control"  name="p2">
        </div>

 
        <div class="mb-3">
          <label class="form-label">btn texte</label>
          <input value="{{ $aboutContent->btn }}" type="text" class="form-control"  name="btn">
        </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection