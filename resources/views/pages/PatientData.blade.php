
@extends('app')

@section('head_title', 'Listings | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')

<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">

          @if(isset($inputs))



          @endif

          <form class="form-horizontal" method="GET" action="/patient_num">
           {{-- {!! Form::open(array('url' => 'action_call','class'=>'','id'=>'register','role'=>'form')) !!} --}}

           <div class="form-group">
                <label class="control-label" style="color:#ffffff;" for="password">Name<span class=""></span></label>
                <input id="patient_data" name="patient_data_name" type="text" value="" class="form-control input-md">
            </div>
           
            <div class="form-group">
                <label class="control-label" style="color:#ffffff;" for="password">Mobile Number/Email<span class=""></span></label>
                <input id="patient_data" name="patient_data" type="text" value="" class="form-control input-md">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <button id="submit" name="submit" class="btn tp-btn-primary tp-btn-lg">Submit</button>

            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {!! Form::close() !!}  --}}
         </form>
                

        </div>
      </div>
    </div>
  </div>
</div>


{{-- <div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Listings</li>
        </ol>
      </div>
    </div>
  </div>
</div> --}}
<div class="main-container">
  <div class="container">
    <div class="row">
      
    </div>
  </div>
</div>

<script type="text/javascript">
    
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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

 
@endsection