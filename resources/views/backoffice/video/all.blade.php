@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5"> Video</h1>

                  <a href="/video/create" class="btn mb-3">Ajouter une video</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Youtube Link</th>
                            {{-- <th scope="col"> </th> --}}
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($video as $video)
                            <tr>
                                <th scope="row">{{$video->id}}</th>
                                 <td>
                                  <img src="{{asset('img/'. $video->url)}}" alt="" height="150px">
                                </td> 
                                <td>
                                  <a href="{{$video->link}}">{{$video->link}}</a>
                                </td>
                                <td>
                                    <a href="/video/{{$video->id}}/edit" class="btn">EDIT</a>
                                </td>
                                <td>
                                  <form action="/video/{{$card->id}}" method="POST">
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
