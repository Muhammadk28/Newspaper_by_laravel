 <!-- Newsletter Widget -->
 <div class="newsletter-widget">
    <h4>Newsletter</h4>
    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <?php
        $messege = Session::get('messege');
        if($messege){ 
    ?>
    <p class="alert alert-success"><?php echo $messege; ?> </p>
    <?php Session::put('messege', NULL);}; ?>

    <?php
        $message = Session::get('message');
        if($message){ 
    ?>
    <p class="alert alert-danger"><?php echo $message; ?> </p>
    <?php Session::put('messege', NULL);}; ?>

    <form action="/subscriber"  method="post">
    @csrf
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name')}}" name="first_name" placeholder="First Name">
                @error('first_name')
                    <span class="invalid-feedback" style="margin-top:-20px" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name')}}"  name="last_name" placeholder="Last Name">
                @error('last_name')
                    <span class="invalid-feedback" style="margin-top:-20px" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" style="margin-top:-20px" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
        </div>
        
        <button type="submit" class="btn w-50 ">Subscribe</button>
    </form>
</div>