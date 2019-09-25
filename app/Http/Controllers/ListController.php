<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Listings;
use App\Categories;
use App\SubCategories;
use App\Location;
use App\ListingGallery;
use App\Reviews;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
	 
    public function listings(Request $request)    { 
        
              
        $listings = Listings::where('status','1')->orderBy('id','desc')->paginate(9);

        $listings->setPath($request->url());
         
        return view('pages.listings',compact('listings'));
    }

    public function single_listing($listing_slug,$listing_id)    { 
        
        $listing = Listings::where(array('status'=>'1','id'=>$listing_id))->first();
 
        $listing_gallery_images = ListingGallery::where('listing_id',$listing_id)->orderBy('id')->get();

        $listing_reviews = Reviews::where('listing_id',$listing_id)->orderBy('id','desc')->get();

        return view('pages.single_listing',compact('listing','listing_gallery_images','listing_reviews'));
    }

    public function search_listings(Request $request)    
    { 
        
              
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();
        $inputs = $request->all();

       $keyword = $inputs['search_keyword'];
       $location = $inputs['location'];

       // $listings = Listings::where(array('title'=>$keyword,'location_id'=>$location))->get();

       $listings = Listings::SearchByKeyword($keyword,$location)->get();

       $total_res=count($listings);  
         
        return view('pages.search',compact('listings','total_res','keyword','location'));
    }

    public function search_filter_listings(Request $request)    
    { 
        
              
        //$restaurants = Restaurants::orderBy('restaurant_name')->get();
        $inputs = $request->all();

       $category = $inputs['category'];
       
       if(isset($inputs['rating']))
       {

            $rating = $inputs['rating'];

       }
       else
       {

        $rating = '';

       }
       

       //$listings = Listings::where(array('title'=>$keyword,'location_id'=>$location))->get();

       $listings = Listings::SearchByFilter($category,$rating)->get();

       $total_res=count($listings);  
         
        return view('pages.search_filter',compact('listings','total_res','category'));
    }

    public function user_listings(Request $request)    { 
        
       if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $user_id= Auth::User()->id;

        $listings = Listings::where('user_id',$user_id)->orderBy('id')->paginate(10);
        
        $listings->setPath($request->url());

        return view('pages.mylisting',compact('listings'));
    }
    
    public function submit_listing(){ 
        
         if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $categories = Categories::orderBy('category_name')->get();

        $locations = Location::orderBy('location_name')->get();

        return view('pages.addeditlisting',compact('categories','locations'));
    }

    public function test()
    { 
        
        $data =  \Input::except(array('_token'));

        print_r(Session::get('key'));
        
        $rule=array(
                'category' => 'required',
                'sub_category' => 'required',               
                'title' => 'required',
                'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        // $inputs = $request->all();

        $inputs['category'] = '1';
        $inputs['sub_category'] = '1';
        $inputs['title'] = 'hey';
        $inputs['description'] = "hey there";

        
        if(!empty($inputs['id'])){
           
            $listings = Listings::findOrFail($inputs['id']);

        }else{

            $listings = new Listings;

        }
        
        $listing_slug = str_slug($inputs['title'], "-");
        
       

        if(empty($inputs['id'])){
           
            $listings->user_id = Auth::User()->id;

        } 

        $listings->cat_id = $inputs['category'];
        $listings->sub_cat_id = $inputs['sub_category'];
        // $listings->location_id = $inputs['location']; 
        $listings->title = $inputs['title'];
        // $listings->listing_slug = $listing_slug;
        $listings->description = $inputs['description'];
        
        // $listings->address = $inputs['address'];
        // $listings->map_lat = $inputs['latitude'];
        // $listings->map_long = $inputs['lontgitude'];
        // $listings->working_hours_mon = $inputs['working_hours_mon'];
        // $listings->working_hours_tue = $inputs['working_hours_tue'];
        // $listings->working_hours_wed = $inputs['working_hours_wed'];
        // $listings->working_hours_thurs = $inputs['working_hours_thurs'];
        // $listings->working_hours_fri = $inputs['working_hours_fri'];
        // $listings->working_hours_sat = $inputs['working_hours_sat'];
        // $listings->working_hours_sun = $inputs['working_hours_sun'];
        // $listings->video = $inputs['video'];
        // $listings->amenities = $inputs['amenities'];
        // $listings->keywords = $inputs['keywords'];

          
        $listings->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Listing Added');

            return \Redirect::back();

        }            
        
         
    }  
    
    public function addnew(Request $request)
    { 
        
        $data =  \Input::except(array('_token'));

        print_r(Session::get('key'));
        
        $rule=array(
                'category' => 'required',
                'sub_category' => 'required',               
                'title' => 'required',
                'description' => 'required',
                'featured_image' => 'mimes:jpg,jpeg,gif,png'
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();


        // Fetching Listing instance 
        if(!empty($inputs['id'])){
           
            $listings = Listings::findOrFail($inputs['id']);

        }else{

            $listings = new Listings;

        }


        // Fetching USER instance 
        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);
        
        $listing_slug = str_slug($inputs['title'], "-");
        
        //Featured image
        $featured_image = $request->file('featured_image');
         
        if($featured_image){
            
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-b.jpg');
            \File::delete(public_path() .'/upload/listings/'.$listings->featured_image.'-s.jpg');
            
            $tmpFilePath = 'upload/listings/';          
             
            $hardPath = substr($listing_slug,0,100).'_'.time();
            
            $img = Image::make($featured_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            
            $img->fit(300, 300)->save($tmpFilePath.$hardPath. '-s.jpg');

            $listings->featured_image = $hardPath;
             
        }

        if(empty($inputs['id'])){
           
            $listings->user_id = Auth::User()->id;

        } 

        $listings->cat_id = $inputs['category'];
        $listings->sub_cat_id = $inputs['sub_category'];
        $listings->location_id = $inputs['location']; 
        $listings->title = $inputs['title']; 
        $listings->listing_slug = $listing_slug;
        $listings->description = $inputs['description'];
        $listings->address = $inputs['address'];
        $listings->map_lat = $inputs['latitude'];
        $listings->map_long = $inputs['lontgitude'];
        $listings->working_hours_mon = $inputs['working_hours_mon'];
        $listings->working_hours_tue = $inputs['working_hours_tue'];
        $listings->working_hours_wed = $inputs['working_hours_wed'];
        $listings->working_hours_thurs = $inputs['working_hours_thurs'];
        $listings->working_hours_fri = $inputs['working_hours_fri'];
        $listings->working_hours_sat = $inputs['working_hours_sat'];
        $listings->working_hours_sun = $inputs['working_hours_sun'];
        $listings->video = $inputs['video'];
        $listings->amenities = $inputs['amenities'];
        // $listings->keywords = $inputs['keywords'];



        $current_membership = $user->membership;

        $c = 0; //Counter for services loop based on membership

        if ($current_membership == 'Basic') {
            for ($i=0; $i < 5; $i++) { 
                if (isset($_POST['checklist'][$c])) {
                    $listings->keywords .= $inputs['checklist'][$c] . ' , ';
                    $c += 1;
                }
            }   
        }

        if($current_membership == 'Prime')
        {

            for ($i=0; $i < 25 ; $i++) { 
                if (isset($_POST['checklist'][$c])) {
                    $listings->keywords .= ' , ' . $inputs['checklist'][$c];
                    $c += 1;
                }
            }
        }

        if($current_membership == 'Elite')
        {

            for ($i=0; $i < 500 ; $i++) { 
                if (isset($_POST['checklist'][$c])) {
                    $listings->keywords .= ' , ' . $inputs['checklist'][$c];
                    $c += 1;
                }
            }
        }
        

        // services index starts from 1

        // ############################################################################
        // updating prices for selected services

        $buffer = $listings->keywords;
        $services = explode(',', $buffer);
        unset($services[0]);

        if (isset($_POST['price'])) {
            $prices = $inputs['price'];

            $counter = 1;
            foreach ($prices as $key) {
                if ($key != null) {
                    $user->service_1 .= $services[$counter] . " : " . $key . " , ";
                    $counter += 1;
                }
            
            }
        }

        

        

        // ############################################################################
        // fetching and updating consultation fee

        $consultation_fee = $inputs['consultation_fee'];
        $listings->consultation_fee = $consultation_fee;




        // ############################################################################
        // Pushing into DB

        $user->save();  

        $listings->keywords = "HEY";     
        $listings->save();
        

         //News Gallery image
        $listing_gallery_files = $request->file('gallery_file');
        
        $file_count = count($listing_gallery_files);
         
        if($request->hasFile('gallery_file'))
        {

            if(!empty($inputs['id']))
            {

                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    

                    $listing_gallery_obj->listing_id = $inputs['id'];
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }

            }
            else
            {   
                foreach($listing_gallery_files as $file) {
                    
                    $listing_gallery_obj = new ListingGallery;
                    
                    $tmpFilePath = 'upload/gallery/';           
                     
                    $hardPath = substr($listing_slug,0,100).'_'.rand(0,9999).'-b.jpg';
                    
                    $g_img = Image::make($file);

                    $g_img->save($tmpFilePath.$hardPath);
                    
                    $listing_gallery_obj->listing_id = $listings->id;
                    $listing_gallery_obj->image_name = $hardPath;
                    $listing_gallery_obj->save();
                     
                }
            }
        }

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Listing Added');

            return \Redirect::back();

        }            
        
         
    }     
   
    
    public function editlisting($listing_id)    
    {     
          

          if(!Auth::check())
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('login');
            
             }    
           
          $listing = Listings::findOrFail($listing_id);
            
           if($listing->user_id!=Auth::User()->id and Auth::User()->usertype!="Admin")
             {

                \Session::flash('flash_message', 'Access denied!');

                return redirect('dashboard');
            
             }

          
          $categories = Categories::orderBy('category_name')->get();

          $subcategories = SubCategories::where('cat_id',$listing->cat_id)->orderBy('sub_category_name')->get();

          $locations = Location::orderBy('location_name')->get();

          $listing_gallery_images = ListingGallery::where('listing_id',$listing->id)->orderBy('image_name')->get();




          $service_range = array("Treatment of Tetracycline Stains","Toothache Treatment","Artificial Teeth Treatment","Braces Treatment for Adults and Teens","Ceramic Braces Treatment","Dental Check-Ups","Teeth Scaling & Polishing","Dental Check-Ups","Tooth Extractions","Dental Fillings","Dental Implants","Dental Check-Ups","Dental Extractions Procedure","Fillings Procedure","Orthosis Fitting Procedure","Fixed Partial Denture Procedure","Flexible Partial Dentures Procedure","Acrylic Dentures Procedure","Gap Closing (Dental) Treatment","Geriatric Dentistry","Gingivoplasty Procedure","Gum Hygiene Procedure","Gum Disease Treatment/ Surgery","Implant Tooth Fixing Procedure","Invisible Braces Treatment","Jewel Teeth Procedure","Metal Braces Procedure","Minimally Invasive Dentistry","Root Canal Treatment","Teeth Scaling & Polishing Procedure","Scaling And Root Planing Procedure","Smile Architect Procedure","Smile Design Procedures","Smile Makeover Procedures","Space Maintainers Procedure","Special Care Dentistry","Straightening Teeth (Invisalign) Procedure","Teeth Cleaning Procedure","Teeth Reshaping Procedure","Teeth Straightening Procedure","Teeth Whitening Procedure","Veneers Procedure","Tooth Coloured Fillings Procedure","Tooth Extraction Procedure","Wisdom Tooth Removal Procedure","Zirconia Crowns Procedure","Aesthetic Dentistry Treatment","Implant Surgeries","Oral Lesions Screening","Management of Oral Prophylaxis","Oral Rehabilitation","Acrylic Partial Denture Procedure","Aesthetic Crown And Bridges Procedure","Apicoectomy Procedure","Bps Dentures Procedure","Cast Partial Denture Procedure","Ceramic Crowns Procedure","Ceramic Crowns And Bridges Procedure","Ceramic Veneers Procedure","Clear Aligners Procedure","Composite Bondings Procedure","Conservative Dentistry Treatment","Cosmetic Dentistry","Cosmetic Filling Procedure","Cosmetic Veneers Procedure","Cosmetic Bonding Procedure","Crowns Teeth Treatment","Crowns And Bridges Procedure","Dental Crowns Procedure","Dental Implantology Procedure","Dental Laminates Procedure","Dental Surgery","Dentofacial Orthopedics","Dentures Procedure","Disimpaction Procedure","Endo Surgery Or Apicoectomy","Endodontics Treatment","Immediate Dentures Procedure","Implant Retained Dentures Procedure","Implantology Procedure","Inlays Procedure","Laser Dentistry Treatment","Lingual Orthodontics Treatment","Maxillo Facial Prosthodontics Treatment","Mouth Guard Fitting Procedure","Mulligan Manipulation Procedure","Myofunctional Orthodontics Procedure","Onlays Treatment","Oral Surgery","Oral Surgery Procedures","Orthodontic Alignment Procedure","Orthodontics Treatment","Orthognathic Surgery","Partial Dentures Treatment","Pediatric Dentistry","Pedodontics (Children Dentistry)","Periodontal Flap Surgery","Periodontal Plastic Surgery","Periodontics","Pit And Fissure Sealant Procedure","Porcelain Veneers Procedure","Post And Core Dental Procedure","Preadjusted Edgewise Technique","Presurgical Orthodontics Procedure","Preventive Dentistry Procedure","Prosthetics Treatment","Prosthodontics Treatment","Pulpectomy Procedure","Removable Partial Denture Procedure","Restorative Dentistry Procedures","Rotary Rct Procedure","Sealant Treatment","Tooth Veneers Procedure","Advanced Surgery In Implantology Procedures","Allergy Testing","Re RCT","Re Treatment of RCT Treated Tooth");

          $keywords_range = array();


