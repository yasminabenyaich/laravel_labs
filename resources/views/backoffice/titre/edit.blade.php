@extends('layouts.appBack')

@section('content')
<section class="container jumbotron-fluid">
    <h2 class="text-center my-4 bg-danger">Edit about</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/titres/{{ $titre->id }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")

          <div class="mb-3">
            <label class="form-label">title</label>
            <input value="{{ $titre->title}}" type="text" class="form-control"  name="title">
          </div>
          <button type="submit" class="btn btn-danger">Submit</button>
      </form>
</section>
@endsection