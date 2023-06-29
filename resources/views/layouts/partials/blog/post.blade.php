<!-- SINGLE POST START -->
<div class="col-lg-8">
    <div class="single__blog-detail">
        <h1>
            {{ $post->title }}
        </h1>

        <div class="single__blog-detail-info">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <figure class="image-profile">
                        <img src="{{ $post->user->profile_picture }}" class="img-fluid" alt="">
                    </figure>
                </li>
                <li class="list-inline-item">

                    <span>
                        by
                    </span>
                    <a href="#">
                        {{ $post->user->name }},
                    </a>
                </li>
                <li class="list-inline-item">
                    <span class="text-dark text-capitalize ml-1">
                        {{ optional($post->published_at)->format('M d, Y') }}
                    </span>
                </li>

                <li class="list-inline-item">
                    <span class="text-dark text-capitalize ml-1">
                        in
                    </span>
                    <a href="{{ route('posts.category', $post->category)}}">
                        {{ $post->category->title }}
                    </a>
                </li>
            </ul>
        </div>
        <figure>
            <img src="{{ $post->poster }}" class="img-fluid" alt="">
        </figure>

        <!-- CONTENT -->
        <div>
            {!! $post->content !!}
        </div>

        <!-- TAGS -->
        <div class="blog__tags mb-4">
            <ul class="list-inline">
                @forelse ($post->tags as $tag)
                    <li class="list-inline-item">
                        <a href="{{ route('posts.tag', $tag)}}">
                            #{{$tag->title}}
                        </a>
                    </li>
                @empty
                    <li></li>
                @endforelse
            </ul>
        </div>
        <!-- END TAGS -->

        <!-- AUTHOR -->
        <!-- Profile author -->
        <div class="wrap__profile">
            <div class="wrap__profile-author">
                <figure>
                    <img src="{{ $post->user->profile_picture }}" alt="" class="img-fluid img-circle">
                </figure>
                <div class="wrap__profile-author-detail">
                    <div class="wrap__profile-author-detail-name">author</div>

                    <h5>{{ $post->user->name }}</h5>

                    <p>{{ $post->user->about }}</p>

                    <ul class="list-inline">
                        @isset($post->user->facebook_url)
                            <li class="list-inline-item">
                                <a href="{{$post->user->facebook_url}}" class="btn btn-social btn-social-o facebook ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        @endisset

                        @isset($post->user->twitter_url)
                            <li class="list-inline-item">
                                <a href="{{$post->user->twitter_url}}" class="btn btn-social btn-social-o twitter ">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        @endisset

                        @isset($post->user->instagram_url)
                            <li class="list-inline-item">
                                <a href="{{$post->user->instagram_url}}" class="btn btn-social btn-social-o instagram ">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        @endisset

                        @isset($post->user->youtube_url)
                            <li class="list-inline-item">
                                <a href="{{$post->user->youtube_url}}" class="btn btn-social btn-social-o youtube ">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        @endisset

                        @isset($post->user->linkedin_url)
                            <li class="list-inline-item">
                                <a href="{{$post->user->linkedin_url}}" class="btn btn-social btn-social-o linkedin ">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        @endisset

                    </ul>
                </div>
            </div>
        </div>
        <!-- END AUTHOR -->

        <div class="clearfix"></div>

        <!-- COMMENTS -->
        @if($post->comments->count() > 0)
            <h6>{{$post->comments->count()}} Comments:</h6>
            <div class="single__detail-features-review">
                <div class="media mt-4">
                    <img class="mr-3 img-fluid rounded-circle" src="images/profile-blog.jpg" alt="">
                    <div class="media-body">
                        <h6 class="mt-0">Jhon doe</h6>
                        <span class="mb-3">Mei 13, 2020</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">3/5</li>
                        </ul>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec
                            lacinia congue felis in faucibus.</p>

                        <div class="media mt-4">
                            <a class="pr-3" href="#">
                                <img src="images/client.png" alt="" class="img-fluid rounded-circle">
                            </a>
                            <div class="media-body">
                                <h6 class="mt-0">Christine </h6>
                                <span class="mb-3">Mei 13, 2020</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                        <i class="fa fa-star selected"></i>
                                    </li>
                                    <li class="list-inline-item">5/5</li>
                                </ul>
                                <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque ante sollicitudin. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media mt-4">
                    <img class="mr-3 img-fluid rounded-circle" src="images/profile-blog.jpg" alt="">
                    <div class="media-body">
                        <h6 class="mt-0">Jhon Doe</h6>
                        <span class="mb-3">Mei 13, 2020</span>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                            </li>
                            <li class="list-inline-item">5/5</li>
                        </ul>
                        <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec
                            lacinia congue felis in faucibus.</p>


                    </div>
                </div>
                <!-- COMMENT -->
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-2">Your rating for this listing:</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star selected"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">3/5</li>
                        </ul>
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>What's your Email?</label>
                            <input type="email" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Your message</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right "> Submit review <i
                        class="fa fa-paper-plane ml-2"></i></button>
                <!-- END COMMENT -->

            </div>
        @endif

        <!-- END COMMENTS -->
    </div>
</div>
<!-- SINGLE POST END -->
