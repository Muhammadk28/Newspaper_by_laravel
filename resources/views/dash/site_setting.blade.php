@extends('admin-layout')
@section('title','Site Setting')

@section('dash-content')
<div class="row d-flex">
    <form action="" method="post">
        @csrf
        <div class="col-offset-1 col-md-10 col-offset-1">
            
            <div class="form-group ">
                <div class="d-flex">
                    <h4 class="col-md-6">Site Name:</h4>
                    <input type="text" name="label" value="{{old('label')}}" required  id="label" class="col-md-6 form-control @error('label') is-invalid @enderror" placeholder="Example: Home" aria-describedby="helpId">
                    @error('label')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
        </div>
        
    </form>
</div>
@endsection