@extends('app')

@section('idishumcontent')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 d-none d-md-block signup_bg" >

            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 mt-4">
                        <h1 class="mb-4" >Log In </h1>
                            <div class="signup-form">
                                {!! Form::open(array('url' => 'login','class'=>'','id'=>'signup','role'=>'form')) !!} 
            
                                    <form class="form-validate">
            
                                        {{ csrf_field() }}
            
                                        <div class="form-group">
                                        <label for="loginUsername" class="form-label"> Email Address</label>
                                        <input name="email" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required data-msg="Please enter your email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="loginPassword" class="form-label"> Password</label>
                                        <input name="password" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-block btn-primary">Log In</button>
                                        {{-- <hr data-content="OR" class="my-3 hr-text letter-spacing-2"> --}}
                                        {{-- <button class="btn btn btn-outline-primary btn-block btn-social mb-3 bg-primary"><i class="fa-2x fa-facebook-f fab btn-social-icon text-dark"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
                                        <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button> --}}
                                        <hr class="my-4">
                                        <p class="text-sm text-muted">By signing up you agree to Directory's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
                                    </form>
                                    
            
                                {!! Form::close() !!} 
                            </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>



@endsection