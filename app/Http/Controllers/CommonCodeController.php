<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use DB;

class CommonCodeController extends Controller{
    
    // Delete
   public function delete($model, $id, $tab){
      $itemId = DB::table($model)->find($id);
      
      if (Schema::hasColumn($model, 'image')){
         ($itemId->image!=null) ? (file_exists($itemId->image) ? unlink($itemId->image) : '') : '';
      }

      DB::table($model)->where('id', $id)->delete();
      return back()->with('success', $model.' info delete successfully')->withInput(['tab' => $tab]);
   }
 
}
