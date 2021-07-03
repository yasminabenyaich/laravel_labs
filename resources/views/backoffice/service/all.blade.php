 @extends('layouts.appBack')

@section('content')
<div class="container">
    <div class="row">
        <h1> Service Features</h1>
        <!-- single card -->
        @foreach ($services as $service)
        <div class="col-md-4 col-sm-4 features">
            <div class="service-text"">
                <div class="icone">
                    <i class="{{ $service->icone->icone }}"></i>
                </div>
                <h2>{{ $service->h3 }}</h2>
                <p>{{ $service->p }}</p>
                <a href={{ route('services.edit',$service) }} class="site-btn btn-2">Edit</a>
            
            </div>
        </div>
        
        @endforeach
     

@endsection  