@extends('layouts.appBack')

@section('content')
<div class="w-100 overlay">
<div class="row">
    <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1 class="mb-5"> Caroussel contenu</h1>
      
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">logo</th>
   

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
                <tr>
                    <th scope="row">{{ $hero->id }}</th>
                   
                    <td>{{ $hero->h3 }}</td>
                   
                    <td><img style="width : 200px" src={{ asset('img/'. $hero->logo) }} alt=""></td>

                 
                    <td>
                        <div class="d-flex">

                            <a href="/heroes/{{ $hero->id }}/edit" class="btn site-btn mb-3">Edit</a>
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

@endsection

