@extends("app")

@section('head_title', getcong('about_title').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")


 
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>FAQs</h1>
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
                  <div class="profile-usertitle-name" style="text-align:left">
                    
                    <p class="p1"><span style="font-size: 20pt;"><strong><span class="s1">Patient FAQ:</span></strong>
                    </span>
                    </p>
                    <br>
                <p><strong><span class="s1">1.How do I book an appointment with my dentist?</span></strong></p>
                <p class="p2"><span class="s1">You can look up your nearsest dentist listed on gentledental.care and book an appointment with him/her either by phone call or by using our appointment generator on the dentist&rsquo;s web profile.</span></p>
                <p class="p2"><strong><span class="s1">2.How do I find dentists in and around my location?</span></strong></p>
                <p class="p2"><span class="s1">All you have to do is type the kind of problem you are facing, and click on the tab &ldquo;Search Dentist Near Me&rdquo;. A list will appear which will show you the dentists near your location.</span></p>
                <p><strong><span class="s1">3.Should I visit the dentist regularly?</span></strong></p>
                <p class="p2"><span class="s1">Yes, it is recommended to visit your dentist every six months. If you are in pain or any other emergency, you must visit your dentist as soon as possible.</span></p>
                <p class="p2"><strong><span class="s1">4.How can I diagnose my oral health and symptoms?</span></strong></p>
                <p class="p2"><span class="s1">Diagnosis is the job of your dentist, but it is always better to know about your probable ailment before you visit your dentist. We have an in-built Dental-Checker software, where you can check your symptoms and find the best dentist near you to treat them.</span></p>
                <p><strong><span class="s1">5.Are all of the dental clinics around my location listed here?</span></strong></p>
                <p class="p2"><span class="s1">Probably. gentledental.care is a one-of-a-kind location and price-based website for dentists and patients to find each other.</span></p>
                <p><strong><span class="s1">6.Is signing up free of cost?</span></strong></p>
                <p class="p2"><span class="s1">Signing up on gentledental.care is absolutely free for everybody.</span></p>
                <p><strong><span class="s1">7.Can I book an appointment according to my preference/convenience?</span></strong></p>
                <p class="p2"><span class="s1">Yes, you can. However, it is advisable to talk to your dentist prior to booking an appointment to check for availability. </span></p>
                <p class="p3">&nbsp;</p>

                <br>
                <p class="p4"><span style="font-size: 20pt;"><strong><span class="s1">Doctor FAQ:</span></strong>
                    </span>
                </p>
                <br>
                <p><strong><span class="s1">1.How do I list my clinic on gentledental.care?</span></strong></p>
                <p class="p2"><span class="s1">You can list for free or take up a membership plan according to your preference. The procedure is fairly simple and self-explanatory.<a href="gentaldental.care/register"> Click here</a> to list yourself now.</span></p>
                <p><strong><span class="s1">2.Why should I list my clinic on gentledental.care?</span></strong></p>
                <p class="p2"><span class="s1">gentledental.care is a one-of-a-kind location and price-based website for dentists and patients to find each other. The patients that will come to you via gentledental.care are already motivated about their treatment options and most probably, they will be from the area of your dental clinic is located. Such patients are easy to treat and remain loyal to your treatment.</span></p>
                <p><strong><span class="s1">3.How can I stay connected with my patients?</span></strong></p>
                <p class="p2"><span class="s1">We have a forum on gentledental.care where dentists can answer queries and earn points. Additionally, dentists are encouraged to write articles which are published in our blog and circulated in our newsletter to all the users.</span></p>
                <p><strong><span class="s1">4.Can I share my thoughts and experiences amongst my colleagues?</span></strong></p>
                <p class="p2"><span class="s1">Yes, you can. Dentists are also encouraged to write articles about dentistry and dental practice management which are published on our blog. Additionally, all dental professionals are encouraged to engage with one another on our forum and facebook group &ldquo;THE FUTURE OF DENTISTRY IN INDIA&rdquo;.</span></p>
                <p><strong><span class="s1">5.Do I need to pay any fees for listing my clinic on gentledental.care?</span></strong></p>
                <p class="p2"><span class="s1">There are free and paid listings for dentists on gentledental.care. </span></p>
                <p><strong><span class="s1">6.How many patients will I get after listing my clinic on gentledental.care?</span></strong></p>
                <p class="p2"><span class="s1">The number of patients coming to your clinic will depend on the number of queries you answer and the proximity of your clinic to the patients making the enquiries.Typically, in listing websites like gentledental.care, there&rsquo;s a 30% increase in the number of patients from the first month itself.</span></p>
                <p class="p5">&nbsp;</p>

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

