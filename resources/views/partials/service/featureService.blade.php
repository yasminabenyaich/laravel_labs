<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[0]->title) !!}</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            
            <div class="col-md-4 col-sm-4 features">
                @foreach ($services as $key=>$service)
                @if ($key<= 2 )
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{ $service->h3 }}</h2>
                        <p>{{ $service->p }}</p>
                    </div>
                    <div class="icon">
                        <i class={{ $service->icone->icone }}></i>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
                    
                


            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            
            <div class="col-md-4 col-sm-4 features">
                @foreach ($services as $key=>$service)
                @if ($key > 2 && $key <=5)
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{ $service->h3 }}</h2>
                        <p>{{ $service->p }}</p>
                    </div>
                    <div class="icon">
                        <i class={{ $service->icone->icone }}></i>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
          
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">{{ $service->btn }}</a>
        </div>
    </div>
</div>

