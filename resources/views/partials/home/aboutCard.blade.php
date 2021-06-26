<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class={{ $cards[$i]->icone->icone }}></i>
                        </div>
                        <h2>{{ $cards[$i]->h2 }}</h2>
                        <p>{{ $cards[$i]->p }}</p>
                    </div>
                </div>
                @endfor
                
                
            </div>
        </div>
    </div>