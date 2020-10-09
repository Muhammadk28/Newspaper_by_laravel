@extends('admin-layout')
@section('title','Menu Setting')

@section('dash-content')
<div class="row d-flex">

			<?php
				$messege = Session::get('messege');
                if($messege){ 
            ?>
                <p class="alert alert-success"><?php echo $messege; ?> </p>
                <?php Session::put('messege', NULL);}; ?>
		
<div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Add Menu</h3>
            <form action="/add-menu" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Label:</label>
                    <input type="text" name="label" value="{{old('label')}}" required  id="label" class="form-control @error('label') is-invalid @enderror" placeholder="Example: Home" aria-describedby="helpId">
                    @error('label')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Url:</label>
                    <input type="text" name="url" value="{{old('url')}}" required  id="url" class="form-control @error('url') is-invalid @enderror" placeholder="Exampur:  /Home" aria-describedby="helpId">
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                
                <div class="container-login100-form-btn">
                    <input type="submit" value="Add Menu" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    <div class="show-category col-md-8">

        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Menu List</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered " >
                            <thead style="text-align:center" >
                                <tr >
                                    <th>#</th>
                                    <th>Menu Label</th>
                                    <th>Menu Url</th>
                                    <th> Edit</th>
                                    
                                </tr>
                            </thead>
                            @if (count($shows) < 1 )

                            <h3 class="box-title">There are no menu list at the moment. Please Add Menu</h3>
                            @else
                            
                            <tbody class=" text-dark">
                            @foreach ($shows as $show)
                                <tr>
                                    <td>{{$show->id}}</td>
                                    <td>{{$show->label}}</td>
                                    <td>{{$show->url}}</td>
                                    <td>
                                        <button class="btn btn-primary ">
                                            <a class="text-white" href="/menu-edit/{{$show->id}}">Edit</a>
                                        </button>
                                        <button class="btn btn-danger">
                                            <a class="text-white" href="/menu-delete/{{$show->id}}">Delete</a>
                                        </button>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <!-- /.row -->
    </div>
</div>

@endsection