@extends('homelayout')
@section('title','{ !!$single->post_title !!}')
@section('content')


<div class="blog-area section-padding-0-80 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>{{$single->post_title}}</h6>
                                </a>
                            </div>
                            <div class="post-thumb">
                                <a href="#"><img src="{{URL::to($single->feature_image)}}" alt="hello kayes"></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">{{$single->category->category_name}}</a>
                               
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{$single->user->name}}</a></p>
                                    {{ $single->post_content }}
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">finacial,</a></li>
                                                <li><a href="#">politics,</a></li>
                                                <li><a href="#">stock market</a></li>
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="blog-post-author d-flex">
                            <div class="author-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                                <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                            </div>
                        </div>

                        <div class="pager d-flex align-items-center justify-content-between">
                            <div class="prev">
                                <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                            </div>
                            <div class="next">
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>


                        <!-- Comment Area Start -->
                        
                        @include('front.comment.comment')
                        @include('front.comment.show')
                       
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>4 Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-50">
                            <h4>Newsletter</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="img/bg-img/30.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="img/bg-img/31.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail mr-15">
                                    <img src="img/bg-img/32.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection