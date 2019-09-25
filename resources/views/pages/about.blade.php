@extends("app")

@section('head_title', getcong('about_title').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")


 
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>{{getcong('about_title')}}</h1>
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
          <li class="active">{{getcong('about_title')}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 content-right">

              <div class="profile-sidebar well-box">
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                    
                      <h2 style="text-align:justify">
                          <strong style="font-size:2.8rem">gentledental.care</strong> is a revolutionary online listing platform that has been designed exclusively for dental professionals as well as their prospective patients.
                          For dentists, gentledental.care is the perfect place to augment their practice. Our user-friendly platform will help you reach out to potential patients in an easy and effective manner. 
                          As for patients, the platform will help you choose the right dentist based upon your location and need. Moreover, the Dental Checker will help you pin-point your condition and subsequently help you search for the specialist you require.
                      </h2>

                      <h2 style="text-align : left; margin-left:15px">
                        
                        Our Services
                        <br>
                        <br>
                        <ul style="text-align:left">
                        <li>Free Dentist Listing Platform</li>
                        <br>
                        Gentle dental care is an online listing platform for dentist & dental professional. It is the perfect place to augment their practice. Our user-friendly platform will help you reach out to prospective patients in an easy and effective manner. 
                        <hr>

                        <li>Find Dentist near You</li>
                        <br>
                        For patients, the platform will help you choose the right dentist based upon your location and need. Moreover, our free Dental Checker will help you pin-point your condition and subsequently help you search for the specialist you require.
                        <hr>

                        <li>Free Dental Checker</li>
                        <br>
                        Diagnose yourself with our free dental checker and find the best dental consultant near you.
                        <hr>

                        <li>Free Advise from Dentist</li>
                        <br>
                        Find the best dental consultant at your fingertips. Talk to dental experts.
                        <hr>
                        
                        <li>Online Forum</li>
                        <br>
                        An online community forum for dentists wherein they can share their opinions, observations, and more amongst their peers and colleagues. Which in turn benefits the medical community in gaining more knowledge and experience

                        </ul>
                      </h2>

                  </div>
                </div>
  
              </div>
              
            </div>


        <div class="row">
          <div class="col-md-12 aboutus" id="aboutus">

            {!!getcong('about_description')!!}

           
            
          </div>
           
        </div>
         
      </div>
    </div>
  </div>
</div>
 

@endsection
