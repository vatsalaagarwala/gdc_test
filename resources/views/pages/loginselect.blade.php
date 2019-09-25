@extends("app")

@section('head_title', 'Register as Patient| '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Register</h1>
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
          <li class="active">Register</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        {{-- <h1>Create an account</h1> --}}
      </div>
    </div>

    <div class="row">
    <div class="col-md-offset-2 col-md-3 well-box">

      <a href="/registerpatients">
        <img src="patient.jpg" class="responsive" height="200px" width="200px">
        <h2 style="text-align: center;"><br>Patient</h2>        
      </a>

    </div>

    <div class="col-md-offset-2 col-md-3 well-box">

      <a href="/register">
        <img src="doc.jpeg" class="responsive" height="200px" width="200px">
        <h2 style="text-align: center;"><br>Dentist</h2>
      </a>

    </div>
    </div>

  </div>
</div>
 

@endsection
