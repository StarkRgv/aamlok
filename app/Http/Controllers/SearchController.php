<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Colors;
use App\Models\Size;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::get();
        $subCategory = SubCategory::get();
    	$genders = Gender::get();
    	$brands = Brand::get();
    	$colors = Colors::get();
    	$sizes = Size::get();

        $search_query = $request->search_query;
        $products = Product::where('title', 'like', '%'.$search_query.'%')->where('status', 1)->paginate(15);
        return view('listing', ['categories' => $categories,
                                'subCategory' => $subCategory, 
                                'products' => $products,
                                'genders' => $genders,
                                'brands' => $brands,
                                'colors' => $colors,
                                'sizes' => $sizes
                                ]);
    }

    public function searchByPrice(Request $request)
    {
        $categories = Category::get();
    	$genders = Gender::get();
    	$brands = Brand::get();
    	$colors = Colors::get();
    	$sizes = Size::get();

        $min = $request->min;
        $max = $request->max;

        $products = Product::whereBetween('selling_price', [$min, $max])->where('status', 1)->get();
        return view('listing', ['categories' => $categories,
                                'products' => $products,
                                'genders' => $genders,
                                'brands' => $brands,
                                'colors' => $colors,
                                'sizes' => $sizes
                                ]);
    }
}
