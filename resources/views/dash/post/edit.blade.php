@extends('admin-layout')
@section('title','Edit Post')

@section('dash-content')

<div class="row d-flex">

    <?php
        $messege = Session::get('messege');
        if($messege){ 
    ?>
    <p class="alert alert-success"><?php echo $messege; ?> </p>
    <?php Session::put('messege', NULL);}; ?>
    <form action="/update-post/{{$edit->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">New Post</h3>
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" name="post_title" value="{{$edit->post_title}}" required  id="post_title" class="form-control @error('post_title') is-invalid @enderror" placeholder="Example: National" aria-describedby="helpId">
                        @error('post_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Content:</label>
                        <textarea name="post_content" id="" value="{{$edit->post_content}}" required cols="30" rows="15" class="form-control @error('post_content') is-invalid @enderror" placeholder="Write your Content..."></textarea>
                        
                        @error('post_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-default">
                        <input type="submit" value="submit" class="btn btn-success float-right">
                            <div class="panel-heading">
                                Post Atrribute
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    
                                    <h3>Category:</h3>
                                    @foreach( $cats as $cat)
                                    <fieldset value="{{$edit->category_id}}" required class="form-control @error('category') is-invalid @enderror">
                                        
                                        <input type="checkbox" name="category"   value="{{$cat->id}}" >    {{$cat->category_name}}</br>
                                       
                                       
                                    </fieldset>
                                    @endforeach
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Title:</label>
                                    <input class="form-control @error('feature_image') is-invalid @enderror " type="file"  name="feature_image" id="feature_image">
                                    @error('feature_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>

@endsection