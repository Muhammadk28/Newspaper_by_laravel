@extends('admin-layout')
@section('title','My Profile')

@section('dash-content')

<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> 
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)">
                        
                            <img src="{{URL::to('admin/dash/plugins/images/users/genu.jpg')}}" class="thumb-lg img-circle" alt="img">
                        </a>
                        <h4 class="text-white">{{$user->name}}</h4>
                        <h5 class="text-white">{{$user->email}}</h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material">
                <div class="form-group">
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" name="name" value="{{$user->name}}"  class="form-control form-control-line" required> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="text" id= "password"  value=""  class="form-control form-control-line">
                        <button id="generate" type="button" onclick="myGenerate() "> Generate</button>
                        <p id="pass"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone No</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="123 456 7890"
                            class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Message</label>
                    <div class="col-md-12">
                        <textarea rows="5" class="form-control form-control-line"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Select Country</label>
                    <div class="col-sm-12">
                        <select class="form-control form-control-line">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
   
    function myGenerate(){
        
        var pass = document.getElementById("password");

        function randomString(length, chars) {
            var result = '';
            for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
            return result;
        }
        var rString = randomString(10, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        pass.value = rString;
    }
</script>
@endsection