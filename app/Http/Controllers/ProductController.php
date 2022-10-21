<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Validator;

class ProductController extends Controller {

    // Product
    public function product() {
        $data['ProductCategory'] = ProductCategory::orderBy('orderBy')->get();
        $data['Product']         = Product::orderBy('orderBy')->get();

        return view('backend.pages.product', $data);
    }

    public function addProduct(Request $request) {

        $validator = Validator::make($request->all(), [
            'categoryId' => 'required',
            'name'       => 'required',
            'image'      => 'required',
            'details'    => 'required',
            'price'      => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return Redirect::back()->withErrors($validator);
        }

        $id                      = DB::table('products')->latest('orderBy')->first();
        ($id == null) ? $orderId = 1 : $orderId = $id->orderBy + 1;

        $path    = "images/product/";
        $default = "default.jpg";

        if ($request->hasFile('image')) {

            if ($files = $request->file('image')) {
                $image    = $request->image;
                $fullName = time() . "." . $image->getClientOriginalExtension();
                $files->move(public_path($path), $fullName);
                $imageLink = $path . $fullName;
            }

        } else {
            $imageLink = $path . $default;
        }

        Product::create([
            'categoryId' => $request->categoryId,
            'name'       => $request->name,
            'image'      => $imageLink,
            'details'    => $request->details,
            'price'      => $request->price,
            'orderBy'    => $orderId,
        ]);

        return back()->with('success', 'Product add successfully');
    }

// public function editHome(){

//     $data['Home'] = Home::find($_REQUEST['id']);

//     return view('backend.pages.ajaxView', $data);

// }

// public function editHome2(Request $request){

//     $validator = Validator::make($request->all(),[

//     'title'=>'required',

//     'buttonName'=>'required',

//     'link'=>'required'

//     ]);

//     if($validator->fails()){

//     $messages = $validator->messages();

//     return Redirect::back()->withErrors($validator);

//     }

//     $path="home/";

//     if ($request->hasFile('image')){

//     if($files=$request->file('image')){

//         $picture = $request->image;

//         $fullName=time().".".$picture->getClientOriginalExtension();

//         $files->move(imagePath($path), $fullName);

//         $imageLink = imagePath($path). $fullName;

//         Home::where('id', $request->id)->update([

//             'image'=>$imageLink,

//             'title'=>$request->title,

//             'buttonName'=>$request->buttonName,

//             'link'=>$request->link,

//         ]);

//         (file_exists($request->oldImage) ? unlink($request->oldImage) : '');

//     }

//     }else{

//     Home::where('id', $request->id)->update([

//         'title'=>$request->title,

//         'buttonName'=>$request->buttonName,

//         'link'=>$request->link,

//     ]);

//     }

//     return back()->with('success','Homes\'s image edit successfully');

// }

    // Add product category
    public function addProductCategory(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:product_categories,name',
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();

            return Redirect::back()->withErrors($validator);
        }

        $id                      = ProductCategory::latest('orderBy')->first();
        ($id == null) ? $orderId = 1 : $orderId = $id->orderBy + 1;

        ProductCategory::create([
            'name'    => $request->name,
            'orderBy' => $orderId,
        ]);

        $tab = 'productCategory';

        return back()->with('success', 'Product category name add successfully')->withInput(['tab' => $tab]);
    }

    // Buy-sell-rent
    public function buy() {
        $data['Product'] = Product::orderBy('orderBy')->get();

        return view('frontend.pages.buy-sell-rent', $data);
    }

    // Agent finder
    public function agent_finder() {
        return view('frontend.pages.agent-finder');
    }

}
