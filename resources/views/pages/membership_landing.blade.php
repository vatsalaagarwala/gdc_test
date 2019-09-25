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

    


      <div class="col-md-12 col-sm-12 content-right">
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