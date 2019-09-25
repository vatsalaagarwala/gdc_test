@extends("app")

@section('head_title', getcong('privacy_policy_title').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
 
<div class="tp-page-head" style="background:url({{ URL::asset('upload/'.getcong('page_bg_image'))}}) no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>{{getcong('privacy_policy_title')}}</h1>
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
          <li class="active">{{getcong('privacy_policy_title')}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
      
        <div class="profile-sidebar well-box">
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                
                  <p style="text-align:justify">

                    Your privacy is critically important to us. And it is gentledental.care’s policy to respect your privacy regarding any information we may collect while operating our Website. This Privacy Policy applies to www.gentledental.care (hereinafter, "us", "we", or "www.gentledental.care"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this Privacy Policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources. This Privacy Policy, together with the Terms and Conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions. 
                    
                    <br><br>
                    <i style="font-weight:bold">Website Visitors</i>
                    <br>

                    Like most website operators, gentledental.care collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. gentledental.care’s purpose in collecting non-personally identifying information is to better understand how gentledental.care’s visitors use its website. From time to time, gentledental.care may release non-personally-identifying information in the aggregate, for example, by publishing a report on trends in the usage of its website. gentledental.care also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on https://www.gentledental.care blog posts. gentledental.care only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below. Gathering of Personally-Identifying Information: Certain visitors to gentledental.care’s websites choose to interact with gentledental.care in ways that require gentledental.care to gather personally-identifying information. The amount and type of information that gentledental.care gathers, depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at https://www.gentledental.care to provide a username and email address. 
                    <br><br>
                    <br>
                    <i style="font-weight:bold">Security</i>
                    <br>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or other method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security. 
                    <br>Advertisements  Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by gentledental.care and does not cover the use of cookies by any advertisers. 
                    <br><br>
                    <br>
                    <i style="font-weight:bold">Links to External Sites </i>
                    <br>
                    Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit. We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services. www.gentledental.care uses the remarketing services to advertise on third party websites (including Google) to previous visitors to our site. It could mean that we advertise to previous visitors who haven't completed a task on our site, for example using the contact form to make an enquiry. This could be in the form of an advertisement on the Google search results page, or a site in the Google Display Network. Third-party vendors, including Google, use cookies to serve ads based on someone's past visits. Of course, any data collected will be used in accordance with our own privacy policy and Google's privacy policy. You can set preferences for how Google advertises to you using the Google Ad Preferences page, and if you want to you can opt out of interest-based advertising entirely by cookie settings or permanently using a browser plugin. 
                    <br>
                    
                    <br>
                    <i style="font-weight:bold">Cookies </i>
                    <br>To enrich and perfect your online experience, gentledental.care uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer. A “Cookie” is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. gentledental.care uses cookies to help gentledental.care identify and track visitors, their usage of https://www.gentledental.care, and their website access preferences. gentledental.care visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using gentledental.care’s websites, with the drawback that certain features of gentledental.care’s websites may not function properly without the aid of cookies. By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to gentledental.care use of cookies.
                    <br><br>
                    <br>
                    <i style="font-weight:bold">E-commerce </i>
                    <br>Those who engage in transactions with gentledental.care – by purchasing gentledental.care’s services or products, are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, gentledental.care collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor's interaction with gentledental.care. gentledental.care does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities. 
                    <br><br>
                      <br>
                      <i style="font-weight:bold"> Aggregated Statistics</i>
                      <br>
                      gentledental.care may collect statistics about the behavior of visitors to its website. gentledental.care may display this information publicly or provide it to others. However, gentledental.care does not disclose your personally-identifying information.
                      <br>

                      <br>
                      <i style="font-weight:bold">Privacy Policy Changes</i>
                      <br>
                      Although most changes are likely to be minor, gentledental.care may change its Privacy Policy from time to time, and in gentledental.care’s sole discretion. gentledental.care encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.
                      <br>

                  </p>

              </div>
            </div>

          </div>
        </div>

    </div>
  </div>
</div>
 

@endsection
