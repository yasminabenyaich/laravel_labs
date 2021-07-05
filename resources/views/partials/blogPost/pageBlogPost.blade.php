<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
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
                            <a href="">{{count($post->comments) . " Comments"}}</a>
                        </div>
                        <p>{{ $post->content }}</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. </p>
                        <p>Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. </p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src={{ asset('img/avatar/' . $post->user->pdp) }} alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{ $post->user->name }} <span>Author</span></h2>
                            {{-- <p>{{ description article}} </p> --}}
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">

                        <h2>Comments ({{ count($post->comments) }})</h2>
                        <ul class="comment-list">
                          @foreach ($post->comments as $comment)
                          
                          <li>
                              <div class="avatar">
                                  <img src={{ asset('img/avatar/' . $comment->user->pdp) }} alt="">
                              </div>
                              <div class="comment-text">
                                  <h3>{{ $comment->user->name }} | 03 nov, 2017 | Reply</h3>
                                  <p>{{ $comment->msg }}</p>
                              </div>
                          </li>
                              
                          @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            
                            <form method="POST" action={{ route('comments.store') }} class="form-class" >
                                @csrf
                                <div class="row">
                                    
                                        <div class="col-sm-12">
                                            <input type="text" name="post_id" value="{{ $post->id }}" placeholder="Subject" style="display:none">
                                            <textarea name="msg" placeholder="Message"></textarea>
                                            <button class="site-btn" type="submit"> send</button>
                                        </div>
                               
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
           <!-- Sidebar area -->
			<div class="col-md-4 col-sm-5 sidebar">
				<!-- Single widget -->
				<div class="widget-item">
					<form action="#" class="search-form">
						<input type="text" placeholder="Search">
						<button class="search-btn"><i class="flaticon-026-search"></i></button>
					</form>
				</div>
				<!-- Single widget -->
				<div class="widget-item">
					<h2 class="widget-title">Categories</h2>
					<ul>
						@foreach ($categories as $categorie)
						<li><a href="{{route('blogPost', $categorie->id)}}">{{$categorie->name}}</a></li>
						@endforeach
					</ul>
				</div>

				<!-- Single widget -->
				<div class="widget-item">
					<h2 class="widget-title">Tags</h2>
					<ul class="tag">
						@foreach ($tags as $tag)
						<li><a href="{{route('blogPost', $tag->id)}}">{{$tag->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- page section end-->
