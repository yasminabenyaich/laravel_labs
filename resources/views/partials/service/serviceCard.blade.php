<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[0]->title) !!}</h2>
        </div>
        <div class="row">
        
            @foreach ($cards->slice(0,9)->shuffle() as $card)
            
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class={{ $card->icone->icone }}></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $card->h2 }}</h2>
                        <p>{{ $card->p }}</p>
                    </div>
                </div>
            </div>
      
          @endforeach
           
    </div>
</div>