@extends('layouts.appBack')

@section('content')
<div class="overlay">
    <div class="d-flex align-items-center justify-content-center mb-5 jumbotron">
        <h1 class="my-0 mx-2">Contacts</h1>
      
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
                            
                            <a href="/contacts/{{ $contact->id }}/edit"class="site-btn ml-3">edit</a>
                                
                        </div>
                    </td>
                </tr>
           
        </tbody>
    </table>
</div>
    {{-- <div>
        {{ $contacts->links() }}
    </div> --}}
@endsection
