<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Colors;
use App\Models\Size;


class ListingController extends Controller
{
    public function openListing(Request $request){

        $categories = Category::get();
    	$products = Product::where('status', 1)->get();
    	$genders = Gender::get();
    	$brands = Brand::get();
    	$colors = Colors::get();
    	$sizes = Size::get();

            if ($request->has('category_id')) {
                $id = $request->category_id;
                $products = Product::where('category_id', $id)->where('status', 1)->get();
                return view('listing', ['categories' => $categories,
                                        'products' => $products,
                                        'genders' => $genders,
                                        'brands' => $brands,
                                        'colors' => $colors,
                                        'sizes' => $sizes
                                        ]);
            }
            if ($request->has('sub_category_id')) {
                $id = $request->sub_category_id;
                $products = Product::where('sub_category_id', $id)->where('status', 1)->get();
                return view('listing', ['categories' => $categories,
                                        'products' => $products,
                                        'genders' => $genders,
                                        'brands' => $brands,
                                        'colors' => $colors,
                                        'sizes' => $sizes
                                        ]);
            }
            if ($request->has('brand_id')) {
                $id = $request->brand_id;
                $brands = Product::where('brand_name', $id)->where('status', 1)->get();
                return view('listing', ['categories' => $categories,
                                        'products' => $products,
                                        'genders' => $genders,
                                        'brands' => $brands,
                                        'colors' => $colors,
                                        'sizes' => $sizes
                                        ]);
            }

        return view('listing', ['categories' => $categories,
                                     'products' => $products,
                                     'genders' => $genders,
                                     'brands' => $brands,
                                     'colors' => $colors,
                                     'sizes' => $sizes
                                    ]);
    }
}
