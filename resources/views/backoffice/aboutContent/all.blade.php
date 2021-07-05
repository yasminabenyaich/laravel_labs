@extends('layouts.appBack')

@section('content')
<div class="about-contant overlay">
    <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1 class="my-0 mx-2">Abouts</h1>
       
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col-3">#</th>

              
                <th scope="col-3">Paragraphe 1</th> 
                <th scope="col-3">Paragraphe 2</th> 
                <th scope="col-3">Btn texte</th>

        
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutContents as $aboutContent)
                <tr>
                    <th scope="row">{{ $aboutContent->id }}</th>
 
    
                    <td>{{ $aboutContent->p1 }}</td>
                    <td>{{ $aboutContent->p2 }}</td>
                    <td>{{ $aboutContent->btn}}</td>
                    
                    <td>
                        <div class="d-flex">
        
                            <a href="/aboutContents/{{ $aboutContent->id }}/edit" class="site-btn ml-3">edit</a>
                            {{-- @can('update', $aboutContent)
                            <a class="btn btn-success text-white mx-2" href="/abouts/{{ $aboutContent->id }}/edit"><i class="fas fa-edit"></i></a> 
                            @endcan --}}
                            
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
