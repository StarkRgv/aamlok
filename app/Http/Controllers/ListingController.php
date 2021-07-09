<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gender;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Colors;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Support\Collection;

class ListingController extends Controller
{
    public function openListing(Request $request){

        $categories = Category::get();
        $subCategory = SubCategory::get();
    	$products = Product::searchable();
    	$genders = Gender::get();
    	$brands = Brand::get();
    	$colors = Colors::get();
    	$sizes = Size::get();

        return view('listing', ['categories' => $categories,
                                    'subCategory' => $subCategory,
                                     'products' => $products,
                                     'genders' => $genders,
                                     'brands' => $brands,
                                     'colors' => $colors,
                                     'sizes' => $sizes
                                    ]);
    }

    protected function filterData(Collection $collection)
      {
        foreach(request()->query() as $query => $value)
        {
            // $attribute = $transformer::originalAttribute($query);

            if(isset($query, $value))
            {
                $collection = $collection->where($query, $value);
            }
        }
        return $collection;
      }
}
