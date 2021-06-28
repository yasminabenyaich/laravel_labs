@extends('layouts.appBack')
@section('content')
<section class="container">
    <h2 class="text-center my-4 bg-danger">Edit contact</h2>
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach

  </ul>
    <form method="POST" action="/contact/{{ $contact->id }}/updated" enctype="multipart/form-data">
        @csrf
        @method("put")
       
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input value="{{ $contact->h2}}" type="text" class="form-control"  name="h2">
          </div>
        <div class="mb-3">
            <label class="form-label">Paragraphe</label>
            <input value="{{ $contact->p }}" type="text" class="form-control"  name="p">
          </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input value="{{ $contact->phone }}" type="text" class="form-control"  name="phone">
          </div>
        <div class="mb-3">
            <label class="form-label">Mail</label>
            <input value="{{ $contact->mail}}" type="text" class="form-control"  name="mail">
          </div>
          <div class="mb-3">
            <label class="form-label">Position</label>
            <input value="{{ $contact->position}}" type="text" class="form-control"  name="position">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
</section>
@endsection