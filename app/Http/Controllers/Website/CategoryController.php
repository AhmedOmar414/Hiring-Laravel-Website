<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function returnCategoryRelatedJobs($id){
        $sub_cat = Category::find($id)->jobs;
        return response()->json([
            'data'=>$sub_cat,
        ]);
    }
}
