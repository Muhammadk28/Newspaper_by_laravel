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
            <h3 class="box-title">Edit Menu</h3>
            <form action="/update-menu/{{$menu->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Label:</label>
                    <input type="text" name="label" value="{{$menu->label}}" required  id="label" class="form-control @error('label') is-invalid @enderror" placeholder="Example: Home" aria-describedby="helpId">
                    @error('label')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Url:</label>
                    <input type="text" name="url" value="{{$menu->url}}" required  id="url" class="form-control @error('url') is-invalid @enderror" placeholder="Exampur:  /Home" aria-describedby="helpId">
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                
                <div class="container-login100-form-btn">
                    <input type="submit" value=" Edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    
</div>

@endsection