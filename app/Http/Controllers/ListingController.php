<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;


class ListingController extends Controller
{
    public function openListing(){
        
        $categories = Category::get();
    	$products = Product::get();
    	$genders = Gender::get();
        return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
    }
}
