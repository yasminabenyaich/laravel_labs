@extends('layouts.appBack')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Modifier l'image</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/carousselItems/{{$carousselItem->id}}" method="POST" enctype="multipart/form-data" class="m-3">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="img">Image : </label> <br>
                            <img src="{{asset('storage/img/'.$carousselItem->img)}}" height="200px" alt=""> <br> <br>

                            <input type="file" name="img">
                        </div>

                 
                        <button type="submit" class="btn mt-4">registrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection