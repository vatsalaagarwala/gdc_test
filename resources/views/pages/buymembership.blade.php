@extends("app")

@section('head_title', 'Buy Membership | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Buy Membership</h1>
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
          <li class="active">Buy Membership</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      
      @include("_particles.user_sidebar")

      @php

        if ($membership_plan == "Prime") {
          $amount = 800000;
        }else if ($membership_plan == "Elite") {
          $amount = 1200000;
        }else if ($membership_plan == "Exclusive") {
          $amount = 2500000;
        }

      @endphp

      @if(isset($var))
        <h1>{{ $var }}</h1>
      @endif

      @php
        // print_r($_POST);
      @endphp


       <div class="col-md-3 col-sm-3">
        <div class="statusbox">
        <h2>Buy</h2>
          <div class="statusbox-content"> 
              <div>
                <a href="https://www.instamojo.com/@chinmoyhazarika/lca3b98a6f458422b827db6044ee6e846/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Checkout With Instamojo"></a>
              <script src="https://js.instamojo.com/v1/button.js"></script>
              </div>


              {{-- @php
                $razor_api_key="rzp_test_J2aXi8XyevrMrq";
              @endphp

              <form action="/process_payment" method="POST">
              <!-- Note that the amount is in paise = 50 INR -->
              <script
                  src="https://checkout.razorpay.com/v1/checkout.js"
                  data-key="{{ $razor_api_key }}"
                  data-amount={{ $amount }}
                  data-buttontext="Pay with Razorpay"
                  data-name="Gentle Dental"
                  data-description="Purchase Description"
                  data-image="https://your-awesome-site.com/your_logo.jpg"
                  data-prefill.name="Kabir Das"
                  data-prefill.email="test@test.com"
                  data-theme.color="#F37254"
              ></script> --}}


              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" value="Hidden Element" name="hidden">
              <input type="hidden" name="membership_plan" value="{{ $membership_plan }}">
              </form>

          </div>  
        </div>
        </div>

    </div>
  </div>
</div>
@endsection