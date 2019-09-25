@extends("app")

@section('head_title', 'Dashboard | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-md-12 vendor-box" style="min-height:80px;">
            <div class="vendor-image"> 
            </div>

              <div class="vendor-detail">
              <br>
              <br><br><br>
              <h1 style="text-align: center;">Get 1 month free with our paid plans</h1>
              <br><br>
              <br>
              </div>
            </div>
    </div>

    <div class="row">
      
      @include("_particles.user_sidebar")

     <div class="col-md-9 col-sm-9 content-right">
        <div class="row">
          <div class="col-md-12" id="aboutus">
            <h1>Dashboard</h1>                          
        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
          <h2>All Listings</h2>
          <div class="statusbox-content"> <strong>{{$listings}}</strong> </div>          
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
          <h2>Published</h2>
          <div class="statusbox-content"> <strong>{{$publish_listings}}</strong>   </div>          
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
        <h2>Pending</h2>
        <div class="statusbox-content"> <strong>{{$pending_listings}}</strong> </div>        
        </div>
      </div>
                                             
          </div>
        </div>
      </div>

       <div class="col-md-9 col-sm-9 content-right">
        <div class="row">
          <div class="col-md-12" id="aboutus">
              <div class="statusbox">
                <div class="statusbox-content"> 
                    <h1>Your Referral Code : {{ $user->id }}</h1> 
                    <p>Share it among your colleagues to earn an extra <b>FREE</b> month of your Plan*</p> 
                </div>          
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 content-right">
        <div class="row">
          <div class="col-md-12" id="aboutus">
              <div class="statusbox">
                <div class="statusbox-content">

                  @php

                    $referral_earn = 0;
                    $referred_earn = 0;

                    $referral_earn = $user->refers;
                    if(isset($user->referral))
                      $referred_earn = 1;


                    $total_earn = $referred_earn + $referral_earn;

                    echo "<h1>You're getting " . $total_earn . " months FREE</h1>";

                    // if ($user->refers == 0) {
                      
                    // }else{
                    //   echo "<h1>You're getting " . $user->refers . " months FREE</h1>";
                    // }
                  @endphp

                  {{-- @if(isset($user->referral))
                    <h1>You're getting 1 month FREE</h1>
                  @endif --}}

                </div>          
              </div>
            </div>
          </div>
        </div>        

    </div>
  </div>
</div>
@endsection