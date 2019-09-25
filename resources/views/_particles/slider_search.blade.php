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
<div class="row">


<div class="slider-bg" style="background: white;height:100vh;">
  <!-- <div id="slider" class="owl-carousel owl-theme slider" style="">
    <div class="item"><img style="opacity : 0.15" src="{{ URL::asset('upload/'.getcong('home_slide_image1'))}}" alt="slide images"></div>
    <div class="item"><img style="opacity : 0.15" src="{{ URL::asset('upload/'.getcong('home_slide_image2'))}}" alt="slide images"></div>
    <div class="item"><img style="opacity : 0.15" src="{{ URL::asset('upload/'.getcong('home_slide_image3'))}}" alt="slide images"></div>
  </div> -->
  <div style="height: 50%; background-color:blue">
  <div class="row" style="height:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:100%">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active" >
      <img src="https://images.unsplash.com/photo-1565984556409-b0d4946ce2d4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://images.unsplash.com/photo-1520013573795-38516d2661e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://images.unsplash.com/photo-1553091844-4204b59e3661?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=758&q=80" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- <img src="https://images.unsplash.com/photo-1566197923224-e2cc6f1f5671?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" style="width:100%; height:100%"> -->
  </div>
  </div>
  <div class="find-section">
    <div class="container"> 

      <div class="row">
        <h1 class="hero-heading">Find Best Dentists Near You<h1>
      </div>

      <div class="row">
        <div class=" col-md-10 col-md-offset-1 finder-block">
          <div class="finder-caption">
            <h1>{{getcong('home_slide_title')}}</h1>
            <p>{!!getcong('home_slide_text')!!}</p>
          </div>

          {{-- <h1>{{ $location->location_name }}</h1> --}}
          <div class="finderform" style="background : #229B97">
            {!! Form::open(array('url' => 'listings/search','class'=>'','id'=>'search','role'=>'form')) !!}
              <div class="col-md-4 col-sm-4 no-padding">
                <i class="fa fa-search local-search-ic"></i>
                <input type="text" class="form-control" name="search_keyword" id="input-search-term" title="Search for..." placeholder="Search anything here" value="" autocomplete="off">
              </div>

              <div class="form-group col-md-4 col-sm-4 no-padding">
                <input id="pac-input2" class="form-control" type="text" name="location" placeholder="Enter Location" style="width: 100%">

                {{-- hidden latlng Input field  --}}
                <input id="coordinates" type="text" hidden value="">

                <div id="map"></div>

                {{-- <a href="#" id="reverse">
                  <i class="fa fa-map-marker local-search-ic"  style="margin-left: 85%;"></i>
                </a> --}}
                    {{-- <div id="map"></div> --}}

                    <script>
                      // This example adds a search box to a map, using the Google Place Autocomplete
                      // feature. People can enter geographical searches. The search box will return a
                      // pick list containing a mix of places and predicted search terms.

                      // This example requires the Places library. Include the libraries=places
                      // parameter when you first load the API. For example:
                      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">


                      function initAutocomplete() {
                        var map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -33.8688, lng: 151.2195},
                          zoom: 13,
                          mapTypeId: 'roadmap'
                        });

                        // Create the search box and link it to the UI element.
                        var input = document.getElementById('pac-input2');
                        var searchBox = new google.maps.places.SearchBox(input);
                        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                        // Bias the SearchBox results towards current map's viewport.
                        map.addListener('bounds_changed', function() {
                          searchBox.setBounds(map.getBounds());
                        });

                        var markers = [];
                        // Listen for the event fired when the user selects a prediction and retrieve
                        // more details for that place.
                        searchBox.addListener('places_changed', function() {
                          var places = searchBox.getPlaces();

                          if (places.length == 0) {
                            return;
                          }

                          // Clear out the old markers.
                          markers.forEach(function(marker) {
                            marker.setMap(null);
                          });
                          markers = [];

                          // For each place, get the icon, name and location.
                          var bounds = new google.maps.LatLngBounds();
                          places.forEach(function(place) {
                            if (!place.geometry) {
                              console.log("Returned place contains no geometry");
                              return;
                            }
                            var icon = {
                              url: place.icon,
                              size: new google.maps.Size(71, 71),
                              origin: new google.maps.Point(0, 0),
                              anchor: new google.maps.Point(17, 34),
                              scaledSize: new google.maps.Size(25, 25)
                            };

                            // Create a marker for each place.
                            markers.push(new google.maps.Marker({
                              map: map,
                              icon: icon,
                              title: place.name,
                              position: place.geometry.location
                            }));

                            if (place.geometry.viewport) {
                              // Only geocodes have viewport.
                              bounds.union(place.geometry.viewport);
                            } else {
                              bounds.extend(place.geometry.location);
                            }
                          });
                          map.fitBounds(bounds);
                        });
                      }
                    </script>

                  {{-- <select id="location" name="location" class="form-control">
                    <option value="">Select Location</option>

                  @foreach(\App\Location::orderBy('location_name')->get() as $location)

                    @if($details->city == $location->location_name)
                        <option value="{{$location->id}}" selected="selected">{{$location->location_name}}</option>
                        <input type="hidden" name="location" value="{{ $location->id }}"> 

                        @else
                          <option value="{{$location->id}}">{{ $location->location_name }}</option>
                    @endif
                  
                  @endforeach
                  </select> --}}

              </div>

              <button type="submit" style="background : #ffffff; color : #3296f2; margin-bottom: 10px;" class="btn tp-btn-default tp-btn-lg">
                Search
                <i class="fa fa-search fa-1x" style="color: red;">
                </i>
              </button>


              <button type="button" style="background: white; color: #2980ee; margin-bottom:10px" id="submit" class="btn tp-btn-default" onclick="initMap()">
                (Dentists near me)
                <i class="fa fa-location-arrow fa-1x" style="color: red;">
                </i>
              </button>

        

          {{-- <button id="reverse" type="button" class="btn tp-btn-default tp-btn-lg" style="width: 50px; background: #ffffff;">
            <i class="fa fa-map-marker local-search-ic" style="color: red;"></i>
          </button> --}}

          {{-- <input id="submit" type="button" value="H"> --}}

          <input id="latlng2" type="text" value="" hidden>


          {{-- <a href="" class="button1 btnPush btnBlueGreen">Push</a> --}}


          {!! Form::close() !!} 

          </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12 finder-block">
          <div class="col-12 col-md-8 col-md-offset-2" style="margin-bottom: 50px;">
          <a href="{{ URL::to('dentalchecker') }}">
                  <button type="submit" class="btn tp-btn-default tp-btn-lg" style="margin-top : 5px;"> 
                    
                    <h3 style="color:white; padding-top: 5px;">
                      Check your symptoms
                    </h3>
                    
                  </button>
                </a>
                <a href="{{ URL::to('listings') }}">
                <button type="submit" class="btn tp-btn-default tp-btn-lg" style="margin-top : 5px;"> 
                  
                  <h3 style="color:white;   padding: 5px 26px 0px 26px;">
                      Dental Clinics
                  </h3>
                  
                </button>
              </a>
          </div>
              <!-- <div class="col-12 col-md-6"> 
                <a href="{{ URL::to('dentalchecker') }}">
                  <button type="submit" class="btn tp-btn-default tp-btn-lg" style="margin-top : 5px;"> 
                    
                    <h3 style="color:white; padding-top: 5px;">
                      Check your symptoms
                    </h3>
                    
                  </button>
                </a>
              </div>
              <div class="col-12 col-md-6 d-flex justify-content-center"> 
                <a href="{{ URL::to('listings') }}">
                <button type="submit" class="btn tp-btn-default tp-btn-lg" style="margin-top : 5px;"> 
                  
                  <h3 style="color:white;  padding-top : 5px;">
                      Dental Clinics
                  </h3>
                  
                </button>
              </a>
              </div> -->
            
          </div>
        </div>
      </div>

      <br>
      </div>
{{--       <div class="row">
        <div class="col-md-6" style="color: red;">
          <button type="submit" class="btn tp-btn-default tp-btn-lg"> 
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Diagnose Yourself
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
          </button>
        </div>

        <div class="col-md-pull-1  col-md-6 ">
          <button type="submit" class="btn tp-btn-default tp-btn-lg"> 
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Diagnose Yourself
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
          </button>
        </div>
      </div> --}}

    </div>
  </div>
</div>