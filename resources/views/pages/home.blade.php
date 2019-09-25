@extends('app')

@section('content')

@include("_particles.slider_search") 

<!-- <script type="text/javascript">
            function getlocation() {

              
                if (navigator.geolocation) { 
                  console.log("called !");

                    // if(document.getElementById('location').innerHTML) {
                      
                        navigator.geolocation.getCurrentPosition(visitorLocation);
                    // } 
                } else { 
                  console.log("called ! 2 else");
                  navigator.geolocation.getCurrentPosition(visitorLocation);
                    $('#location').html('This browser does not support Geolocation Service.');
                }
            }

            function visitorLocation(position) {

              console.log("called ! 2");

                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                $.ajax({
                    type:'POST',
                    url:'/loctest',
                    data:{
                      'latitude='+lat+'&longitude='+long
                    },
                    success:function(address){
                        if(address){
                           $("#location").html(address);
                        }else{
                            $("#location").html('Not Available');
                        }
                    }
                });
            }
</script> -->


@php
    function get_client_ip_home() {
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

    function ip_details_home($ip) {
        $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
        $details = json_decode($json); // HERE!!!
        return $details;
    }
    $ipaddress = get_client_ip_home();
    // echo $ipaddress;
    $details = ip_details_home("103.96.51.32");
    // echo $details->city; // CHANGE TO IP!!!
@endphp


@php
    if ($details->city == "Guwahati") {
      $location_id = '1';
    }else {
      $location_id = '0';
    }
@endphp

@php
  
  if (isset($test)) {
    echo $test;
    echo "HEY THERE";
  }

@endphp


{{-- @php
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
    echo $ipaddress;
    $details = ip_details("103.96.51.32");
    echo $details->city; // CHANGE TO IP!!!
@endphp --}}


<div class="container" id="featured-list" class="featured-listing">
    <div class="row">
        <div class="row clearfix" style="margin-bottom: 50px;">
          <div class="col-md-9">
            <div class="text-center">

              <h2 style="color: black; text-transform: uppercase;"><strong>Best</strong> <strong>Dentists</strong>near me</h2>
            </div>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right ">
                    <a class="left fa fa-chevron-left btn btn-info" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#carousel-example"
                            data-slide="next">
                    </a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide " data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
              @foreach(\App\Listings::where(array('featured_listing'=>'1','status'=>'1', 'location_id'=>$location_id))->orderBy('id')->get() as $featured_listing)

                    <div class="col-md-4 col-sm-4 col-xs-12 hi-icon-effect-8 featured-listing" style="padding: 0px 20px 10px 20px;">
                    <div class="single-product">

                  <figure> 
                    <div class="rating">
                      <p>Verified</p>
                    </div>
                  </figure>

                  <div class="vendor-detail">
                    <div class="row">

                      <div class="col-sm-1 col-xs-1">
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <br>
                        <div class="vendor-image">
                          <img src="{{ URL::asset('upload/listings/'.$featured_listing->featured_image.'-s.jpg') }}" class="img-responsive" style="height: 55px; width: 55px">
                        </div>
                      </div>

                <div class="col-sm-6 col-xs-6">
                  <div class="caption">
                    <h2><a class="word-limit"  href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}">{{$featured_listing->title}}</a>
                    <!-- <h2><a class="word-limit" href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}">Lorem ipsum dolor sit amet.</a> -->
                    </h2>
                    {{-- <p class="location" style="min-height:42px;">{{str_limit($listing->address,50)}}</p> --}}
                    

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
                      </div>

                      <p style="font-size: 1.2rem;"> Consultation Fee : {{ $featured_listing->consultation_fee }} </p>
                  </div>
                </div>

              </div>
              </div>

              </div>
              </div>
              @endforeach
                        <!-- <div class="col-sm-4">
                            how 
                        </div>
                        <div class="col-sm-4">
                            you 
                        </div>  -->
                    </div>
                </div>
                <!-- THIS IS SLIDE 2 -->
                <!-- <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            i am good
                        </div>
                        <div class="col-sm-4">
                            how 
                        </div>
                        <div class="col-sm-4">
                            ola
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>    

