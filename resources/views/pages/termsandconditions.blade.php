@extends("app")

@section('head_title', getcong('terms_of_title').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>{{getcong('terms_of_title')}}</h1>
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
          <li class="active">{{getcong('terms_of_title')}}</li>
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
                  
                    <p style="text-align:justify">

                      Please read the following terms and conditions carefully before accessing, browsing or using the gentledental.care Website. These terms and conditions outline the rules and regulations for the use of this Website. By accessing this Website, we assume you accept these terms and conditions. Do not continue to use gentledental.care if you do not agree with all of the terms and conditions stated on this page. 
                      <br>
                      <br>
                      The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: 
                      <br>
                      "Client", "You" and "Your" refers to you, the person logging in this Website and compliant to the Company’s Terms and Conditions. 
                      <br>
                      "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. 
                      <br>
                      <br>
                      All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services. All in accordance with and subject to prevailing law of India. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same. 
                      <br><br>
                      Cookies:
                      <br> 
                      We employ the use of cookies. By accessing gentledental.care, you agreed to use cookies in agreement with the gentledental.care’s Privacy Policy. Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our Website to enable the functionality of certain areas to make it easier for people visiting our Website. Some of our affiliate/advertising partners may also use cookies. 
                      <br><br>
                      Licence:
                      <br> 
                      Unless stated otherwise, gentledental.care and/or its licensors own the intellectual property rights for all material on gentledental.care. All intellectual property rights are reserved. You may access this from gentledental.care for your own personal use subjected to restrictions set in these Terms and Conditions. You must not: 
                      Republish material from gentledental.care 
                      Sell, rent or sub-license material from gentledental.care 
                      Reproduce, duplicate or copy material from gentledental.care 
                      Redistribute content from gentledental.care 
                      This Agreement shall begin on the date hereof. Parts of this Website offer an opportunity for users to post and exchange opinions and information in certain areas of the Website. gentledental.care does not filter, edit, publish or review comments prior to their presence on the Website. Comments do not reflect the views and opinions of gentledental.care, its agents and/or affiliates. Comments reflect the views and opinions of the people who post their views and opinions. To the extent permitted by applicable laws, gentledental.care shall not be liable for the comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the comments on this Website. gentledental.care reserves the right to monitor all comments and to remove any comments which can be considered inappropriate, offensive or causes breach of these 
                      <br>
                      Terms and Conditions. You warrant and represent that: 
                      You are entitled to post the comments on our Website and have all necessary licenses and consent to do so.
                      <br>
                      The comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party.
                      <br>
                      The comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy. 
                      <br>
                      The comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity. 
                      <br>
                      You hereby grant gentledental.care a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your comments in any and all forms, formats or media. 
                      <br>
                      <br>
                      Hyperlinking to our content, the following organizations may link to our Website without prior written approval: Government agencies; Search engines; News organizations; Online directory distributors may link to our Website in the same manner as they hyperlink to the websites of other listed businesses; and System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Website. These organizations may link to our home page, to publications or to other website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site. We may consider and approve other link requests from the following types of organizations: commonly-known consumer and/or business information sources; dot.com community sites; associations or other groups representing charities; online directory distributors; internet portals; accounting, law and consulting firms; and Educational institutions and trade associations. 
                      <br>
                      We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorable to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of gentledental.care; and (d) the link is in the context of general resource information. 
                      These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.
                      <br> 
                      If you are one of the organizations listed in paragraph 2 above and are interested in linking to our Website, you must inform us by sending an e-mail to gentledental.care. Please include your name, your organization’s name, contact information as well as the URL of your Website, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait for 2-3 weeks for a response. Approved organizations may hyperlink to our Website as follows: By use of our corporate name; or by use of the uniform resource locator being linked to; or by use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site. No use of gentledental.care logo or other artwork will be allowed for linking absent a trademark license agreement. 
                      <br><br>
                      iFrames 
                      <br>
                      Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website. 
                      Content Liability 
                      <br>
                      We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, violates, or advocates the infringement or other violation of any third party rights. 
                      <br><br>
                      Your Privacy 
                      <br>
                      Please read Privacy Policy Reservation of Rights. We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking Terms and Conditions. 
                      Removal of links from our Website: If you find any link on our Website that is offensive for any reason, you are free to contact and inform us at any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly. We do not ensure that the information on this Website is correct, we do not warrant its completeness or accuracy, nor do we promise to ensure that the Website remains available or that the material on the Website is kept up to date. 
                      <br><br>
                      Disclaimer
                      <br> 
                      To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our Website and the use of this Website. Nothing in this disclaimer will: limit or exclude our or your liability for death or personal injury; limit or exclude our or your liability for fraud or fraudulent misrepresentation; limit any of our or your liabilities in any way that is not permitted under applicable law; or exclude any of our or your liabilities that may not be excluded under applicable law. The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty. As long as the Website and the information and services on the Website are provided free of charge, we will not be liable for any loss or damage of any nature. 
                      <br><br>
                      Grievances 
                      <br>
                      Any and all legal disputes will be resolved in the Gauhati High Court.

                    </p>
                </div>
              </div>
          </div>
         
      </div>
    </div>
  </div>
</div>
 

@endsection
