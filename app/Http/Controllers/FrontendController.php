<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Home;

// Product
use App\Models\ProductCategory;
use App\Models\Product;

use App\Models\UsefullLink;
use App\Models\Leadership;
use App\Models\Contact;
use App\Models\SocialSite;

// Service page
use App\Models\Service;
use App\Models\RealEstate;

// Professional-network
use App\Models\ProfessionalNetwork;
use App\Models\ProfessionalNetService;

class FrontendController extends Controller{
   
   public function index(){
      $data['Home'] = Home::where('status', 1)->orderBy('orderBy')->get();
      $data['Product'] = Product::where('status', 1)->orderBy('orderBy')->get();     
       
      return view('frontend.home', $data);
   }

   // who_we_are page
   public function who_we_are(){
      $data['info'] = 'This is who we are page';

      return view('frontend.pages.who-we-are', $data);
   }

   // Service page
   public function service_page(){
      $data['Service'] = Service::where('status', 1)->orderBy('orderBy')->get();
      $data['RealEstate'] = RealEstate::where('status', 1)->orderBy('orderBy')->get();

      return view('frontend.pages.service-page', $data);
   }

   // Professional-network
   public function professional_network(){
      $data['ProfessionalNetwork'] = ProfessionalNetwork::where('status', 1)->orderBy('orderBy')->get();
      $data['ProfessionalNetService'] = ProfessionalNetService::where('status', 1)->orderBy('orderBy')->get();

      return view('frontend.pages.professional-network', $data);
   }
   
   // products page
   public function products(){
      $data['ProductCategory'] = ProductCategory::where('status', 1)->orderBy('orderBy')->get();
      return view('frontend.pages.product-page', $data);
   }
   
}
