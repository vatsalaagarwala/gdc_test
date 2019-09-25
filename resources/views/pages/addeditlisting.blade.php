@extends("app")

@section('head_title', isset($listing->id) ? 'Edit Listing ' : 'Submit Listing'.' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
 
       <script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script> 
       
       <link rel="stylesheet" href="{{ URL::asset('site_assets/summernote/summernote.css') }}">
        
       <script src="{{ URL::asset('site_assets/summernote/summernote.js') }}"></script>

        <script>
        $(document).ready(function() {
            $('#summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                  // set focus to editable area after initializing summernote
          });
        });
      </script>  

 <script type="text/javascript">
        $(document).ready(function(e) {
            
           $("#category").change(function(){
               var cat=$("#category").val();
            $.ajax({
            type: "GET",
             url: "{{ URL::to('ajax_subcategories') }}/"+cat,
             //data: "cat=" + cat,
             success: function(result){

                 $("#sub_category").html(result);
              }
            });
            
               });
        });
</script> 

<script type="text/javascript">
var abc = 0;
//function increment() {
    
//};
$(document).ready(function() {
    $('#add_more').click(function() {//When Add More Files button Clicked these function Willbe Called (new file field is added dynamically)
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'gallery_file[]', type: 'file', id: 'file'}),        
                $("")
                ));
    });

$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                //increment();
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: '{{ URL::asset('site_assets/images/x.png') }}', alt: 'delete'}).click(function() {
                //$(this).parent().parent().remove();
                $(this).parent().remove();
                }));
            }
        });
        
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});
</script> 

<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/tags/jquery.tagsinput.css') }}" />
 
