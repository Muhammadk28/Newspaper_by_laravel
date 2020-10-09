 <!-- ##### Editorial Post Area Start ##### -->
 <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Editor’s Pick</h6>
                    </div>

                    <div class="row">
                    @if(count($editors)>0)
                    @foreach($editors as $editor)
                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{URL::to($editor->feature_image)}}"  alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>{{$editor->post_title}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">{{$editor->created_at}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    @else
                    <h1>Please Create Editor's Pick Category Post!</h1>
                    @endif
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>World News</h6>
                    </div>
                    @if(count($worlds)>0)
                    @foreach($worlds as $world)
                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img src="{{URL::to($world->feature_image)}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>{{$world->post_title}}</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @else
                    <h1>Please Create World Category Post!</h1>
                    @endif
                    

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->