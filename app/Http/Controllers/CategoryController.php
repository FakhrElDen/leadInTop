<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{    
    public function getCategoriesWithSubcategories()
    {
        $respone['message'] = true;
        $respone['data'] = Category::with('subcategories')->whereNull('parent_id')->get();
        return response()->json($respone);
    }
}
