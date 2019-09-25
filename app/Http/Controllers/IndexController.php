<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Categories;
use App\Listings;
use App\ContactUS;
use App\Support;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Input; 

class IndexController extends Controller
{

    public function index()
    { 
    	if(!$this->alreadyInstalled()) {
            return redirect('install');
        }
    	  

        return view('pages.home');
    }
    
    public function about_us()
    { 
                  
        return view('pages.about');
    }

    public function contact_us()
    {        
        return view('pages.contact');
    }

    public function our_support()
    {        
        return view('pages.support');
    }

    public function termsandconditions()
    { 
                  
        return view('pages.termsandconditions');
    }

    public function privacypolicy()
    { 
                  
        return view('pages.privacypolicy');
    }

    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled()
    {
        return file_exists(storage_path('installed'));
    }

    /**
     * Do user login
     * @return $this|\Illuminate\Http\RedirectResponse
     */
     
     public function login()
    { 
       if(Auth::check())
       { 
            return redirect('/dashboard');
       }
       else
       {
            return view('pages.login');

       }

        
    }

    public function postLogin(Request $request)
    {
        
    //echo bcrypt('123456');
    //exit; 
        
      $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials, $request->has('remember'))) {

           /* if(Auth::user()->usertype=='banned'){
                \Auth::logout();
                return array("errors" => 'You account has been banned!');
            }*/

            // return $this->handleUserWasAuthenticated($request);

            if (method_exists($this, 'authenticated')) {
                return $this->authenticated($request, Auth::user());
            }

            // return $this->test($request);

            // return redirect('/');
            return redirect('/dashboard');
        }

       // return array("errors" => 'The email or the password is invalid. Please try again.');
        //return redirect('/admin');
       return redirect('/login')->withErrors('The email or the password is invalid. Please try again.');
      


    }
    
     /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request)
    {

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return $this->test($request);

        // return redirect('/submit_listing');
    }
    
     public function forgot_password()
    { 
       
            return view('pages.forgot_password');
        
    }

    
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        \Session::flash('flash_message', 'Logout successfully...');

        return redirect('/login');
    }


    public function register()
    { 
                   
        return view('pages.register');
    }

    public function faq()
    { 
                   
        return view('pages.faq');
    }

    public function postRegister(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(
                'first_name' => 'required',
                // 'last_name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'required|min:3'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 

        // Session::put('key', 'test');
          
       
        $user = new User;

        
        $user->usertype = 'User';
        $user->first_name = $inputs['first_name']; 
        $user->last_name = ' ';       
        $user->email = $inputs['email'];      
        $user->password= bcrypt($inputs['password']);
        $user->mobile = $inputs['contact'];
        $user->membership = 'Exclusive';
 
        if ($inputs["referral"] == "0") {
            $user->referral = "66";
        }else{
            $user->referral = $inputs["referral"];
        }
    
        $user->dribbble_url = $inputs['dci'];
        // $user->refers = $inputs['refers'];

        // echo "string " . $inputs['contact'];
        // $user->contact = $inputs['contact'];
        $user->address = $inputs["location"];
        // $user->clinic_name = $inputs["clinic_name"];

        $user_push = User::findOrFail($user->referral);

        $buffer = $user_push->refers;
        $user_push->refers = $buffer + 1;

        if ($buffer > 10) {
            $user_push->refers = 10;
        }

        $user_push->save();
       
         
        $user->save();    

        // return $this->push_referral_update();
       

            \Session::flash('flash_message', 'Register successfully...');

            // return \Redirect::back();

            // return view('pages.login');
            // return redirect('/submit_listing');

            //

            $this->validate($request, ['email' => 'required|email', 'password' => 'required',]);
            $credentials = $request->only('email', 'password');
     
            if (Auth::attempt($credentials, $request->has('remember'))) {

             /* if(Auth::user()->usertype=='banned'){
                  \Auth::logout();
                  return array("errors" => 'You account has been banned!');
              }*/

              return $this->handleUserWasAuthenticated($request);
            }

            // return array("errors" => 'The email or the password is invalid. Please try again.');
            //return redirect('/admin');
            return redirect('/login')->withErrors('The email or the password is invalid. Please try again.');

         
    }  


    public function test(Request $request){

      $data =  \Input::except(array('_token'));

      $inputs = $request->all();

        // $rule=array(
        //         'category' => 'required',
        //         'sub_category' => 'required',               
        //         'title' => 'required',
        //         'description' => 'required',
        //         'featured_image' => 'mimes:jpg,jpeg,gif,png'
        //          );
        
        //  $validator = \Validator::make($data,$rule);
 
        // if ($validator->fails())
        // {
        //         return redirect()->back()->withErrors($validator->messages());
        // } 


        // $inputs = $request->all();

        // print_r($inputs);
        
        if(!empty($inputs['id'])){
           
            $listings = Listings::findOrFail($inputs['id']);

        }else{

            $listings = new Listings;

        }
        
        $listing_slug = str_slug($inputs['contact'], "-");
        
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
             
        }else{
            $listings->featured_image = "dentist_placeholder";
        }


        if(empty($inputs['id'])){
           
            $listings->user_id = Auth::User()->id;

        } 

        $listings->cat_id = 1;
        $listings->sub_cat_id = 1;
        $listings->location_id = 1;
        $listings->title = $inputs['clinic_name']; 
        $listings->listing_slug = $listing_slug;
        $listings->description = ' ';
        $listings->status = 1;
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

            // return \Redirect::back();

            return redirect('/mylisting');

        }            

    }  

    public function push_referral_update(){
        
        $user_id = 66;
        $user = User::findOrFail($user_id);

        $buffer = $user->referral;
        $user->referral = $buffer + 1;

        $user->save();

    }

    public function dashboard()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
            $user = User::findOrFail($user_id);
            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.dashboard',compact('listings','publish_listings','pending_listings', 'user'));
       }
       else
       {       
            return redirect('/login');
       }   
    } 

    public function profile()
    { 
        if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }

        $user_id=Auth::user()->id;
        $user = User::findOrFail($user_id);

        return view('pages.profile',compact('user'));
    } 
    

    public function editprofile(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        
            $rule=array(
                'first_name' => 'required',
                'email' => 'required|email|max:200'
                 );
       
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
        $user_id=Auth::user()->id;
           
        $user = User::findOrFail($user_id);
        

        $icon = $request->file('user_icon');
         
        if($icon){


            $tmpFilePath = 'upload/members/';

            $hardPath =  str_slug($inputs['first_name'], '-').'-'.md5(time());

            $img = Image::make($icon);

            $img->fit(250, 250)->save($tmpFilePath.$hardPath.'-b.jpg');
            //$img->fit(80, 80)->save($tmpFilePath.$hardPath. '-s.jpg');

            $user->image_icon = $tmpFilePath.$hardPath.'-b.jpg';
        }
         
        
        $user->first_name = $inputs['first_name'];    
        $user->email = $inputs['email'];
        $user->mobile = $inputs['mobile'];
        $user->contact_email = $inputs['email'];
        $user->website = $inputs['website'];        
        $user->address = $inputs['address'];
        $user->facebook_url = $inputs['facebook_url'];
        $user->twitter_url = $inputs['twitter_url'];
        $user->linkedin_url = $inputs['linkedin_url'];
        // $user->dribbble_url = $inputs['dribbble_url'];
        $user->instagram_url = $inputs['instagram_url'];  


        $user->save();
        
         
            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
         
         
    }        

    public function change_password()
    { 
          if(!Auth::check())
       {

            \Session::flash('flash_message', 'Access denied!');

            return redirect('login');
            
        }
        
        return view('pages.change_password');
    }

        
     public function edit_password(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(                
                'password' => 'required|min:3|confirmed'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
          
       
        $user_id=Auth::user()->id;
           
        $user = User::findOrFail($user_id);
       
        $user->password= bcrypt($inputs['password']);  
        
         
        $user->save(); 

            \Session::flash('flash_message', 'Password has been changed...');

            return \Redirect::back();

         
    } 


    public function contact_send(Request $request)
    { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
            ]);
     
           ContactUS::create($request->all());
     
           return back()->with('success', 'Thanks for contacting us!');
        
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
        //     'subject' => $inputs['subject'],
        //     'user_message' => $inputs['message'],
        //      );

        //     $subject=$inputs['subject'];

        //     \Mail::send('emails.contact', $data, function ($message) use ($subject){

        //         $message->from(getcong('site_email'), getcong('site_name'));

        //         $message->to(getcong('site_email'))->subject($subject);

        //     });
        

        //     \Session::flash('flash_message', 'Thank You. Your Message has been Submitted.');

        //     return \Redirect::back();

         
    }

    
    public function support_message(Request $request)
    { 

        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'subject'=>'required',
        //     'message' => 'required'
        //     ]);
     
        //    Support::create($request->all());
     
        //    return back()->with('success', 'We will get back to you soon');
        $inputs = $request->all();
        $name = $inputs["name"];
        $email = $inputs["email"];
        $subject = $inputs["subject"];
        $message = $inputs["message"];
       

        

        $supports = new Support;
        $supports->name = $name;
        $supports->email = $email;
        $supports->subject = $subject;
        $supports->message = $message;
       

        $supports->save();

        return back()->with('success', 'We will get back to you soon');
        // return \Redirect::back();
         
    }

    public function membership()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.membership',compact('membership_plan','listings','publish_listings','pending_listings'));
       }
       else
       {       
            return redirect('/login');
       }   
    }    

    public function buymembership()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);
            $user->membership = "Basic";

            $user->save();

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.buymembership');
       }
       else
       {       
            return redirect('/login');
       }   
    }

    public function buybasic()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);
            $user->membership = "Basic";

            $user->save();

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.membership',compact('membership_plan','listings','publish_listings','pending_listings'));
       }
       else
       {       
            return redirect('/login');
       }   
    }      

    public function buyprime()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);
            $user->membership = "Prime";

            $user->save();

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.buymembership',compact('membership_plan','listings','publish_listings','pending_listings'));
       }
       else
       {       
            return redirect('/login');
       }   
    }     

    public function buyelite()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);
            $user->membership = "Elite";

            $user->save();

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.buymembership',compact('membership_plan','listings','publish_listings','pending_listings'));
       }
       else
       {       
            return redirect('/login');
       }   
    }

     public function buyexclusive()
    {   
         if(Auth::check())
       { 
            $user_id=Auth::user()->id;
           
            $user = User::findOrFail($user_id);
            $user->membership = "Exclusive";

            $user->save();

            $membership_plan = $user->membership;

            // print_r($user->membership);

            $listings = Listings::where('user_id',$user_id)->count();

            $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

            $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

             return view('pages.buymembership',compact('membership_plan','listings','publish_listings','pending_listings'));
       }
       else
       {       
            return redirect('/login');
       }   
    }

    public function patient_data(){

        $inputs = Input::all();
        $data = $inputs['patient_data'];
        $name = $inputs['patient_data_name'];

        $user = User::findOrFail(1);
        $push = $user->contact_email;
        $push .= "Data : " . $data . " Name : " . $name . ",";
        $user->contact_email = $push;
        $user->save();

        // return view('pages.PatientData', compact('inputs'));

        print_r("hey" . $data);
    }

    public function showCall(){

        return view('pages.PatientData');   

    }

     public function process_payment()
    {   
         $input = Input::all();
         $var = $input['razorpay_payment_id'];

         if ($var == null) {

           return view('pages.buymembership', compact('var'));    

         }else{

            if(Auth::check())
           { 
                $user_id=Auth::user()->id;
        
                $user = User::findOrFail($user_id);
                $user->membership = $input['membership_plan'];
                $user->save();

                $membership_plan = $user->membership;

                // print_r($user->membership);

                $listings = Listings::where('user_id',$user_id)->count();

                $publish_listings = Listings::where(array('user_id'=>$user_id,'status'=>1))->count(); 

                $pending_listings = Listings::where(array('user_id'=>$user_id,'status'=>0))->count(); 

                 return view('pages.membership',compact('membership_plan','listings','publish_listings','pending_listings'));
           }
           else
           {       
                return redirect('/login');
           }   

            return view('pages.membership');

        }
    }

    public function sendSMS(){

        // $listings = Listings::where(array('user_id'=>1));

        // $user = User::findOrFail($user_id);


        $input = Input::all();
        $patient = $input['name'];

        $date = $input['date'];
        $time = $input['time'];

        $user_id = $input['user_id'];
        $user = User::findOrFail($user_id);
        $doc_number = $user->mobile;

        $patient_number = $input['phone'];

        // Patient note to doc, USE in email reminder
        $msg = $input['note'];

        // 
        // Add a field replacing note with 1-2 words
        // reuse that in the SMS push
        // eg : bla bla bla for "Braces" bla bla
        // 
        // send through CURL


        // Replace with your username
        $user = "gentledental";

        // Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
        $apikey = "WT5DhHV5X8VU6ySwd4fd"; 

        // Replace if you have your own Sender ID, else donot change
        $senderid  =  "GENTLE"; 

        // Replace with the destination mobile Number to which you want to send sms
        // $mobile  =  $doc_number;

        // $mobile = "8876721208";
        $mobile = $input['mobile_doc'];

        // Replace with your Message content
        $message_doc   =  $patient . " wants an appointment on " . $date . " at " . $time . " Contact-" .$patient_number;
        $message_doc = urlencode($message_doc);

        $message = "Hi, " . $patient . " You have reached your dentist. You'll be contacted shortly"; 
        $message = urlencode($message);

        // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
        $type   =  "txt";

        /**
         * Params : 
         * $ch - to doc
         * $ch2 - to patient
         */

        $ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user
                        ."&apikey=".$apikey
                        ."&mobile=".$mobile
                        ."&senderid=".$senderid
                        ."&message=".$message_doc
                        ."&type=".$type.""); 
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);      
            curl_close($ch); 

        $ch2 = curl_init("http://smshorizon.co.in/api/sendsms.php?user="
                        .$user."&apikey=".$apikey
                        ."&mobile=".$patient_number
                        ."&senderid=".$senderid
                        ."&message=".$message
                        ."&type=".$type.""); 

            curl_setopt($ch2, CURLOPT_HEADER, 0);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
            $output2 = curl_exec($ch2);  
            curl_close($ch2); 

        // Display MSGID of the successful sms push
        // echo $output;

        // print_r($output . $output2 . "Hey :: " . $date);
        print_r("Booking Appointment ...");
        return redirect("/listings");



    }

    public function dentalchecker(){
        return \File::get(public_path() . '/dentalchecker.blade.php');

    }

    public function places(){
        return \File::get(public_path() . '/places.html');
    }

    public function showmembership_landing(){

        return view('pages.membership_landing');
    }

    public function registerpatients(){

        return view('pages.register_patient');
    }

    public function postRegisterpatients(Request $request)
    { 
        
        $data =  \Input::except(array('_token')) ;
        
        $inputs = $request->all();
        
        $rule=array(
                'first_name' => 'required',
                // 'last_name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'required|min:3'
                 );
        
        
        
         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 

        // Session::put('key', 'test');
          
       
        $user = new User;

        
        $user->usertype = 'Patient';
        $user->first_name = $inputs['first_name']; 
        $user->last_name = ' ';       
        $user->email = $inputs['email'];      
        $user->password= bcrypt($inputs['password']);
        $user->mobile = $inputs['contact'];
       
         
        $user->save();    

        // return $this->push_referral_update();
       

            \Session::flash('flash_message', 'Register successfully...');

            // return \Redirect::back();

            // return view('pages.login');
            print_r("Account Registered Successfully");
            return redirect('/');

         
    }  

    public function registerselect(){

        return view('pages.loginselect');
    }

    public function blog(){
        
        return \File::get(public_path() . '/blog'); 

    }

    public function lead_capture(Request $request){

        // $data =  \Input::except(array('_token')) ;

        $inputs = $request->all();

        $name = $inputs["lead_name"];
        $number = $inputs["lead_number"];

        echo "sdaadasda";

        return view("pages.home");


    }

    public function lead_sms($name, $number){

        $input = Input::all();
        $patient = $input['name'];

        $date = $input['date'];
        $time = $input['time'];

        $user_id = $input['user_id'];
        $user = User::findOrFail($user_id);
        $doc_number = $user->mobile;

        $patient_number = $input['phone'];

        // Patient note to doc, USE in email reminder
        $msg = $input['note'];

        // 
        // Add a field replacing note with 1-2 words
        // reuse that in the SMS push
        // eg : bla bla bla for "Braces" bla bla
        // 
        // send through CURL


        // Replace with your username
        $user = "gentledental";

        // Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
        $apikey = "WT5DhHV5X8VU6ySwd4fd"; 

        // Replace if you have your own Sender ID, else donot change
        $senderid  =  "GENTLE"; 

        // Replace with the destination mobile Number to which you want to send sms
        $mobile = $input['mobile_doc'];

        // Replace with your Message content
        $message_doc   =  $patient . " wants an appointment on " . $date . " at " . $time . " Contact-" .$patient_number;
        $message_doc = urlencode($message_doc);

        $message = "Hi, " . $patient . " You have reached your dentist. You'll be contacted shortly"; 
        $message = urlencode($message);

        // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
        $type   =  "txt";

        /**
         * Params : 
         * $ch - to doc
         * $ch2 - to patient
         */

        $ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user
                        ."&apikey=".$apikey
                        ."&mobile=".$mobile
                        ."&senderid=".$senderid
                        ."&message=".$message_doc
                        ."&type=".$type.""); 
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);      
            curl_close($ch); 

        $ch2 = curl_init("http://smshorizon.co.in/api/sendsms.php?user="
                        .$user."&apikey=".$apikey
                        ."&mobile=".$patient_number
                        ."&senderid=".$senderid
                        ."&message=".$message
                        ."&type=".$type.""); 

            curl_setopt($ch2, CURLOPT_HEADER, 0);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
            $output2 = curl_exec($ch2);  
            curl_close($ch2); 

        // Display MSGID of the successful sms push
        // echo $output;

        // print_r($output . $output2 . "Hey :: " . $date);
        print_r("Booking Appointment ...");
        return redirect("/listings");



    }





}
