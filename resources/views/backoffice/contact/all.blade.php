@extends('layouts.appBack')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">contacts</h1>
      
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th> 
                <th scope="col">Adress</th> 
                <th scope="col">Phone</th>
                <th scope="col">Mail</th>
                <th scope="col">Position</th>
            </tr>
        </thead>
        <tbody>
        
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->h2 }}</td>
                    <td>{{ $contact->p }}</td>
                    <td>{{ $contact->adress }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->mail }}</td>
                    <td>{{ $contact->position }}</td>
                 
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-white mx-2" href="/contacts/{{ $contact->id }}"><i class="fas fa-address-card"></i></a>
                            <a class="btn btn-success text-white mx-2" href="/contacts/{{ $contact->id }}/edit"><i class="fas fa-edit"></i></a>
                                
                        </div>
                    </td>
                </tr>
           
        </tbody>
    </table>
    {{-- <div>
        {{ $contacts->links() }}
    </div> --}}
@endsection
