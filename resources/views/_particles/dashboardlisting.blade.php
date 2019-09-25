@extends('app')

@section('gymcontent')
  <section>
    <div class="dash_bg d-flex align-items-center bg-gradient-orange">
        <h1 class="font-weight-bold ml-5 text-white">Fittstop > My Listing</h1>
    </div>
  </section>  
  
  <section>
    <div class="container-fluid">
       
      <div class="row mt-5">
        <div class="col-12 col-lg-3 d-flex justify-content-center">
            <div class="dashsidepanel shadow text-center mb-4">
             
              <ul class="list-group list-group-flush p-3 mt-3 text-left font-weight-bold">
                <li class="list-group-item">Profile</li>
                <li class="list-group-item active">My Listing</li>
                <li class="list-group-item">Settings</li>
                <li class="list-group-item">Referrals</li>
               
              </ul>
              <div class="logout-btn mt-5 mb-5">
                <button type="button" class="btn btn-outline-danger">Log Out</button>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-9 maindashboard">
           <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 mb-3 text-center">
                    <div class="prof-description text-center shadow round-border p-3">
                        <div class="listing-profileimg d-flex justify-content-center">
                            <div class="mylisting p-1 mt-3" style="width: 8rem; height: 8rem;">
                                <img src="./site_assets/images/abc.jpg" alt="...">
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="user-details">
                                <h2>Lorem ipsum </h2>
                                <h5 class="text-muted">Lorem, ipsum dolor.</h5>
                            </div>
                            <div class="user-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit esse amet tempora explicabo ipsum laborum optio reprehenderit adipisci rem ab.</p>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-lg-8">
                    <div class="mylistingdetails round-border shadow p-3">
                        {!! Form::open(array('url' => 'signup','class'=>'','id'=>'signup','role'=>'form')) !!}

                        <form>
                            <div class="text-left">
                                <h3 class="font-weight-bold">Listing Details</h3><hr>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"><b>First Name</b></label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"><b>Last Name</b></label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label"><b>Location</b></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Location">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label"><b>Specialization</b></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Specialization">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label"><b>Experience</b></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Work Experience">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><b>Description</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            {{-- <hr> --}}
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-12 text-center col-form-label" style="font-size:1.5rem;"><b>Workout Routines</b></label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Paste Google Drive Link Here">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-100">Submit</button>
                        </form>
    
                        {!!Form::close()!!}
                    </div>
                </div>    
            </div>   
            </div> 
        </div>
      </div>
    </div>
  </section>
@endsection