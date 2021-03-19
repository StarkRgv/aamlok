<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;


class ListingController extends Controller
{
    public function openListing(Request $request){
        
        $categories = Category::get();
    	$products = Product::get();
    	$genders = Gender::get();

        if ($request->has('category_id')) {
            $id = $request->category_id;
            $products = Product::where('category_id', $id)->get();
            return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
        }
        
        return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
    }
}
