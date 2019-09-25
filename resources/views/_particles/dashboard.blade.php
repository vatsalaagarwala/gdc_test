@extends('app')

@section('gymcontent')


  <section>
    <div class="dash_bg d-flex align-items-center bg-gradient-orange">
        <h1 class="font-weight-bold ml-5 text-white">Fittstop > Dashboard</h1>
    </div>
  </section>  
  
  <section>
    <div class="container-fluid">
      <div class="row mt-5">
        <div class="col-12 col-lg-3 sidedashbord d-flex justify-content-center">
            <div class="dashsidepanel shadow text-center">
              <!-- <div class="sidepaneltitle"> -->
                <!-- <h1 class="py-4">Side Panel</h1> -->
              <!-- </div> -->

              <ul class="list-group list-group-flush p-3 mt-3 text-left font-weight-bold">
                <li class="list-group-item">Profile</li>
                <li class="list-group-item"><a href="/dashboardlisting">My Listing</a></li>
                <li class="list-group-item">Settings</li>
                <li class="list-group-item">Referrals</li>
               
              </ul>
              <div class="logout-btn mt-5 mb-5">
                <button type="button" class="btn btn-outline-danger">Log Out</button>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-9 maindashboard">
            <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-lg-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow" style="width: 20rem;">
                        <img src="./site_assets/images/new-york.jpg" alt="" height="200">
                        <div class="card-body overlay-content">
                            <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                            <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-12 col-lg-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow " style="width: 20rem;">
                            <img src="./site_assets/images/new-york.jpg" alt="" height="200">
                            <div class="card-body overlay-content">
                                <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                                <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                            </div>
                        </div>
                </div> 
                <div class="col-sm-12 col-lg-4 p-2 d-flex justify-content-center">
                    <div class="card card-poster shadow" style="width: 20rem;">
                            <img src="./site_assets/images/new-york.jpg" alt="" height="200">
                            <div class="card-body overlay-content">
                                <h5 class="card-title text-shadow text-uppercase font-bold">Lorem ipsum</h5>
                                <p class="card-text text-sm font-bold">Lorem ipsum dolor.</p>
                            </div>
                        </div>
                </div> 
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection