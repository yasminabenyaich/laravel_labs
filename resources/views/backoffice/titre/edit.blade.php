@extends('layouts.appBack')

@section('content')
<section class="w-100 overlay">
  <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
    <h1 class="my-0 mx-2">Edit Contact</h1>
  </div>
  <p> Mettre entre parenthèse le text à surligner.</p>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/titres/{{ $titre->id }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")

          <div class="mb-3">
            <label class="form-label">Titre</label>
            <input value="{{ $titre->title}}" type="text" class="form-control"  name="title">
          </div>
          <button type="submit" class="btn btn-danger">Submit</button>
      </form>
</section>
@endsection