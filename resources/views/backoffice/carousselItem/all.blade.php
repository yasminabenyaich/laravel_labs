
 @extends('layouts.appBack')

  @section('content')
  
    <div class="row">
        <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
            <h1 class="mb-5">Caroussel</h1>
          
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <a href={{ route("carousselItems.create") }} class="btn site-btn mb-3" >Ajouter une image</a>

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
                                        <img src="{{asset("img/" . $carousselItem->img)}}" height="100px" alt="">
                                    </td>
                                    <td>
                                        <form action="/carousselItems/{{$carousselItem->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">DELETE</button>
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
