@php
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function ip_details($ip) {
        $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
        $details = json_decode($json); // HERE!!!
        return $details;
    }
    $ipaddress = get_client_ip();
    // echo $ipaddress;
    $details = ip_details("103.96.51.32");
    // echo $details->city; // CHANGE TO IP!!!
@endphp


<div class="tp-nav" id="headersticky">
  <div class="container">
    <h1 style="text-align: center;">Premium Ad Space</h1>
  </div>
</div>

@extends('app')

@section('head_title', 'Search Listings | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

{{-- <p>{{ $location}}</p> --}}

@php
    // if ($details->city == "Guwahati") {
    //   $location_id = '1';
    // }else {
    //   $location_id = '0';
    // }
@endphp

<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1> {{ $test }} </h1>
          <p style="color: white">{{ $treatment_snippet }}
            <br>
            Used for treatment of :
            <a href="/testuri?key=periodontitis" target="_blank">Periodontitis</a>,
            <a href="/testuri?key=surgery" target="_blank">Surgery</a>
          </p>
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
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Search</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">





    <div id="featured-list" class="featured-listing">
    <div class="container">
      <div class="row clearfix">
      <h2 style="color: black;"><strong>Top</strong> Doctors</h2>
      @foreach(\App\Listings::where(array('featured_listing'=>'1','status'=>'1'))->orderBy('id')->get() as $featured_listing)
      <div class="col-md-3 col-sm-4 col-xs-6 hi-icon-effect-8">
        <div class="single-product">
          <figure> <img alt="" src="{{ URL::asset('upload/listings/'.$featured_listing->featured_image.'-s.jpg') }}">
            <div class="rating">
              <ul class="list-inline">
                @for($x = 0; $x < 5; $x++)
                  
                @if($x < $featured_listing->review_avg)
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                @else
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                @endif
               
                @endfor
                
              </ul>
              <p>Featured</p>
            </div>
            <figcaption>
              <div class="read-more"> <a href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}"><i class="fa fa-angle-right"></i> Read More</a> </div>
            </figcaption>
          </figure>
          <h4><a href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}">{{$featured_listing->title}}</a></h4>
           <p class="location" style="min-height: 50px;">{{str_limit($featured_listing->address,50)}}</p>
        </div>
      </div>
      @endforeach
      </div>
    </div>
    </div> 

  {{-- @include("_particles.sidebar")   --}}

 <div class="col-md-9 col-sm-8">
        <div class="row">

        

          @if(!isset($location))
            @php
              $location = 0;
            @endphp
          @endif
          
          @php
            $counter = 1
          @endphp

          @foreach($listings as $listing)
          {{-- @if($listing->location_id == '1') --}}


          <div class="col-md-4 vendor-box" style="min-height:80px;">
            {{-- <div class="vendor-image"> <a href="{{URL::to('listings/'.$listing->listing_slug.'/'.$listing->id)}}"><img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive"></a>
               
            </div> --}}

            @php
            $counter += 1
            @endphp

            <div class="vendor-detail">
              <div class="caption">
                <h2><a href="{{URL::to('listings/'.$listing->listing_slug.'/'.$listing->id)}}" class="title">{{$listing->title}}</a></h2>
                <p class="location" style="min-height:42px;">{{str_limit($listing->address,50)}}</p>
                <div class="rating"> 
                  @for($x = 0; $x < 5; $x++)
                  
                    @if($x < $listing->review_avg)
                      <i class="fa fa-star"></i>
                    @else
                      <i class="fa fa-star-o"></i>
                    @endif
                   
                    @endfor
                    <span class="rating-count">({{\App\Reviews::getTotalReview($listing->id)}})</span> 
                </div>
                <h4>Consultation Fee : {{ $listing->consultation_fee }}</h4>
              </div>
              
              <div class="clearfix"></div>
            </div>
          </div>

          @if($counter == 7)
            <br>
            <div class="col-md-12 vendor-box" style="min-height:80px;">
            <div class="vendor-image"> <a href="{{URL::to('listings/'.$listing->listing_slug.'/'.$listing->id)}}"><img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive"></a>
            </div>

              <div class="vendor-detail">
              <br>
              <br><br><br>
              <h1 style="text-align: center;">Ad Space</h1>
              <br><br><br><br>
              <br>
              </div>
            </div>
            @endif



          {{-- @endif --}}
          @endforeach

         
            
        </div>
      </div>
    </div>
  </div>
</div>

 
@endsection