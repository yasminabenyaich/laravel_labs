@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">testimonials</h1>
        @can('create', Testimonial::class)
        <a href={{ route('testimonials.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
            
        @endcan
    </div>
    <table class="table text-white">
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
                           
                           
                            <a class="btn btn-success text-white mx-2" href="/testimonials/{{ $testimonial->id }}/edit"><i class="fas fa-edit"></i></a>
                                
                           
                            <a class="btn btn-warning text-white mx-2" href="/testimonials/{{ $testimonial->id }}"><i class="fas fa-eye"></i></a>
                        
                           <form action={{ route('testimonials.destroy', $testimonial->id) }} method="post">
                               @csrf
                               @method("delete")
                               <button class="btn btn-danger text-white mx-2" type="submit">
                                   <i class="fas fa-trash-alt"></i></button>
                           </form>
                               
                           @endcan
                           
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $testimonials->links() }}
    </div>
@endsection
