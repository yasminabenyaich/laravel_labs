
 @extends('layouts.appBack')

  @section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Caroussel</h1>

                    <a href="/carousselItems/create" class="btn mb-3" >Ajouter une image</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($carousselItems as $carousselItem)
                                <tr>
                                    <th scope="row">{{$carousselItem->id}}</th>
                                    <td>
                                        <img src="{{asset($carousselItem->img)}}" height="100px" alt="">
                                    </td>
                                    <td>
                                        <form action="/carousselItems/{{$carousselItem->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- 
@section('content')
<div class="card bg-dark text-white">
   <h5 class="card-title">Card title</h5>
   @foreach ($carousselItems as $carousselItems)
   <img class="card-img" src={{ asset($carousselItems[0]->img) }} alt="Card image">
   <div class="card-img-overlay">

       @endforeach

   </div>
   <a href="/carouselItems/{{$carouselItem->id}}/edit" class="btn" >EDIT</a>
 </div> --}}
 {{-- <div class="hero-section">
    <div class="hero-content">
        
    </div>

    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousselItems as $carousselItem)
        
        <div class="item  hero-item" data-bg={{ asset($carousselItem->img) }}>
        </div>
        @endforeach

    </div>
    <a href="/carouselItems/{{$carouselItem->id}}/edit" class="btn" >EDIT</a>
    {{-- <form action="/carouselItems/{{$carousel->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">DELETE</button>
    </form>/</div> --}}


 