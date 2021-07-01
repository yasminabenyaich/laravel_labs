<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
        
            @foreach ($cards as $card)
            
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
          <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>