 @extends('layouts.appBack')

@section('content')
<div class="w-100 overlay">
    <div class="row">
        <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
            <h1 class=""> Service </h1>
            {{-- <a href={{ route('service.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a> --}}
        </div>
        <!-- single card -->
        @foreach ($services as $service)
        <div class="col-md-4 col-sm-4 features ">
            <div class="lab-card mt-5">
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