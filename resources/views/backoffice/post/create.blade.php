@extends('layouts.appBack')
@section('content')
<section class="d-flex">
    <div class=" w-100 overlay">
        <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
            <h1 class="mb-5"> Create Post</h1>
          
        </div>
    <form class="w-75 mx-auto mb-5" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label user-label  ">Titre :</label>
            <input type="text" class="form-control p-0" name="title">
        </div>

        <div class="mb-3 my-3">
            <label class="form-label">Image:</label>
            <input type="file" class="form-control p-0 h-100" name="thumbnail">

        </div>

        <div class="mb-3">
            <label class="form-label">Content :</label>
            <textarea class="form-control" id="floatingTextarea" name="content"></textarea>
        </div>



        <div class="mb-5 mt-5 flex flex-col my-8">
            <label class="text-2xl">Tag : </label>
            <br>
            <select name="tags[]" multiple>
                <option disabled>Choisissez le/les tag(s) :</option>
                @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-5 mt-5 flex flex-col my-8">
            <label class="text-2xl">Categorie : </label>
            <br>
            <select name="categories[]" multiple>
                <option disabled>Choisissez la/les catégorie(s) :</option>
                @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="w-100 text-center mt-5">
            <button type="submit" class="site-btn">Create</button>
        </div>
    </form>
</div>
</section>

@endsection