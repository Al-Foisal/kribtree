<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Redirect;
use DB;
use Carbon\Carbon;

use App\Models\ProfessionalNetwork;
use App\Models\ProfessionalNetService;

class ProfessionalNetworkController extends Controller {

   // Professional network page
   public function professionalNetwork(){
      $data['ProfessionalNetwork'] = ProfessionalNetwork::orderBy('orderBy')->get();
      $data['ProfessionalNetService'] = ProfessionalNetService::orderBy('orderBy')->get();
      return view('backend.pages.professional-network', $data);
   }

   // addProfessionalNetwork
   public function addProfessionalNetwork(Request $request){

      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'image'=>'required',
         'details'=>'required'
      ]);   

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=ProfessionalNetwork::latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/professional-network/";
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

      ProfessionalNetwork::create([
         'title'=>$request->title,
         'image'=>$imageLink,
         'details'=>$request->details,
         'orderBy'=>$orderId
      ]);

      return back()->with('success','Professional network info add successfully');
   }

   // editProfessionalNetwork [ajaxView]
   public function editProfessionalNetwork(){
      $data['ProfessionalNetwork'] = ProfessionalNetwork::find($_REQUEST['id']);
      return view('backend.pages.ajaxView', $data);
   }

   // editProfessionalNetwork2 [edit now]
   public function editProfessionalNetwork2(Request $request){
      
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'details'=>'required'
      ]); 

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }
      
      $path="images/professional-network/";
      if ($request->hasFile('image')){
         if($files=$request->file('image')){
            $image = $request->image;
            $fullName=time().".".$image->getClientOriginalExtension();
            $files->move(public_path($path), $fullName);
            $imageLink = $path. $fullName;

            ProfessionalNetwork::where('id', $request->id)->update([
               'title'=>$request->title,
               'image'=>$imageLink,
               'details'=>$request->details,
            ]);
            (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
         }
      }else{
         ProfessionalNetwork::where('id', $request->id)->update([
            'title'=>$request->title,
            'details'=>$request->details,
         ]);
      }
      return back()->with('success','Professional network\'s info edit successfully');
   }


   // addProfessionalNetService
   public function addProfessionalNetService(Request $request){

      $validator = Validator::make($request->all(),[
         'image'=>'required',
         'details'=>'required'
      ]);   

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=ProfessionalNetService::latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/professional-network/";
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
      
      ProfessionalNetService::create([
         'image'=>$imageLink,
         'details'=>$request->details,
         'orderBy'=>$orderId
      ]);

      $tab = 'professionalNetService';
      return back()->with('success','Professional network service info add successfully')->withInput(['tab' => $tab]);
   }

   // editProfessionalNetService [ajaxView]
   public function editProfessionalNetService(){
      $data['ProfessionalNetService'] = ProfessionalNetService::find($_REQUEST['id']);
      return view('backend.pages.ajaxView', $data);
   }

   // editProfessionalNetService2 [edit now]
   public function editProfessionalNetService2(Request $request){
      $validator = Validator::make($request->all(),[
         'details'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $path="images/professional-network/";
      if ($request->hasFile('image')){
         if($files=$request->file('image')){
            $image = $request->image;
            $fullName=time().".".$image->getClientOriginalExtension();
            $files->move(public_path($path), $fullName);
            $imageLink = $path. $fullName;

            ProfessionalNetService::where('id', $request->id)->update([
               'image'=>$imageLink,
               'details'=>$request->details,
            ]);
            (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
         }
      }else{
         ProfessionalNetService::where('id', $request->id)->update([
            'details'=>$request->details,
         ]);
      }

      $tab = 'professionalNetService';
      return back()->with('success','Professional network service\'s info edit successfully')->withInput(['tab' => $tab]);
   }
      
}
