
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h1 class="mb-5">Modifier la video</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/video/{{$edit->id}}" method="POST" enctype="multipart/form-data" class="m-3">
                    @csrf
                    @method('PATCH')
                    
                    <div class="form-group">
                        <label for="url">Image : </label> <br>
                        <input type="file" name="url" id="url">
                    </div>

                    <div class="form-group">
                        <label for="link">Insérer lien Youtube : </label>
                        <input type="text" name="link" class="form-control" value="{{old('link') ? old('link') : $video->link}}">
                    </div>

                    <button type="submit" class="btn mt-4">enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection