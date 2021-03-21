<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {   
        $categories = Category::get();
    	$genders = Gender::get();

        $search_query = $request->search_query;
        $products = Product::where('title', 'like', '%'.$search_query.'%')->get();
        return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
    }

    public function searchByPrice(Request $request)
    {   
        $categories = Category::get();
    	$genders = Gender::get();

        $min = $request->min;
        $max = $request->max;

        $products = Product::whereBetween('selling_price', [$min, $max])->get();
        return view('listing', ['categories' => $categories, 'products' => $products, 'genders' => $genders]);
    }
}
