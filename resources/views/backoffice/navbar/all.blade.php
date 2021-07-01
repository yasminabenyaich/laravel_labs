@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">homes</h1>
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">link</th>
                <th scope="col">page</th>
              

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($navbars as $navbar)
                <tr>
                    <th scope="row">{{ $navbar->id }}</th>
                    <td>{{ $navbar->link}}</td>
                    <td>{{ $navbar->page}}</td>
                 
                   
                 
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/navbars/{{ $navbar->id }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-success text-white mx-2" href="/navbars/{{ $navbar->id }}/edit"><i class="fas fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
