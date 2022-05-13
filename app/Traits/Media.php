<?php

namespace App\Traits;

use Illuminate\Support\Facades\Request;

Trait Media{

   public function StoreImage($request,string $path){

       $image = $request->image;
       $extention = $image->getClientOriginalExtension();
       $image_name = time().'.'.$extention;
       $image->move(public_path($path),$image_name);

       return $image_name;
   }
}

