<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
             
                <!-- Post item -->
                @foreach ($posts as $post)
                    
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src={{ asset('img/blog/' . $post->thumbnail) }} alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{ $post->content }}</p>
                        <a href={{ route('blogPost',$post->id) }} class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>