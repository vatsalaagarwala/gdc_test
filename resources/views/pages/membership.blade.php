@extends("app")

@section('head_title', 'Membership Plans | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")

<h1>ad</h1>>

 <div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Membership Plans</h1>
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
          <li class="active">Membership Plans</li>
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
        <div class="row">
          <div class="col-md-12" id="aboutus">
            <br>
            <h1>Membership Plans</h1>                          
        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
          <h2>Basic</h2>
          <div class="statusbox-content"> 
            @if($membership_plan == "Basic")
              <i class="fa fa-4x fa-check" style="color: green;"></i>
              @else
                <i class="fa fa-4x fa-ban" style="color: red;"></i>
            @endif
          </div>
          <a href="{{ URL::to('buybasic') }}"><h2>Revert Back</h2></a>         
        </div>
        </div>


        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
          <h2>Prime</h2>
          <div class="statusbox-content"> 
            @if($membership_plan == "Prime")
              <i class="fa fa-4x fa-check" style="color: green;"></i>
              @else
                <i class="fa fa-4x fa-ban" style="color: red;"></i>
            @endif
          </div>          
          <a href="{{ URL::to('buyprime') }}"><h2>BUY NOW</h2></a>
        </div>
        </div>


        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
        <h2>Elite</h2>
        <div class="statusbox-content"> 
          @if($membership_plan == "Elite")
              <i class="fa fa-4x fa-check" style="color: green;"></i>
              @else
                <i class="fa fa-4x fa-ban" style="color: red;"></i>
            @endif
          </div>  
          <a href="{{ URL::to('buyelite') }}"><h2>BUY NOW</h2></a>     
        </div>
        </div>

        <div class="col-md-3 col-sm-6">
        <div class="statusbox">
        <h2>Exclusive</h2>
        <div class="statusbox-content"> 
          @if($membership_plan == "Exclusive")
              <i class="fa fa-4x fa-check" style="color: green;"></i>
              @else
                <i class="fa fa-4x fa-ban" style="color: red;"></i>
            @endif
          </div>  
          <a href="{{ URL::to('buyexclusive') }}"><h2>BUY NOW</h2></a>     
        </div>
        </div>


                                             
          </div>
        </div>
      </div>


      <div class="col-md-9 col-sm-9 content-right">
        <div class="row">
          <div class="col-md-12" id="aboutus">
            <h1>Features</h1>
            <div class="col-md-3 col-sm-6">
            <div class="statusbox">
              <h2>Basic</h2>
              <div class="statusbox-content"> 
                <h4> <i class="fa fa-check" style="color: green;"></i> Max Keywords : <b>5</b></h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Free Web Profile</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Bulk Email & SMS Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Custom Site Design</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Customized SEO Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Customized SMM Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Exclusive Practice Management Courses</h4>
              </div>
              
            </div>
            </div>


            <div class="col-md-3 col-sm-6">
            <div class="statusbox">
              <h2>Prime</h2>
              <div class="statusbox-content"> 
                <h4> <i class="fa fa-check" style="color: green;"></i> Max Keywords : <b>25</b></h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Free Web Profile</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Bulk Email & SMS Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Custom Site Design</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Customized SEO Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Customized SMM Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Exclusive Practice Management Courses</h4>
              </div>          
              
            </div>
            </div>


            <div class="col-md-3 col-sm-6">
            <div class="statusbox">
            <h2>Elite</h2>
              <div class="statusbox-content"> 
                <h4> <i class="fa fa-check" style="color: green;"></i> Max Keywords : <b>UNLIMITED</b></h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Free Web Profile</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Bulk Email & SMS Services</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Custom Site Design</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Customized SEO Services</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Bulk SMS Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Customized SMM Services</h4>
                <br>
                <h4> <i class="fa fa-ban" style="color: red;"></i> Exclusive Practice Management Courses</h4>
              </div>  
              
            </div>
            </div>

            <div class="col-md-3 col-sm-6">
            <div class="statusbox">
            <h2>Exclusive</h2>
              <div class="statusbox-content"> 
                <h4> <i class="fa fa-check" style="color: green;"></i> Max Keywords : <b>UNLIMITED</b></h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Free Web Profile</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Bulk Email & SMS Services</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Custom Site Design</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Customized SEO Services</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Customized SMM Services for Facebook and Instagram</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Bulk SMS Services</h4>
                <br>
                <h4> <i class="fa fa-check" style="color: green;"></i> Exclusive Practice Management  Courses</h4>
              </div>  
              
            </div>
            </div>
                                
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
@endsection