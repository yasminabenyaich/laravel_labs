<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {{-- <h2>{{ $newsLetters[0]->h2 }}</h2> --}}
            </div>
            <div class="col-md-9">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif --}}
                <!-- newsletter form -->
                {{-- <form class="/newsletterMail" methode="POST" class="nl-form">
                    @csrf
                    <input type="text" name="email" placeholder="{{ $newsLetters[0]->input }}">
                    <button class="site-btn btn-2">{{ $newsLetters[0]->btn }}</button>
                </form> --}}
            </div>
        </div>
    </div>
</div>