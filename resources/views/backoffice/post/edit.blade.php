@extends('layouts.appBack')
@section('content')
<section class="container overlay">
    <h2 class="text-center my-4 bg-danger">Edit home</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/heroes/{{ $home->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-3">
          <label class="form-label">Titre</label>
          <input value="{{ $hero->h3 }}" type="text" class="form-control"  name="h3">
        </div>



          <div class="mb-3">
            <label class="form-label">Logo</label>
            <input value="{{ $hero->logo }}"   type="file" class="form-control"  name="logo">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection

About
