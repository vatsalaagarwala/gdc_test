@extends('app')

@section('head_title', $listing->title.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

<div class="details-lt-blok">
  <div class="item">
    <div class="slider-pic"><img src="{{ URL::asset('site_assets/images/details-view.jpg')}}" alt="slide images"></div>
  </div>
</div>
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>          
          <li class="active">{{$listing->title}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="container venue-header">
  <div class="row venue-head">
    <div class="logo-image"> <img alt="" src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}"> 
    </div>
    {{-- <div class="vendor-image">
      <img alt="" src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}">
    </div> --}}
    <div class="col-md-12 title">
      <h1>{{$listing->title}}</h1>
      <p class="location"><i class="fa fa-map-marker"></i>{{$listing->address}}</p>
      <div class="rating-box">
        <div class="rating"> 
          
          @for($x = 0; $x < 5; $x++)
                  
          @if($x < $listing->review_avg)
            <i class="fa fa-star"></i>
          @else
            <i class="fa fa-star-o"></i>
          @endif
         
          @endfor
          <span class="rating-count" style="color: #fff;">({{\App\Reviews::getTotalReview($listing->id)}})</span>
        </div>

      </div>

       
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8 page-description">


          <div class="col-md-12 ">
              <div class="profile-sidebar well-box">
                {{-- <div class="profile-userpic"> <img src="{{ URL::asset(\App\User::getUserInfo($listing->user_id)->image_icon) }}" class="img-responsive img-circle" alt=""> </div> --}}
  
                <div class="profile-userpic"> <img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive img-circle" alt=""> </div>
  
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                      <h2>{{ $listing->title }}</h2>
                  </div>
                  <div class="profile-usertitle-name">
                    <h4>Dr. {{ \App\User::getUserFullname($listing->user_id) }}</h4>
                  </div>

                  <div class="rating-box" style="margin-left: 25%">
                      <div class="rating"> 
                        
                        @for($x = 0; $x < 5; $x++)        
                          @if($x < $listing->review_avg)
                            <i class="fa fa-star"></i>
                          @else
                            <i class="fa fa-star-o"></i>
                          @endif
                        @endfor
                        <span class="rating-count" style="color: #fff;">({{\App\Reviews::getTotalReview($listing->id)}})</span>
                      </div>
                  </div>
                  <br>
                  <div class="profile-website"> <i class="fa fa-phone"></i> <a href="tel:+918876721208">{{ \App\User::getUserInfo($listing->user_id)->mobile }}</a> </div>
                  <div class="profile-address"> <i class="fa fa-map-marker"></i> {{ $listing->address }} </div>
                  <div class="profile-email"> <i class="fa fa-envelope"></i> {{ \App\User::getUserInfo($listing->user_id)->contact_email }} </div>
                  <div class="profile-website"> <i class="fa fa-link"></i> <a href="#">{{ \App\User::getUserInfo($listing->user_id)->website }}</a> </div>
                </div>
  
              </div>
              
            </div>



        <div class="profile-gallery" id="profile-gallery">
          
          <div class="row">
            <div class="col-md-12">
              <h1>Treatments Provided : </h1>
            </div>


            <div class="p20 background-white well-box">
              <div class="working-hours">
                
                <h3 class="text-center">Consultation Fee : {{ $listing->consultation_fee }} </h3>

              </div>
            </div>


            <div class="col-md-12">

                  @php
                    if(isset($listing->keywords)){

                      $buffer = $listing->keywords;
                      $services = explode(',', $buffer);

                      $buffer_treatments = $listing->treatments;
                      $treatments = explode(',', $buffer_treatments);

                      $buffer_prices = $listing->prices;
                      $prices = explode(',', $buffer_prices);

                    }
                  @endphp


                  @php
                    $index = sizeof($prices);

                    unset($prices[$index - 1]);
                    unset($treatments[$index - 1]);
                  @endphp

                  <div class="p20 background-white well-box">
                    <div class="working-hours">
                      @foreach( array_combine($treatments, $prices) as $key => $price)
                        <div class="day clearfix"> 
                          <span class="name">{{ $key }}</span>
                          <span class="name" style="float: right;"> COST : {{ $price }}</span>
                        </div>
                      @endforeach

                    </div>
                  </div>
                 

            </div>
          </div>
          
        </div>






        @if($listing_gallery_images)
        <div class="profile-gallery" id="profile-gallery">
          
          <div class="row">
            <div class="col-md-12">
              <h1>Gallery</h1>
            </div>
            <div class="col-md-12">
              <div id="sync1" class="owl-carousel">
                @foreach($listing_gallery_images as $i => $gallery_img)
                <div class="item"> <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" alt="" class="img-responsive"> </div>
                @endforeach
                 
              </div>
              <div id="sync2" class="owl-carousel">
                 @foreach($listing_gallery_images as $i => $gallery_img)
                <div class="item"> <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" alt="" class="img-responsive"> </div>
                @endforeach
                 
              </div>
            </div>
          </div>
          
        </div>
        @endif

        @if($listing->video)
        <div class="profile-gallery" id="profile-gallery">
          <div class="row">
            <div class="col-md-12">
              <h1>Video</h1>
            </div>
            <div class="col-md-12">
              <div class="videoWrapper">
                {!!$listing->video!!}
                
              </div>
            </div>
          </div>
        </div>
        @endif

        @if($listing->map_lat and $listing->map_long)
        <div class="profile-gallery" id="profile-gallery">
          <div class="row">
            <div class="col-md-12">
              <h1>Map</h1>
            </div>
            <div class="col-md-12">
              <div class="map" id="googleMap"></div>
            </div>
          </div>
        </div>
        @endif
        <div class="venue-details">
          {!!$listing->description!!}
        </div>
         
         @include("_particles.user_reviews")

      </div>
      <div class="col-md-4 page-sidebar">
        <div class="row">
          <div class="col-md-12" >
            <div class="well-box" id="inquiry">
              <h2>Book Appointment</h2>
              {{-- {!! Form::open(array('url' => 'inquiry_send','class'=>'','id'=>'inquiry_form','role'=>'form')) !!} --}}

              <form action="/sms" method="GET">
              <div class="message">
                         
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    
                        <ul style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                                    
            </div>
            @if(Session::has('flash_message'))

              <div class="alert alert-success fade in">
                  
                 {{ Session::get('flash_message') }}
               </div>

                 
            @endif 

                <p>
                  Date : <input type ="text" name="date" id="datepicker" class="t-d" placeholder="Select Date" />
                </p>
                <p>
                  Time : <input type="text" name="time" id="timepicker" class="t-d" placeholder="Select Time" />
                </p>
                <br>

                <input name="subject" type="hidden" value="Enquiry for {{$listing->title}}" >
                <input name="mobile_doc" type="hidden" value="{{ \App\User::getUserInfo($listing->user_id)->mobile }}" >

                <div class="form-group">
                  <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                  <div class="">
                    <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
                  <div class="">
                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">
                    <span class="help-block"> </span> </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="email-one">Email:<span class="required">*</span></label>
                  <div class="">
                    <input id="email-one" name="email" type="text" placeholder="Email" class="form-control input-md" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label" for="email-one">Message:</label>
                  <div class="">
                    <input id="email-one" name="note" type="text" placeholder="Email" class="form-control input-md" >
                  </div>
                </div>
               {{--  <div class="form-group">
                  <label class="control-label" for="message">Message:</label>
                  <div class="">
                    <input id="message" name="message" type="text" placeholder="Message" class="form-control input-md" rows="5"></textarea>
                     
                  </div>
                </div>    --}}

                <input type="hidden" name="user_id" value="{{ $listing->user_id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                
                <div class="form-group">
                  <button name="submit" class="btn tp-btn-default tp-btn-lg btn-block">BOOK NOW</button>
                </div>

              </form>
              {{-- {!! Form::close() !!} --}}
            </div>
          </div>
          @if($listing->working_hours_mon or $listing->working_hours_tue or $listing->working_hours_wed or $listing->working_hours_thurs or $listing->working_hours_fri or $listing->working_hours_sat or $listing->working_hours_sun)
          <div class="col-md-12">
            <div class="p20 background-white well-box">
              <h2 class="widgettitle">Working Hours</h2>
              <div class="working-hours">
                <div class="day clearfix"> <span class="name">Mon</span><span class="hours">{!!$listing->working_hours_mon!!}</span> </div>
                <div class="day clearfix"> <span class="name">Tue</span><span class="hours">{!!$listing->working_hours_tue!!}</span> </div>
                <div class="day clearfix"> <span class="name">Wed</span><span class="hours">{!!$listing->working_hours_wed!!}</span> </div>
                <div class="day clearfix"> <span class="name">Thu</span><span class="hours">{!!$listing->working_hours_thurs!!}</span> </div>
                <div class="day clearfix"> <span class="name">Fri</span><span class="hours">{!!$listing->working_hours_fri!!}</span> </div>
                <div class="day clearfix"> <span class="name">Sat</span><span class="hours">{!!$listing->working_hours_sat!!}</span> </div>
                <div class="day clearfix"> <span class="name">Sun</span><span class="hours">{!!$listing->working_hours_sun!!}</span> </div>
              </div>
            </div>
          </div>
          @endif
          <div class="col-md-12">
            <div class="p20 background-white detail-amenities-list well-box">
              <h2 class="widgettitle">Amenities</h2>
              <div class="detail-content">
                <ul class="detail-amenities">
                  @foreach(explode(',', $listing->amenities) as $amenities_info) 
                    <li class="yes">{{$amenities_info}}</li>
                  @endforeach
                   
                </ul>
              </div>
            </div>
          </div>

          {{-- Profile Box --}}

          {{-- <div class="col-md-12 ">
            <div class="profile-sidebar well-box"> --}}
              {{-- <div class="profile-userpic"> <img src="{{ URL::asset(\App\User::getUserInfo($listing->user_id)->image_icon) }}" class="img-responsive img-circle" alt=""> </div> --}}

              {{-- <div class="profile-userpic"> <img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" class="img-responsive img-circle" alt=""> </div>

              <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                  <h2>{{ \App\User::getUserFullname($listing->user_id) }}</h2>
                </div>
                <div class="profile-website"> <i class="fa fa-phone"></i> <a href="tel:+918876721208">{{ \App\User::getUserInfo($listing->user_id)->mobile }}</a> </div>
                <div class="profile-address"> <i class="fa fa-map-marker"></i> {{ \App\User::getUserInfo($listing->user_id)->address }} </div>
                <div class="profile-email"> <i class="fa fa-envelope"></i> {{ \App\User::getUserInfo($listing->user_id)->contact_email }} </div>
                <div class="profile-website"> <i class="fa fa-link"></i> <a href="#">{{ \App\User::getUserInfo($listing->user_id)->website }}</a> </div>
              </div>

            </div>
          </div> --}}

          {{-- Profile Box end --}}


          <!-- <div class="col-md-12">
            <div class="social-sidebar side-box well-box">
              <ul class="listnone follow-icon">
                <li><a href="{{ \App\User::getUserInfo($listing->user_id)->facebook_url }}"><i class="fa fa-facebook"></i></a></li>                            
                <li><a href="{{ \App\User::getUserInfo($listing->user_id)->twitter_url }}"><i class="fa fa-quora"></i></a></li>
                <li><a href="{{ \App\User::getUserInfo($listing->user_id)->linkedin_url }}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{ \App\User::getUserInfo($listing->user_id)->dribbble_url }}"><i class="fa fa-dribbble"></i></a></li> 
                <li><a href="{{ \App\User::getUserInfo($listing->user_id)->instagram_url }}"><i class="fa fa-instagram"></i></a></li> 
                <li><span class="social social-quora"></span></li>    
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script src="{{ URL::asset('site_assets/js/sjs.js') }}"></script>
<script type="text/javascript">
    (function($) {

      $(function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker" ).datepicker();
     });

    $(function() {
        $('#timepicker').timepicker();
    });

})(jQuery);

</script>

<script src="http://maps.googleapis.com/maps/api/js?key={{getcong('google_map_api')}} 
"></script> 
<script>
var myCenter=new google.maps.LatLng({{$listing->map_lat}},{{$listing->map_long}});

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
        position: myCenter, 
        map: map,
        title:"Hello World!"
});

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"Hello Address"
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
 
@endsection