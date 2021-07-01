
    <div class="container">
        <div class="section-title">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[0]->title) !!}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>{{ $aboutContent->p1 }}</p>
            </div>
            <div class="col-md-6">
                <p>{{ $aboutContent->p2 }}</p>
            </div>
        </div>
        <div class="text-center mt60">
            <a href="" class="site-btn">{{ $aboutContent->btn }}</a>
        </div>
        <!-- popup video -->
        <div class="intro-video">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img src={{ asset('img/' . $video->url) }} alt="">
                    <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
