<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

use App\Models\Home;

use App\Models\ProductCategory;
use App\Models\Product;

use App\Models\UsefullLink;
use App\Models\Leadership;
use App\Models\Contact;
use App\Models\SocialSite;   

use App\Models\Service;
use App\Models\RealEstate;

use App\Models\ProfessionalNetwork;
use App\Models\ProfessionalNetService;

class HomeController extends Controller{
 
   public function admin(Request $request){
      $data['Home'] = Home::all();
      
      $data['ProductCategory'] = ProductCategory::all();
      $data['Product'] = Product::all();

      $data['UsefullLink'] = UsefullLink::all();
      $data['Leadership'] = Leadership::all(); 
      $data['Contact'] = Contact::all();
      $data['SocialSite'] = SocialSite::all();

      $data['Service'] = Service::all();
      $data['RealEstate'] = RealEstate::all(); 

      $data['ProfessionalNetwork'] = ProfessionalNetwork::all();
      $data['ProfessionalNetService'] = ProfessionalNetService::all();
   
      return view('backend.index', $data);
   }

   // Status change
   public function changeStatus(Request $request){
      $model = $request->model;
      $field = $request->field;
      $id = $request->id;
      $tab = $request->tab;

      $itemId = DB::table($model)->find($id);
      ($itemId->$field == true) ? $action=$itemId->$field = false : $action=$itemId->$field = true;     
      DB::table($model)->where('id', $id)->update([$field => $action]);
      return response()->json(['message' => 'Status updated successfully.']);
   }

   
}