$price_range = array(
4000,
3800,
3500,
40000,
50000,
300,
2000,
300,
1500,
1000,
35000,
300,
1500,
1000,
15000,
5000,
10000,
15000,
4000,
20000,
8000,
2000,
10000,
35000,
80000,
6000,
40000,
5000,
3800,
2000,
6000,
4000,
10000,
10000,
5000,
0,
100000,
2000,
4000,
40000,
15000,
10000,
2000,
1500,
6000,
10000,
2000,
35000,
8000,
2000,
80000,
15000,
10000,
7000,
80000,
15000,
10000,
10000,
10000,
80000,
2000,
1000,
2000,
2000,
2000,
2000,
5000,
5000,
5000,
35000,
4000,
6000,
50000,
15000,
6000,
7000,
3800,
3500,
50000,
35000,
4000,
30000,
60000,
100000,
5000,
5000,
15000,
4000,
6000,
6000,
40000,
40000,
50000,
3500,
5500,
5500,
8000,
10000,
8000,
2000,
10000,
4000,
40000,
40000,
2000,
100000,
3500,
5500,
3500,
1000,
3800,
2000,
4000,
8000,
2000,
6000,
6000);



          $buffer = $listing->keywords;
          // $services = explode(',', $buffer);

          // unset($services[0]);


          return view('pages.addeditlisting',compact('listing','categories','subcategories','locations','listing_gallery_images', 'buffer', 'price_range', 'service_range'));
        
    }	 
    
    public function delete($listing_id)
    {
    	if(Auth::User()->usertype=="Admin" or Auth::User()->usertype=="User")
        {
        	
        $listing = Listings::findOrFail($listing_id);
        

        $listing_gallery_obj = ListingGallery::where('listing_id',$listing->id)->get();
        
        foreach ($listing_gallery_obj as $listing_gallery) {
            
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            \File::delete('upload/gallery/'.$listing_gallery->image_name);
            
            $listing_gallery_del = ListingGallery::findOrFail($listing_gallery->id);
            $listing_gallery_del->delete(); 

            
        }   

        
        \File::delete(public_path() .'/upload/listings/'.$listing->featured_image.'-b.jpg');
        \File::delete(public_path() .'/upload/listings/'.$listing->featured_image.'-s.jpg');    

        $listing->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        
        }
    }

    public function gallery_image_delete($id)
    {
        
        $listing_gallery_obj = ListingGallery::findOrFail($id);
        
        \File::delete('upload/gallery/'.$listing_gallery_obj->image_name);
         
        $listing_gallery_obj->delete(); 

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
     
    public function ajax_subcategories($cat_id)    { 
        
        //$cat_id = \Input::get('cat_id');
              
        $subcategories = SubCategories::where('cat_id',$cat_id)->orderBy('sub_category_name')->get();

         
        return view('pages.ajax_subcategories',compact('subcategories'));
    } 



    public function submit_review(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $rule=array(
                'rating' => 'required'                
                 );
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
    
        $review = new Reviews;

      
        $review->user_id = Auth::User()->id;
        $review->listing_id = $inputs['listing_id'];
        $review->reviews_title = $inputs['reviews_title']; 
        $review->review = $inputs['review']; 
        $review->rating = $inputs['rating']; 
        $review->date= strtotime(date('Y-m-d'));  
          
        $review->save();

        $total_avg=round(DB::table('listings_reviews')->where('listing_id', $inputs['listing_id'])->avg('rating'));

        $listing_obj = Listings::findOrFail($inputs['listing_id']);

        $listing_obj->review_avg = $total_avg;  
        $listing_obj->save(); 
        
        
            \Session::flash('flash_message', 'Review submitted');

            return \Redirect::back();
                   
        
         
    }
    
    public function inquiry_send(Request $request)
    { 

        $user = User::findOrFail($user_id);


        $input = Input::all();
        $patient = $input['name'];

        $user_id = $input['user_id'];
        $user = User::findOrFail($user_id);
        $doc_number = $user->mobile;


        // Replace with your username
        $user = "kabirdas";

        // Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
        $apikey = "oLcdPTmMshsddiP9MKv4"; 

        // Replace if you have your own Sender ID, else donot change
        $senderid  =  "MYTEXT"; 

        // Replace with the destination mobile Number to which you want to send sms
        $mobile  =  "7575950195‬";

        // Replace with your Message content
        $message   =  "Testing SMS API"; 
        $message = urlencode($message);

        // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
        $type   =  "txt";

        // $ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
        //     curl_setopt($ch, CURLOPT_HEADER, 0);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //     $output = curl_exec($ch);      
        //     curl_close($ch); 

        // Display MSGID of the successful sms push
        // echo $output;

        print_r($doc_number . "Hey");

        
        // $data =  \Input::except(array('_token')) ;
        
        // $inputs = $request->all();
        
        // $rule=array(                
        //         'name' => 'required',
        //         'email' => 'required|email|max:75'
        //          );
        
        
        
        //  $validator = \Validator::make($data,$rule);
 
        // if ($validator->fails())
        // {
        //         return redirect()->back()->withErrors($validator->messages());
        // } 
          
        //     $data = array(
        //     'name' => $inputs['name'],
        //     'email' => $inputs['email'],           
        //     'phone' => $inputs['phone'],
        //     'user_message' => $inputs['message'],
        //      );

        //     $subject=$inputs['subject'];

        //     $contact_email=$inputs['contact_email'];


        //     \Mail::send('emails.inquiry', $data, function ($message) use ($subject,$contact_email){

        //         $message->from("ozmarketingtrend@gmail.com");

        //         $message->to("ozmarketingtrend@gmail.com")->subject($subject);

        //     });
        

        //     \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');

        //     return \Redirect::back();

         
    }    

}
