<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Schema;
use Validator;
use Redirect;
use DB;
use Carbon\Carbon;

use App\Models\UsefullLink;
use App\Models\Leadership;
use App\Models\Contact;
use App\Models\SocialSite;

class FooterController extends Controller {

//Useful link    
   public function useful(){
      $data['UsefullLink'] = UsefullLink::orderBy('orderBy')->get();
      return view('backend.pages.useful', $data);
   }

   public function addUseful(Request $request){
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'url'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=DB::table('usefull_links')->latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;
         
      UsefullLink::create([
         'title'=>$request->title,
         'url'=>$request->url,
         'orderBy'=>$orderId
      ]);      
      return back()->with('success','Useful site add successfully')->withInput(['tab' => 'socialSite']);
   }

//leadership link    
   public function leadership(){
      $data['Leadership'] = Leadership::orderBy('orderBy')->get();
      return view('backend.pages.leadership', $data);
   }

   public function addLeadership(Request $request){
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'url'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=DB::table('leaderships')->latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;
         
      Leadership::create([
         'title'=>$request->title,
         'url'=>$request->url,
         'orderBy'=>$orderId
      ]);      
      return back()->with('success','Leadership site add successfully')->withInput(['tab' => 'socialSite']);
   }
   
// Contact
   public function contact(){
      $data['Contact'] = Contact::orderBy('orderBy')->get();
      return view('backend.pages.contact', $data);
   }

   public function addContact(Request $request){
      $validator = Validator::make($request->all(),[
         'name'=>'required',
         'logo'=>'required',
         'details'=>'required'
      ]);
      
      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=DB::table('contacts')->latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;
      
      Contact::insert([
         'name'=>$request->name,
         'logo'=>$request->logo,
         'details'=>$request->details,
         'status'=>1,
         'orderBy'=>$orderId,
         'created_at' => Carbon::now()
      ]);
         
      return back()->with('success', 'Contact add successfully')->withInput(['tab' => 'contactType']);
   }

   public function editContact(Request $request){
      $validator = Validator::make($request->all(),[
         'name'=>'required',
         'logo'=>'required',
         'details'=>'required'
      ]);
      
      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }
      
      Contact::where('id', $request->id)->update([
         'name'=>$request->name,
         'logo'=>$request->logo,
         'details'=>$request->details
      ]);
         
      return back()->with('success', 'Contact type update successfully')->withInput(['tab' => $request->tab]);
   }
   
// Social site
	public function social(){
      $data['SocialSite'] = SocialSite::orderBy('orderBy')->get();
      return view('backend.pages.left', $data);
   }

   public function addSocialSite(Request $request){
      $validator = Validator::make($request->all(),[
         'socialLogo'=>'required|unique:social_sites,socialLogo',
         'socialName'=>'required|unique:social_sites,socialName',
         'socialUrl'=>'required|unique:social_sites,socialUrl'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=DB::table('social_sites')->latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;
         
      SocialSite::insert([
         'socialLogo'=>$request->socialLogo,
         'socialName'=>$request->socialName,
         'socialUrl'=>$request->socialUrl,
         'orderBy'=>$orderId,
         'status'=>1,
         'created_at' => Carbon::now()
      ]);      
      return back()->with('success','Social site add successfully')->withInput(['tab' => 'socialSite']);
   }

   public function editSocialSite(Request $request){
      $validator = Validator::make($request->all(),[
         'socialName'=>'required|unique:social_sites,socialName',
         'socialUrl'=>'required|unique:social_sites,socialUrl'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator)->withInput(['tab' => $request->tab]);
      }

      SocialSite::where('id', $request->id)->update([
         'socialName'=>$request->socialName,
         'socialUrl'=>$request->socialUrl
      ]);
      return back()->with('success','Social site edit successfully')->withInput(['tab' => $request->tab]);
   } 

}
