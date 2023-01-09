@extends('frontend.master')
   @section('main_content')				
        <!-- Posts-block -->
        <div class="posts-block standard-box">
            <div class="title-section">
                <h1>Latest News <i class="lnr lnr-bookmark"></i></h1>
            </div>
            <div class="row">


                @foreach($posts as $post)
                <div class="col-sm-6">
                    <div class="news-post standart-post">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src='{{ asset("backend/posts/images/$post->post_image")}}' alt="">
                            </a>
                            <a href="index.html#" class="category category-tech">{{ $post->category_name}}</a>
                        </div>
                        <h2><a href="single-post.html">{{ $post->post_title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>{{ Str::words(strip_tags($post->post_description), 30, '....') }}.</p>
                    </div>
                </div>
                @endforeach
               
            </div>
            
        </div>
        <!-- End Posts-block -->
        
        <!-- Posts-block -->
        <div class="posts-block featured-box">
            <div class="title-section">
                <h1>Featured</h1>
            </div>

            <div class="owl-wrapper">
                <div class="owl-carousel" data-num="3">
                
                    <div class="item">
                        <div class="news-post standart-post">
                            <div class="post-image">
                                <a href="http://nunforest.com/minberi-mag/single-post">
                                    <img src="{{ asset('frontend/upload/blog/s24.jpg')}}" alt="">
                                </a>
                                <a href="index.html#" class="category category-fashion">fashion</a>
                            </div>
                            <h2><a href="single-post.html">Autumn wear ...</a></h2>
                            <ul class="post-tags">
                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                                <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="item">
                        <div class="news-post standart-post">
                            <div class="post-image">
                                <a href="http://nunforest.com/minberi-mag/single-post">
                                    <img src="{{ asset('frontend/upload/blog/s25.jpg')}}" alt="">
                                </a>
                                <a href="index.html#" class="category category-world">world</a>
                            </div>
                            <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                            <ul class="post-tags">
                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                                <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="item">
                        <div class="news-post standart-post">
                            <div class="post-image">
                                <a href="http://nunforest.com/minberi-mag/single-post">
                                    <img src="{{ asset('frontend/upload/blog/s26.jpg')}}" alt="">
                                </a>
                                <a href="index.html#" class="category category-food">food</a>
                            </div>
                            <h2><a href="single-post.html">Traditional food</a></h2>
                            <ul class="post-tags">
                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                                <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="item">
                        <div class="news-post standart-post">
                            <div class="post-image">
                                <a href="http://nunforest.com/minberi-mag/single-post">
                                    <img src="{{ asset('frontend/upload/blog/s27.jpg')}}" alt="">
                                </a>
                                <a href="index.html#" class="category">Politics</a>
                            </div>
                            <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                            <ul class="post-tags">
                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                                <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="item">
                        <div class="news-post standart-post">
                            <div class="post-image">
                                <a href="http://nunforest.com/minberi-mag/single-post">
                                    <img src="{{ asset('frontend/upload/blog/s28.jpg')}}" alt="">
                                </a>
                                <a href="index.html#" class="category category-travel">Travel</a>
                            </div>
                            <h2><a href="single-post.html">Visiting antic countries is John Doe hobby.</a></h2>
                            <ul class="post-tags">
                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                                <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        <!-- End Posts-block -->

        <!-- Advertisement -->
        <div class="advertisement">
            <a href="index.html#"><img src="upload/addsense/620x80grey.jpg')}}" alt=""></a>
        </div>
        <!-- End Advertisement -->
        
        <!-- Posts-block -->
        <div class="posts-block combined-box">
            <div class="title-section">
                <h1>Lifestyle</h1>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="news-post standart-post">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s13.jpg')}}" alt="">
                            </a>
                            <a href="index.html#" class="category category-fashion">Lifestyle</a>
                        </div>
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="http://nunforest.com/minberi-mag/single-post">
                                        <img src="{{ asset('frontend/upload/blog/s18.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="http://nunforest.com/minberi-mag/single-post">
                                        <img src="{{ asset('frontend/upload/blog/s20.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h2><a href="single-post.html">Excepteur sint occaecat cupidatat non proident</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="http://nunforest.com/minberi-mag/single-post">
                                        <img src="{{ asset('frontend/upload/blog/s24.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h2><a href="single-post.html">Consectetur adipisicing elit, sed do eiusmod</a></h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="http://nunforest.com/minberi-mag/single-post">
                                        <img src="{{ asset('frontend/upload/blog/s15.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h2><a href="single-post.html">Culpa qui officia deserunt mollit anim id est</a></h2>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Posts-block -->
        
        <!-- Posts-block -->
        <div class="posts-block articles-box">
            <div class="title-section">
                <h1>World News</h1>
            </div>
            
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s3.jpg')}}" alt="">
                            </a>
                            <a class="category category-travel" href="index.html#">Travel</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s4.jpg')}}" alt="">
                            </a>
                            <a class="category category-food" href="index.html#">Food</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s5.jpg')}}" alt="">
                            </a>
                            <a class="category category-world" href="index.html#">World</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s6.jpg')}}" alt="">
                            </a>
                            <a class="category category-travel" href="index.html#">Travel</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s7.jpg')}}" alt="">
                            </a>
                            <a class="category category-tech" href="index.html#">Tech</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <div class="news-post article-post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="post-image">
                            <a href="http://nunforest.com/minberi-mag/single-post">
                                <img src="{{ asset('frontend/upload/blog/s8.jpg')}}" alt="">
                            </a>
                            <a class="category category-fashion" href="index.html#">Fashion</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h2><a href="single-post.html">New alternatives are more productive</a></h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li>
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
            <ul class="pagination-list">
                <li><a href="index.html#">Prev</a></li>
                <li><a href="index.html#" class="active">1</a></li>
                <li><a href="index.html#">2</a></li>
                <li><a href="index.html#">3</a></li>
                <li><a href="index.html#">...</a></li>
                <li><a href="index.html#">6</a></li>
                <li><a href="index.html#">Next</a></li>
            </ul>

        </div>
        <!-- End Posts-block -->

@endsection