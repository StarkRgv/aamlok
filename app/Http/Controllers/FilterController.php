<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;

class FilterController extends Controller
{
    public function getCategory(Request $request)
    {
        $id = $request->id;
        $categories = Category::get();
    	$genders = Gender::get();
        $products = Product::where('category_id', $id)->get();
        return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
    }
}
