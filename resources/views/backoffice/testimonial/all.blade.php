@extends('layouts.appBack')

@section('content')
<div class="container-fluid overlay">
 
        <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1 class="my-0 mx-2">Testimonials</h1> 
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">paragraphe</th> 
                <th scope="col">photo de profil</th> 
                <th scope="col">nom</th> 
                <th scope="col">role</th> 
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->p }}</td>
                    <td><img style="width : 200px" src={{ asset('img/'. $testimonial->pdp) }} alt=""></td>

                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->job }}</td>
                    <td>
                        <div class="d-flex">
                           
                           
                            <a href="/testimonials/{{ $testimonial->id }}/edit" class="site-btn">Edit</a>
                                
{{--                            
                            <a class="btn btn-warning text-white mx-2" href="/testimonials/{{ $testimonial->id }}"><i class="fas fa-eye"></i></a> --}}
                        
                           <form action={{ route('testimonials.destroy', $testimonial->id) }} method="post">
                               @csrf
                               @method("delete")
                               <button class="btn btn-danger text-dark mx-2" type="submit">Delete</button>
                           </form>
                               
                          
                           
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href={{ route('testimonials.create') }} class="site-btn ml-3">Create</a>

    <div>
        {{ $testimonials->links() }}
    </div>
@endsection
