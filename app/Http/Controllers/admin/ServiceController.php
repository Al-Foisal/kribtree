<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Redirect;
use DB;
use Carbon\Carbon;

use App\Models\Service;
use App\Models\RealEstate;

class ServiceController extends Controller {

   //Service page
   public function service(){
      $data['Service'] = Service::orderBy('orderBy')->get();
      $data['RealEstate'] = RealEstate::orderBy('orderBy')->get();
      return view('backend.pages.service', $data);
   }

   // addService
   public function addService(Request $request){

      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'image'=>'required',
         'details'=>'required'
      ]);   

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=Service::latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/service/service/";
      $default="default.jpg";
      if ($request->hasFile('image')){
      if($files=$request->file('image')){
         $image = $request->image;
         $fullName=time().".".$image->getClientOriginalExtension();
         $files->move(public_path($path), $fullName);
         $imageLink = $path. $fullName;
      }
      }else{
         $imageLink = $path . $default;
      }   

      Service::create([
         'title'=>$request->title,
         'image'=>$imageLink,
         'details'=>$request->details,
         'orderBy'=>$orderId
      ]);

      return back()->with('success','Service info add successfully');
   }

   // editService [ajaxView]
   public function editService(){
      $data['Service'] = Service::find($_REQUEST['id']);
      return view('backend.pages.ajaxView', $data);
   }

   // editService2 [edit now]
   public function editService2(Request $request){
      
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'details'=>'required'
      ]); 

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $path="images/service/service/";
      if ($request->hasFile('image')){
         if($files=$request->file('image')){
            $image = $request->image;
            $fullName=time().".".$image->getClientOriginalExtension();
            $files->move(public_path($path), $fullName);
            $imageLink = $path. $fullName;

            Service::where('id', $request->id)->update([
               'title'=>$request->title,
               'image'=>$imageLink,
               'details'=>$request->details,
            ]);
            (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
         }
      }else{
         Service::where('id', $request->id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
         ]);
      }
      return back()->with('success','Service\'s info edit successfully');
   }


   // addRealEstate
   public function addRealEstate(Request $request){

      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'image'=>'required',
         'details'=>'required'
      ]);   

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=RealEstate::latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/service/real-estate/";
      $default="default.jpg";
      if ($request->hasFile('image')){
      if($files=$request->file('image')){
         $image = $request->image;
         $fullName=time().".".$image->getClientOriginalExtension();
         $files->move(public_path($path), $fullName);
         $imageLink = $path. $fullName;
      }
      }else{
         $imageLink = $path . $default;
      }   
     
      RealEstate::create([
         'title'=>$request->title,
         'image'=>$imageLink,
         'details'=>$request->details,
         'orderBy'=>$orderId
      ]);

      $tab = 'realEstate';
      return back()->with('success','Real-estate info add successfully')->withInput(['tab' => $tab]);
   }

   // editRealEstate [ajaxView]
   public function editRealEstate(){
      $data['RealEstate'] = RealEstate::find($_REQUEST['id']);
      return view('backend.pages.ajaxView', $data);
   }

   // editRealEstate2 [edit now]
   public function editRealEstate2(Request $request){
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'details'=>'required'
      ]); 

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $path="images/service/real-estate/";
      if ($request->hasFile('image')){
         if($files=$request->file('image')){
            $image = $request->image;
            $fullName=time().".".$image->getClientOriginalExtension();
            $files->move(public_path($path), $fullName);
            $imageLink = $path. $fullName;

            RealEstate::where('id', $request->id)->update([
               'title'=>$request->title,
               'image'=>$imageLink,
               'details'=>$request->details,
            ]);
            (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
         }
      }else{
         RealEstate::where('id', $request->id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
         ]);
      }

      $tab = 'realEstate';
      return back()->with('success','Real-estate\'s info edit successfully')->withInput(['tab' => $tab]);
   }

}
