@extends('layouts.appBack')
@section('content')
    

<div class="container overlay">
    
    <ul>
      @foreach ($errors->all() as $message) 
          <li>{{ $message }}</li>
      @endforeach
    </ul>
    <form method="POST" action="{{route("carousselItems.store")  }}" enctype="multipart/form-data">
        @csrf
        
        
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control"  name="img">
    </div>
  
    
            <button type="submit" class="btn btn-primary">Submit</button>
    
        </form>
    </section>
    
    @endsection
       
          

        
       
        

