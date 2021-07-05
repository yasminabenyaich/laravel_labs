<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src={{ asset('img/' . $heroes[0]->logo) }} alt="">
            <p>{{ $heroes[0]->h3 }}</p>
        </div>
    </div>
   <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousselItems as $carousselItem)
        <div class="item  hero-item" data-bg={{ asset('img/' . $carousselItem->img) }}></div>
            
        @endforeach
   
    </div> 
</div>