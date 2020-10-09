@extends('homelayout')
@section('title','Category')
@section('content')
<div class="featured-post-area">
    <div class="container">
        @if (!count($singels))
            <h2 class="my-5">No Post found for this category</h2>
        @else
        @foreach($singels as $post)
        <div class="col-12 col-md-8 col-lg-8 mt-5">
        
            <!-- Single Featured Post -->
            <div class="single-blog-post small-featured-post d-flex">
                <div class="post-thumb">
                    <a href="#"><img src="{{URL::to($post->feature_image)}}" alt=""></a>
                </div>
                <div class="post-data">
                    <a href="" class="post-catagory">{{$post->category->category_name}}</a>
                    <div class="post-meta">
                        <a href="/single_post/{{$post->id}}/{{$post->post_url}}" class="post-title">
                            <h6>{{$post->post_title}}</h6>
                        </a>
                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection