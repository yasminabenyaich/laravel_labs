

@extends('layouts.appBack')

@section('content')

<div class="container-fluid overlay ">
    <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1 class="">Titres </h1>
        {{-- <a href={{ route('titres.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a> --}}
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titres as $titre)
                <tr>
                    <th scope="row">{{ $titre->id }}</th>
                    <td>{{ $titre->title }}</td>
  
                 
                    <td>
                        <div class="d-flex">
                            {{-- <a class="btn btn-warning text-dark mx-2" href="/titres/{{ $titre->id }}"><i class="fas fa-eye"></i></a> --}}
                            <a  href="/titres/{{ $titre->id }}/edit"class="site-btn ">edit</a>
                                <form action={{ route('titres.destroy', $titre->id) }} method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger text-dark mx-2" type="submit">
                                        <i class="fas fa-trash-alt"></i></button>
                                </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $titres->links() }}
    </div>
@endsection
