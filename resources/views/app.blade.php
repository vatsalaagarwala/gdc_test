 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    
    {{-- <title>@yield('head_title', getcong('site_name'))</title> --}}

    <title>Book Dentist Appoinments Online|Find Best Dentist Near You</title>
    <!-- <meta name="description" content="@yield('head_description', getcong('site_description'))" /> -->
    <meta name="description" content="Gentle dental care is a online platform to find & book appointments with dentist near you.  Diagnose yourself with our free dental checker and get the best dental consultant in your area. " />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('head_title',  getcong('site_name'))" />
    <meta property="og:description" content="@yield('head_description', getcong('site_description'))" />
    <meta property="og:image" content="@yield('head_image', url('/upload/main_logo.png'))" />
    <meta property="og:url" content="@yield('head_url', url('/'))" />

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
    <link href="{{ URL::asset('site_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/bootstrap-select.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800,300,200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,800,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" type="image/x-icon">


    {{-- CALENDAR --}}
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
      <link rel="stylesheet" href="{{ URL::asset('site_assets/css/sty.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('site_assets/css/s.css') }}">

      {{-- PLACES styling --}}
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        width: 225px;
      }

    </style>


   


    <!-- BOOTSTRAP4 -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- Geocoding --}}
    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    {{-- PIXEL --}}

    <!-- Facebook Pixel Code -->
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '272224653470023');
      fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->
    <script>
      fbq('track', 'ViewContent');
    </script>
    <script>
      fbq('track', 'Search');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=272224653470023&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->



    {{-- Google Analytics --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127031353-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127031353-2');
    </script>


  {{-- Google AdWords --}}
  <!-- Global site tag (gtag.js) - Google Ads: 750606627 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-750606627"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-750606627');
  </script>


  {{-- Structured Data  --}}
  <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
  <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "name" : "gentledental.care",
    "image" : "http://gentledental.care/site_assets/images/logo.png",
    "telephone" : "+91 78966 46246",
    "email" : "cgentledental@gmail.com"
  }
  </script>


</head>
<body style="background: white;">

    @include("_particles.header")
 
    {{-- <button id="myBtn">Open Modal</button> --}}
    
    @yield("content")

    @include("_particles.footer")

    <script>
      function test(){
        document.getElementById('testbtn').addEventListener('click', function(){
          console.log("TEST BTN called");
        })
      }
    </script>



    {{-- Place JS --}}

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASz_oXHACyGzpcQttBM9t4x3mi3WbTw00&libraries=places&callback=initAutocomplete" async defer></script> --}}


         <script>
                function initMap() {
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: {lat: 40.731, lng: -73.997}
                  });
                  var geocoder = new google.maps.Geocoder;
                  var infowindow = new google.maps.InfoWindow;

                  document.getElementById('submit').addEventListener('click', function() {
                    geocodeLatLng(geocoder, map, infowindow);
                    console.log("HEYYYEYEYEYEY !");
                  });

                }


                // Reverse Geocoder
                function geocodeLatLng(geocoder, map, infowindow) {
                  console.log("LATLONG  : " + latlng);
                  var input = document.getElementById('coordinates').value;
                  var latlngStr = input.split(',', 2);
                  var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                  geocoder.geocode({'location': latlng}, function(results, status) {
                    if (status === 'OK') {
                      if (results[0]) {
                        map.setZoom(11);
                        var marker = new google.maps.Marker({
                          position: latlng,
                          map: map
                        });
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);

                        console.log("REVERSE : " + results[0].formatted_address);

                        // document.getElementById("pac-input").value = results[0].formatted_address;
                        document.getElementById("pac-input2").value = results[0].formatted_address;

                      } else {
                        window.alert('No results found');
                      }
                    } else {
                      window.alert('Geocoder failed due to: ' + status);
                    }
                  });
                }
              </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTHt-UWa1RMb_c89PazhITltW3KHElBuo&callback=initMap">
              </script>



    {{-- Fetch Coords Code --}}
    <script type="text/javascript">
      if (navigator.geolocation) {

        console.log("TEST location trigger");

        navigator.geolocation.getCurrentPosition(function(position){

          console.log(position);
          console.log('Hey, fetched coordinates are :: ' + position.coords.latitude + "," + position.coords.longitude);

          document.getElementById("coordinates").value = position.coords.latitude + "," + position.coords.longitude;

        });

      } else {
        
      }
    </script>

  {{-- Fetch Coords Code End--}}
  <script>
          console.log("location picker called !");
            $('#us3').locationpicker({
                location: {
                    latitude: 46.15242437752303,
                    longitude: 2.7470703125
                },
                radius: 300,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        </script>


    {{-- Reverse Geocode Script --}}

    {{-- <script type="text/javascript">
     // Calling geocode
    geocode();

    // Geocode function   
    function geocode (String coords) {
      // var location = 'Uzanbazar Guwahati Assam';
      var latlng = '26.1939799 91.7588988';

      axios.get('https://maps.googleapis.com/maps/api/geocode/json', {
        params: {
          // address: location,
          latlng: latlng,
          key: 'AIzaSyBUK_shfvuzMieSsyQ6fiFBanyx3CSryRA'
          // key: 'AIzaSyDbJoZaKsnKNDiNnnHic1tkEx3jmckwZKc'
        }
      })
      .then(function(response){
        console.log(response);
        console.log(coords);
      })
      .catch(function(error){
        console.log(error);
      });
    }

  </script> --}}

  <!-- Bootstap scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  {{-- Geocode End --}}

  <script type="text/javascript">
  
    function openMessageBox(){
        $.ajax({
        url: 'loctest',
        type: 'GET',
        data: { 
          
          val : 1 
        },
        success: function()
        {
            // alert("Settings has been updated successfully.");
            console.log("AJAX !!");
        }
    });
   }

</script>

 
 @if(!classActivePathSite('submit_listing'))<!-- Page Plugins -->

<script type="text/javascript">
    
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("delete_btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
</script>


<script>
      
      function truncateText(selector, maxLength) {
      // var element = document.querySelector(selector)
      // element.forEach((el)=>{
      //     truncated = element.innerText;
      //   console.log(truncated)
      // })
      var truncated = selector
  
      if (truncated.length > maxLength) {
          truncated = truncated.substr(0,maxLength) + '...';
      }
      return truncated;
      }
  
      // document.querySelector('.word-limit').innerText = truncateText('.word-limit', 20);

      var para = document.querySelectorAll('.word-limit')
      console.log(para)
      para.forEach(function(element) {
        var value = element.innerText
        var a = element.innerText = truncateText(value, 16);
        console.log(a)
      });

</script>

<script id="dsq-count-scr" src="//gentledental.disqus.com/count.js" async></script>
 
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
@endif

<script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/nav.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/bootstrap-select.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/owl.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/thumbnail-slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/slider.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/testimonial.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/jquery.sticky.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/header-sticky.js') }}"></script>



@if(!classActivePathSite('submit_listing'))<!-- Page Plugins -->
<script src="{{ URL::asset('site_assets/js/fileinput.min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/superlist.js') }}"></script>
@endif

<!--<script src="{{ URL::asset('site_assets/js/fileinput.min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/jquery.colorbox-min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/superlist.js') }}"></script>-->
</body>
</html>