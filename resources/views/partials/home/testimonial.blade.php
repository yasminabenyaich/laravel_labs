<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{ $testimonial->p }}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src={{ asset('img/' . $testimonial->pdp) }}>
                            </div>
                            <div class="client-name">
                                <h2>{{ $testimonial->name }}</h2>
                                <p>{{ $testimonial->job }}</p>
                            </div>
                        </div>
                    </div>
                            
                    @endforeach
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>