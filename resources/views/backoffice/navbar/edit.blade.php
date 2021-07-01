@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit Navbar</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/navbars/{{ $navbar->id }}" enctype="multipart/form-data">
        @csrf
        @method("put")
        
        <div class="mb-3">
            <label class="form-label">Link</label>
            <input value="{{ $navbar->link }}" type="text" class="form-control"  name="link">
          </div>
        <div class="mb-3">
            <label class="form-label">Page</label>
            <input value="{{ $navbar->page }}" type="text" class="form-control"  name="page">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>
@endsection