<script type="text/javascript" src="{{ URL::asset('site_assets/tags/jquery.tagsinput.js') }}"></script>
<script type="text/javascript">

    function onAddTag(tag) {
      alert("Added a amenities: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a amenities: " + tag);
    }

    function onChangeTag(input,tag) {
      alert("Changed a amenities: " + tag);
    }

    $(function() {

      $('#tags_1').tagsInput({width:'auto'});
      $('#tags_2').tagsInput({width:'auto'});
      
// Uncomment this line to see the callback functions in action
//      $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

// Uncomment this line to see an input with no interface for adding new tags.
//      $('input.tags').tagsInput({interactive:false});
    });

  </script>

 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>{{ isset($listing->id) ? 'Edit Listing ' : 'Submit Listing' }}</h1>
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
          <li class="active">{{ isset($listing->id) ? 'Edit Listing ' : 'Submit Listing' }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      
      @include("_particles.user_sidebar")

     <div class="col-md-9 col-sm-9 content-right">

      {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.3330756581645!2d91.77808291468583!3d26.15327989866522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a591726b76f19%3A0x1c48b6f7b4f8a4b0!2sDr.+Hazarika&#39;s+Gentle+Dental+Care%2C+Guwahati+-+Best+Dentist+in+Guwahati!5e0!3m2!1sen!2sin!4v1549377723723" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> --}}


      <div class="form-horizontal" style="width: 550px">
        {{-- <div class="form-group">
            <label class="col-sm-2 control-label">Location:</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="us3-address" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Radius:</label>

            <div class="col-sm-5">
                <input type="text" class="form-control" id="us3-radius" />
            </div>
        </div> --}}

        

        {{-- Places  --}}
       

        {{-- <div id="us3" style="width: 550px; height: 400px;"></div>

        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" style="width: 110px" id="us3-lat" />
            </div>
            <label class="p-r-small col-sm-2 control-label">Long.:</label>

            <div class="col-sm-3">
                <input type="text" class="form-control" style="width: 110px" id="us3-lon" />
            </div>
        </div>
        <div class="clearfix"></div>
        <script>
            $('#us3').locationpicker({
                location: {
                    latitude: 46.15242437752303,
                    longitude: 2.7470703125
                },
                radius: 300,
                inputBinding: {
                    latitudeInput: $('#us-lat'),
                    longitudeInput: $('#us-lon'),
                    radiusInput: $('#us-radius'),
                    locationNameInput: $('#us-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        </script> --}}
      </div>
        

        
        {!! Form::open(array('url' => array('submit_listing'),'class'=>'','name'=>'listing_form','id'=>'listing_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
        <input type="hidden" name="id" value="{{ isset($listing->id) ? $listing->id : null }}">
        <div class="row">
          <div class="col-md-12" id="aboutus">
            <h1>{{ isset($listing->id) ? 'Edit Listing ' : 'Submit Listing' }}</h1>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul style="list-style: none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
           @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
                        {{ Session::get('flash_message') }}
                    </div>
          @endif

            <div class="well-box">

              {{-- <h3 class="page-title">Location / Area</h3>
              <div class="form-group col-md-12">

              <input id="pac-input" class="controls" type="text" name="address" placeholder="Search Box" value="{{ isset($listing->address) ? $listing->address : null }}">
                <div id="map"></div>
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
                    var input = document.getElementById('pac-input');
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
                <br><br>

              </div> --}}


              {{-- <div id="floating-panel">
                <input id="latlng2" type="text" value="">
                <input id="submit" type="button" value="Reverse Geocode">
              </div>
              <div id="map"></div> --}}

                  
                <div class="form-group col-md-12">
                  <label for="first" class="control-label">Clinic Name :-</label>
                  <input type="text" style="background-color:white; color:black" class="form-control input-md" placeholder="Enter Clinic Name" name="title" id="title" value="{{ isset($listing->title) ? $listing->title : null }}" required>
                </div>
                <div class="form-group col-sm-12">
                  <textarea rows="7" placeholder="description" name="description" id="summernote" class="js-summernote form-control" required>{{ isset($listing->description) ? $listing->description : null }}</textarea>
                   
                </div>
                <div class="clearfix"></div>
              
            </div>
            <div class="well-box">
              <h3 class="page-title">Attributes</h3>
              
                <div class="form-group col-md-6">
                  <label for="Category" class="control-label">Specialization:- <span class="required">*</span></label>
                  <div class="">

                    <select class="form-control" id="category" name="category" required>
                      <option value="" >Select Category</option>
                         @foreach($categories as $i => $category) 
                            @if(isset($listing->cat_id) && $listing->cat_id==$category->id)  
                              <option value="{{$category->id}}" selected >{{$category->category_name}}</option>
                               
                            @else
                            <option value="{{$category->id}}">{{$category->category_name}}</option> 
                            @endif                        
                          @endforeach
                    </select>
                  </div>
                </div>
                {{-- <div class="form-group col-md-6">
                  <label for="Category" class="control-label">Additional Specialization :-</label>
                  <div class="">
                    {{-- <select id="sub_category" name="sub_category" class="form-control">
                            <option value="">Select Sub Category</option>
                            @if(isset($listing->sub_cat_id))
                            @foreach($subcategories as $i => $subcategory)   
                                @if($listing->sub_cat_id==$subcategory->id)  
                                    <option value="{{$subcategory->id}}" selected >{{$subcategory->sub_category_name}}</option>
                                     
                                @else
                                 <option value="{{$subcategory->id}}" >{{$subcategory->sub_category_name}}</option>
                                @endif                          
                            @endforeach
                            @endif
                        </select> --}}
                        {{-- <select class="form-control" id="category" name="sub_category" required>
                      <option value="" >Select Category</option>
                         @foreach($categories as $i => $category) 
                            @if(isset($listing->cat_id) && $listing->cat_id==$category->id)  
                              <option value="{{$category->id}}" selected >{{$category->category_name}}</option>
                               
                            @else
                            <option value="{{$category->id}}">{{$category->category_name}}</option> 
                            @endif                        
                          @endforeach
                    </select>
                  </div>
                </div> --}} 


                <div class="form-group col-md-6">
                  <label for="Category" class="control-label">Location :-</label>
                  <div class="">
                    <select class="form-control" name="location" id="location">
                      <option value="" >Select Location</option>
                         @foreach($locations as $i => $location) 
                            @if(isset($listing->location__id) && $listing->location__id==$location->id)  
                              <option value="{{$location->id}}" selected >{{$location->location_name}}</option>
                               
                            @else
                            <option value="{{$location->id}}">{{$location->location_name}}</option> 
                            @endif                        
                          @endforeach
                    </select>
                  </div>
                </div>                 
                <div class="form-group col-md-12">
                  <label for="first" class="control-label">Address :-</label>
                  <textarea rows="7" placeholder="Address" name="address"  class="form-control">{{ isset($listing->address) ? $listing->address : null }}</textarea>
                  <div class="textarea-resize"></div>

                </div>


                <div class="form-group col-md-6">
                  <label for="first" class="control-label">Featured Image :-</label>
                    <input type="file" name="featured_image" id="input-file" class="form-control input-md">

                </div>
                <div class="form-group col-md-6">
                    @if(isset($listing->featured_image))
                                 
                  <img src="{{ URL::asset('upload/listings/'.$listing->featured_image.'-s.jpg') }}" width="80" alt="featured">
                @endif

                </div>
                 
                <div class="clearfix"></div>
              
            </div>
            <div class="well-box well-box-file">
              <h3 class="page-title">Amenities</h3>
              <div class="detail-content">
                 <input id="tags_1" type="text" name="amenities" class="form-control" value="{{ isset($listing->amenities) ? $listing->amenities : 'Parking,WiFi,Terrace' }}" />
                
              </div>
            </div>


            <div class="well-box well-box-file">
                 <h3 class="page-title">Keywords</h3>
                 <div class="detail-content">
                   <label class="checkbox-inline">
                    
                     <br>
                  <input type="checkbox" name="keywords_array[]" value="Acute Tonsilitis"> Acute Tonsilitis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Redness"> Redness

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Pain"> Pain

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Ulcer"> Ulcer

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Sensitivity"> Sensitivity

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Chronic Tonsilitis"> Chronic Tonsilitis
              
                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Acute Inflammation of Tongue">Acute Inflammation of Tongue
                  
                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Chronic Inflammation of Tongue">Chronic Inflammation of Tongue
  
                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Malignancy">Malignancy
  
                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Reversible Pulpitis">Reversible Pulpitis
                  

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Irreversible Pulpitis">Irreversible Pulpitis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Pulp Necrosis">Pulp Necrosis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Aprical Periodontis">Aprical Periodontis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Periapical/Periodontal Abscess">Periapical/Periodontal Abscess 

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Cracked Tooth Syndrome">Cracked Tooth Syndrome

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Periodontis">Periodontis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Cavity">Cavity

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Malocclusion">Malocclusion

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Halitosis">Halitosis

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Loose Teeth">Loose Teeth

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Food Lodgement">Food Lodgement

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Croweded Teeth">Croweded Teeth

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Plaque Diposits">Plaque Diposits

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Oral Hygiene">Oral Hygiene

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Difficulty in Chewing">Difficulty in Chewing

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Yellow Teeth">Yellow Teeth

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Tartar Deposits">Tartar Deposits

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Stains on Teeth">Stains on Teeth

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Decay">Decay

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Missing Tooth">Missing Tooth

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Trauma">Trauma

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Infection">Infection

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Cyst">Cyst

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Tumour">Tumour

                    <br>
                  <input type="checkbox" name="keywords_array[]" value="Palate">Palate

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Lips">Lips

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Swelling Gums">Swelling Gums

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Deficiancy">Deficiancy

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Burning sensation">Burning sensation

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Non-inflammatory Gingival Enlargement">Non-inflammatory Gingival Enlargement

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Acute Gingivitis">Acute Gingivitis

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Chronic Gingivitis">Chronic Gingivitis

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Acute periodontitis">Acute periodontitis

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Chronic Periodontitis">Chronic Periodontitis

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Pus discharge">Pus discharge

                   <br>
                  <input type="checkbox" name="keywords_array[]" value="Periodontal Abscess">Periodontal Abscess

                  <br>
                  <input type="checkbox" name="keywords_array[]" value="Periapical abscess">Periapical abscess


                   </label>
                 </div>
               </div>

            <div class="well-box well-box-file">
              <h3 class="page-title">Services</h3>
              <div class="detail-content">

            

                <label class="checkbox-inline">

                  <input type="checkbox" min="3500" name="checklist[]" value="Treatment of Tetracycline Stains"> Treatment of Tetracycline  (per tooth),<br>

                  <input type="checkbox" min="3500" name="checklist[]" value="Toothache "> Toothache Treatment ,<br>

                  <input type="checkbox" min="3500" name="checklist[]" value="">Artificial Teeth Treatment Artificial Teeth Treatment ,<br>


                  <input type="checkbox" min="3500" name="checklist[]" value="Braces Treatment for Adults and Teens"> Braces Treatment  Adults and Teens ,<br>

                  <input type="checkbox" min="3500" name="checklist[]" value="Ceramic Braces Treatment"> Ceramic Braces 
                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Check-Ups"> Dental Check- 
                  
                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Scaling & Polishing"> Teeth Scaling & Polishing 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Tooth Extractions">  Checkup

                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Tooth Extractions"> Tooth Extractions

                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Fillings"> Dental Fillings



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Implants"> Dental Implants



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Check-Ups"> Dental Check-Ups



                   ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Extractions Procedure"> Dental Extractions Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Fillings Procedure"> Fillings Procedure (per tooth) 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Orthosis Fitting Procedure"> Orthosis Fitting Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Fixed Partial Denture Procedure"> Fixed Partial Denture Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Flexible Partial Dentures Procedure"> Flexible Partial Dentures Procedure




                  ,<br>
                  {{--  --}}
                  <input type="checkbox" min="3500" name="checklist[]" value="Acrylic Dentures Procedure"> Acrylic Dentures Procedure 
                  (per arch)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Gap Closing (Dental) Treatment"> Gap Closing (Dental) Treatment (per Gap)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Geriatric Dentistry"> Geriatric Dentistry 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Gingivoplasty Procedure"> Gingivoplasty Procedure (per Segment)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Gum Hygiene Procedure"> Gum Hygiene Procedures 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Gum Disease Treatment/ Surgery"> Gum Disease Treatment/ Surgery (per segment)



                   ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Implant Tooth Fixing Procedure"> Implant Tooth Fixing Procedure (per implant)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Invisible Braces Treatment"> Invisible Braces Treatment



                   ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Jewel Teeth Procedure"> Jewel Teeth Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Metal Braces Procedure"> Metal Braces Procedure 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Minimally Invasive Dentistry"> Minimally Invasive Dentistry

                  5000

                  <input type="checkbox" min="3500" name="checklist[]" value="Jewel Teeth Procedure"> Jewel Teeth Procedure (per tooth)

                  ,<br>
                  {{--  --}}
                  <input type="checkbox" min="3500" name="checklist[]" value="Root Canal Treatment"> Root Canal Treatment (per tooth)




                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Scaling & Polishing Procedure"> Teeth Scaling & Polishing Procedure 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Scaling And Root Planing Procedure"> Scaling And Root Planing Procedure 



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Smile Architect Procedure"> Smile Architect Procedure (per tooth)

                  


                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Smile Design Procedures"> Smile Design Procedures (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Smile Makeover Procedures"> Smile Makeover Procedures (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Space Maintainers Procedure"> Space Maintainers Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Special Care Dentistry"> Special Care Dentistry



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Straightening Teeth (Invisalign) Procedure"> Straightening Teeth (Invisalign) Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Cleaning Procedure"> Teeth Cleaning Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Reshaping Procedure"> Teeth Reshaping Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Straightening Procedure"> Teeth Straightening Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Teeth Whitening Procedure"> Teeth Whitening Procedure

                  


                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Veneers Procedure"> Veneers Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Tooth Coloured Fillings Procedure"> Tooth Coloured Fillings Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Tooth Extraction Procedure"> Tooth Extraction Procedure (per tooth)




                  ,<br>
                  {{--  --}}
                  <input type="checkbox" min="3500" name="checklist[]" value="Wisdom Tooth Removal Procedure"> Wisdom Tooth Removal Procedure  



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Zirconia Crowns Procedure"> Zirconia Crowns Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Aesthetic Dentistry Treatment"> Aesthetic Dentistry Treatment (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Implant Surgeries"> Implant Surgeries (per implant)

                  35000

                  <input type="checkbox" min="3500" name="checklist[]" value="Oral Lesions Screening"> Oral Lesions Screening



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Management of Oral Prophylaxis"> Management of Oral Prophylaxis



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Oral Rehabilitation"> Oral Rehabilitation



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Acrylic Partial Denture Procedure"> Acrylic Partial Denture Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Aesthetic Crown And Bridges Procedure"> Aesthetic Crown And Bridges Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Apicoectomy Procedure"> Apicoectomy Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Bps Dentures Procedure"> Bps Dentures Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Cast Partial Denture Procedure"> Cast Partial Denture Procedure (per arch)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Ceramic Crowns Procedure"> Ceramic Crowns Procedure (per unit)

                  ,<br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>

                  <input type="checkbox" min="3500" name="spacing_buffer" hidden value="spacing_buffer"><br>
                </label>
                <label class="checkbox-inline" >
                  <input type="checkbox" min="3500" name="checklist[]" value="Ceramic Crowns And Bridges Procedure"> Ceramic Crowns And Bridges Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Ceramic Veneers Procedure"> Ceramic Veneers Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Clear Aligners Procedure"> Clear Aligners Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Composite Bondings Procedure"> Composite Bondings Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Conservative Dentistry Treatment"> Conservative Dentistry Treatment (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Cosmetic Dentistry"> Cosmetic Dentistry (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Cosmetic Filling Procedure"> Cosmetic Filling Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Cosmetic Veneers Procedure"> Cosmetic Veneers Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Cosmetic Bonding Procedure"> Cosmetic Bonding Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Crowns Teeth Treatment"> Crowns Teeth Treatment (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Crowns And Bridges Procedure"> Crowns And Bridges Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Crowns Procedure"> Dental Crowns Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Implantology Procedure"> Dental Implantology Procedure (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Laminates Procedure"> Dental Laminates Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dental Surgery"> Dental Surgery



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dentofacial Orthopedics"> Dentofacial Orthopedics



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Dentures Procedure"> Dentures Procedure (per arch)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Disimpaction Procedure"> Disimpaction Procedure (per tooth)




                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Endo Surgery Or Apicoectomy"> Endo Surgery Or Apicoectomy (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Endodontics Treatment"> Endodontics Treatment (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Immediate Dentures Procedure"> Immediate Dentures Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Implant Retained Dentures Procedure"> Implant Retained Dentures Procedure (per arch)

                  


                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Implantology Procedure"> Implantology Procedure
                  (per implant)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Inlays Procedure"> Inlays Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Laser Dentistry Treatment"> Laser Dentistry Treatment
                  (per arch)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Lingual Orthodontics Treatment"> Lingual Orthodontics Treatment



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Maxillo Facial Prosthodontics Treatment"> Maxillo Facial Prosthodontics Treatment



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Mouth Guard Fitting Procedure"> Mouth Guard Fitting Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Mulligan Manipulation Procedure"> Mulligan Manipulation Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Myofunctional Orthodontics Procedure"> Myofunctional Orthodontics Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Onlays Treatment"> Onlays Treatment (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Oral Surgery">Oral Surgery



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Oral Surgery Procedures"> Oral Surgery Procedures



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Orthodontic Alignment Procedure"> Orthodontic Alignment Procedure 

                  


                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Orthodontics Treatment"> Orthodontics Treatment



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Orthognathic Surgery">Orthognathic Surgery



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Partial Dentures Treatment"> Partial Dentures Treatment (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Pediatric Dentistry"> Pediatric Dentistry



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Pedodontics (Children Dentistry)">Pedodontics (Children Dentistry)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Periodontal Flap Surgery"> Periodontal Flap Surgery (per segment)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Periodontal Plastic Surgery"> Periodontal Plastic Surgery (per segment)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Periodontics"> Periodontics
                  (per segment)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Pit And Fissure Sealant Procedure">Pit And Fissure Sealant Procedure (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Porcelain Veneers Procedure"> Porcelain Veneers Procedure
                  (per unit)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Post And Core Dental Procedure"> Post And Core Dental Procedure (per tooth)

                  


                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Preadjusted Edgewise Technique"> Preadjusted Edgewise Technique



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Presurgical Orthodontics Procedure">Presurgical Orthodontics Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Preventive Dentistry Procedure"> Preventive Dentistry Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Prosthetics Treatment"> Prosthetics Treatment

                  

                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Prosthodontics Treatment">  Treatment,

                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Pulpectomy Procedure"> Pulpectomy Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Removable Partial Denture Procedure">Removable Partial Denture Procedure



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Restorative Dentistry Procedures"> Restorative Dentistry Procedures (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Rotary Rct Procedure"> Rotary Rct Procedure

                  

                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Sealant Treatment"> Sealant Treatment (per tooth)



                  ,<br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Tooth Veneers Procedure">Tooth Veneers Procedure (per tooth)

                  

                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Advanced Surgery In Implantology Procedures">Advanced Surgery In Implantology Procedures

                  

                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Allergy Testing"> Allergy Testing

                  

                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Re RCT"> Re RCT

                  

                  ,
                  <br>
                  <input type="checkbox" min="3500" name="checklist[]" value="Re Treatment of RCT Treated Tooth"> Re Treatment of RCT Treated Tooth

                   <br>
                  <input type="checkbox" name="checklist[]" value="Medication">Medication

                   <br>
                  <input type="checkbox" name="checklist[]" value="Enameloplasty">Enameloplasty

                   <br>
                  <input type="checkbox" name="checklist[]" value="Incision and Drainage">Incision and Drainage

                  {{-- ###### --}}

                



                </label>



                <br><br>
                  {{-- @if (isset($listing->keywords)) {
                    <input readonly="readonly" id="tags_2" type="text" name="keywords" class="form-control" value="{{ $listing->keywords }}" />
                  }
                  @endif --}}


                {{-- <input readonly="readonly" id="tags_2" type="text" name="keywords" class="form-control" value="{{ $listing->keywords }}" /> --}}

                <br>
                <h2 style="text-align:center">Submit to set the prices of your services.</h2>

                {{-- <h1>{{ $services[1] }}</h1> --}}



              </div>
            </div>

            <div class="well-box well-box-file">
              <h3 class="page-title">Consultation Fee<span class="required">*</span></h3>
                <div class="detail-content">
                <input type="number" class="form-control input-md" required placeholder="MIN Fee : 300" name="consultation_fee" id="latitude" value="{{ isset($listing->consultation_fee) ? $listing->consultation_fee : null }}" min="300">
                  <br>

                </div>
              </div>
            </div>


            <div class="well-box well-box-file">
              <h3 class="page-title">Prices</h3>
              <div class="detail-content">


                @php

                  if (isset($listing->keywords)) {

                    $buffer = $listing->keywords;
                    $services = explode(',', $buffer);

                    // print_r($services);

                    foreach ($services as $key) {
                      // print_r($key);
                    }
                  }

                @endphp

              {{-- <h1>{{ $services }}</h1> --}}

              {{-- @php
                print_r($services);
              @endphp --}}

                <br>

                @if(isset($services))
                @foreach($services as $selected_service)
                  @php
                    $price_counter = 0;
                  @endphp
                  @foreach($service_range as $service)

                    {{-- <p>Selected : {{ $selected_service }}</p> --}}
                    {{-- <p>Range : {{ $service }}</p> --}}

                    @if(trim($selected_service) == trim($service))
                      
                      <label for="first" class="control-label">{{ $selected_service }}</label>
                      <input type="number" class="form-control input-md" placeholder="Approx. Cost" name="price[]" id="latitude" min="{{ $price_range[$price_counter] }}" value="">

                    @endif
                    @php
                      $price_counter += 1;
                    @endphp

                  @endforeach
                @endforeach
                @endif




              </div>
            </div>

          </div>


          <div class="well-box">
              <h3 class="page-title">Working Hours</h3>   
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Monday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_mon" id="Monday" value="{{ isset($listing->working_hours_mon) ? $listing->working_hours_mon : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Tuesday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_tue" id="Tuesday" value="{{ isset($listing->working_hours_tue) ? $listing->working_hours_tue : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Wednesday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_wed" id="Wednesday" value="{{ isset($listing->working_hours_wed) ? $listing->working_hours_wed : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Thursday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_thurs" id="Thursday" value="{{ isset($listing->working_hours_thurs) ? $listing->working_hours_thurs : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Friday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_fri" id="Friday" value="{{ isset($listing->working_hours_fri) ? $listing->working_hours_fri : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Saturday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_sat" id="Saturday" value="{{ isset($listing->working_hours_sat) ? $listing->working_hours_sat : null }}">
                </div>
                <div class="form-group col-md-4">
                  <label for="first" class="control-label">Sunday :-</label>
                  <input type="text" class="form-control input-md" name="working_hours_sun" id="Sunday" value="{{ isset($listing->working_hours_sun) ? $listing->working_hours_sun : null }}">
                </div>        
                <div class="clearfix"></div>              
            </div>
            <div class="well-box">
              <h3 class="page-title">Video</h3>

                <div class="form-group col-md-12">                   
                  <textarea rows="7" placeholder="Video Embed Code" name="video"  class="form-control">{{ isset($listing->video) ? $listing->video : null }}</textarea>
                  <div class="textarea-resize"></div>

                </div>

              <div class="clearfix"></div>              
            </div>
            <div class="well-box file-browes">
              <h3 class="page-title">Gallery</h3>
               <div class="col-md-12"> 
                      <link rel="stylesheet" href="{{ URL::asset('site_assets/css/gallery_style.css') }}">

                       <div class="media">
                            <div class="med_list media-left">
                                @if(isset($listing->id))
                                    @foreach($listing_gallery_images as $i => $gallery_img)

                                        <div id="abcd_1" class="abcd">
                                         <img src="{{ URL::asset('upload/gallery/'.$gallery_img->image_name) }}" width="100" alt="image">
                                         <a href="{{ url('listing/galleryimage_delete/'.$gallery_img->id) }}"><img id="img" src="{{ URL::asset('site_assets/images/x.png') }}" alt="delete"></a>
                                        </div>
                                    @endforeach
                                @endif   

                                                             
                            </div>
                             
                        </div>
                         <div id="formdiv"> 
                             <div id="filediv"></div>
                             <div style="margin-top:5px;">
                            <input name="gallery_file[]" type="file" id="file"/>
                            <input type="button" id="add_more" class="upload" value="Add More Images"/>
                            </div>
                
                        </div> 

               </div> 
              <div class="clearfix"></div>
               
            </div>
            
            <div class="center mb20">
              <button class="btn btn-primary btn-xl" type="submit">Submit Listing</button>
            </div>
            {!! Form::close() !!} 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection