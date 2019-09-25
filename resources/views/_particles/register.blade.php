@extends('app')

@section('gymcontent')



    <div class="container-fluid px-3">
        <div class="row min-vh-100">
          <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
            <div class="w-100 py-3 px-md-5 px-xl-6 position-relative">
              <div class="mb-3"><img src="./site_assets/images/login.png" alt="..." style="max-width: 4rem;" class="img-fluid mb-3">
                <h2>Sign up</h2>
                <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
              </div>

              {!! Form::open(array('url' => 'signup','class'=>'','id'=>'signup','role'=>'form')) !!} 

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
                <div class="form-group mb-4">
                  <label for="loginPassword2" class="form-label"> Confirm your password</label>
                  <input name="password2" id="loginPassword2" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
                </div>
                <label for="" class="form-label mb-4 mr-2">Signup As:</label>
                <div class="form-check-inline mb-4">
                <div class="radio-item">
                  <input type="radio" id="ritema" name="usertype" value="Gym">
                  <label for="ritema">Gym</label>
                </div>

                <div class="radio-item">
                  <input type="radio" id="ritemb" name="usertype" value="Trainer">
                  <label for="ritemb">Trainer</label>
                </div>
                  
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary">Sign up</button>
                <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
                <button class="btn btn btn-outline-primary btn-block btn-social mb-3 bg-primary"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Facebook</span></button>
                <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Connect <span class="d-none d-sm-inline">with Google</span></button>
                <hr class="my-4">
                <p class="text-sm text-muted">By signing up you agree to Directory's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
              </form>
              

              {!! Form::close() !!} 

            </div>
          </div>
          <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block background">
            <!-- Image-->
              <!-- <div style="background-image: url(https://d19m59y37dris4.cloudfront.net/directory/1-2/img/photo/photo-1497436072909-60f360e1d4b1.jpg); object-fit:cover;" class="h-100 mr-n3 img-fluid"></div>
            </div> -->
        </div>
      </div>

@endsection