<div id="featured-list" class="featured-listing" style="display:none;">
  <div class="container">
    <div class="row clearfix">
      {{-- <h2 style="color: black;"><strong>TOP</strong></h2> --}}
      <h2 style="color: black;"><strong>Best</strong> <strong>Dentists </strong>  <strong>near me</strong></h2>

      
      <div id="featured-list" class="featured-listing">
          <div class="container">
            <div class="row clearfix">

              {{-- <h2 style="color: black;"><strong>Top</strong> <strong> Dentists</strong> near me</h2> --}}
              @foreach(\App\Listings::where(array('featured_listing'=>'1','status'=>'1', 'location_id'=>$location_id))->orderBy('id')->get() as $featured_listing)

                {{-- <div class="col-md-4 vendor-box" style="min-height:80px;"> --}}
                  <div class="col-md-4 col-sm-4 col-xs-12 hi-icon-effect-8">
                    <div class="single-product">

                  <figure> 
                    <div class="rating">
                      <p>Verified</p>
                    </div>
                  </figure>

                  <div class="vendor-detail">
                    <div class="row">

                      <div class="col-sm-1 col-xs-1">
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <br>
                        <div class="vendor-image">
                          <img src="{{ URL::asset('upload/listings/'.$featured_listing->featured_image.'-s.jpg') }}" class="img-responsive" style="height: 55px; width: 55px">
                        </div>
                      </div>

                <div class="col-sm-6 col-xs-6">
                  <div class="caption">
                    <h2><a href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}">{{$featured_listing->title}}</a>
                    </h2>
                    {{-- <p class="location" style="min-height:42px;">{{str_limit($listing->address,50)}}</p> --}}
                    

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
                      </div>

                      <p style="font-size: 1.2rem;"> Consultation Fee : {{ $featured_listing->consultation_fee }} </p>
                  </div>
                </div>

              </div>
              </div>

              </div>
              </div>
              @endforeach
       </div>
      </div>
    </div> 


       

      {{-- @foreach(\App\Listings::where(array('featured_listing'=>'1','status'=>'1'))->orderBy('id')->get() as $featured_listing)
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
      @endforeach --}}
       
    </div>
  </div>
</div>

<div id="featured-list" class="featured-listing" style="margin-left : 20px; margin-right : 20px; display:none;">
  <div class="container">
    <div class="row clearfix">
      <h2 style="color: black;">Forum11</h2>

        
        <br>
        <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://gentledental.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </div>
  </div>
</div>





<div class="spacer feature-section classifieds-content">
  <div class="container">



    {{-- <div class="heading-section clearfix">
      <h1>Classifieds Categories</h1>
       
    </div>

    <div class="row">
      <div class="col-md-12">
        <ul class="classifieds-category">
          @foreach(\App\Categories::orderBy('category_name')->get() as $cat)
          <li>
            <a href="{{URL::to($cat->category_slug.'/'.$cat->id)}}"><i class="fa {{$cat->category_icon}}"></i>{{$cat->category_name}} <span>({{ \App\Categories::countCategoryListings($cat->id) }})</span></a>
            <ul class="sub-category">
              @foreach(\App\SubCategories::where('cat_id',$cat->id)->orderBy('sub_category_name')->get() as $subcat)
              <li><a href="{{URL::to($cat->category_slug.'/'.$subcat->sub_category_slug.'/'.$subcat->id)}}">{{$subcat->sub_category_name}} <span>({{ \App\SubCategories::countSubCategoryListings($subcat->id) }})</span></a></li>
              @endforeach
               
            </ul>
          </li>
          @endforeach
           
        </ul>
      </div>
       
    </div> --}}

    
  </div>
</div>


 
@endsection