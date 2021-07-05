@extends('layouts.appBack')
@section('content')
<!-- services card section-->
<div class="services-card-section spad">
    <div class="container overlay">
        <div class="w-100  mb-5">
            <a href="{{route('posts.create')}}" class="btn site-btn mb-3">Create</a>
        </div>
        <!-- Single Card -->
        @foreach ($posts as $post)
       

        <div class="post-item">
            <div class="post-thumbnail">
                <img style="width: 755px; height: 270px;" src={{ asset('img/blog/' . $post->thumbnail) }} alt="">

            </div>
            <div class="post-content">
                <h2 class="post-title text-dark">{{ $post->title }}</h2>
                <div class="post-meta">
                    
                    @foreach ($post->categories as $categorie)
                    <a class="text-dark" href="{{route('categorie', $categorie->id)}}">{{$categorie->name}}</a>
                    @endforeach
                    @foreach ($post->tags as $tag)
                    <a class="text-dark" href="{{route('tag', $tag->id)}}">{{$tag->name}}</a>
                    @endforeach
                    @if ( count($post->comments) == 0 )
                    <a class="text-dark" href={{ route('blogPost', $post->id) }}> ({{ count($post->comments) }})
                        Comment</a>
                    @else
                    <a class="text-" href={{ route('blogPost', $post->id) }}> ({{ count($post->comments) }})
                        Comments</a>
                    @endif
                </div>
                <p class="text-dark"> {{Str::limit( $post->content, 255, $end='...')}}</p>
                @can('post-edit', \App\Models\Post::class)
                <div class="d-flex">
                    <a href="{{route('posts.edit', $post->id)}}" class="site-btn  ml-3">Edit</a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        <button type="submit" class="site-btn bg-dark text-danger ml-3">destroy</button>
                    </form>
                    @if (!$post->validation)
                    <form action="{{route('validation', $post->id)}}" method="post">
                        @csrf
                        <button type="submit" class="site-btn  btn-2 text-danger ml-3">Validé</button>
                    </form>
                    @endif

                </div>
                @endcan
            </div>
        </div>
       
        @endforeach
    </div>
</div>
<!-- services card section end-->
@endsection