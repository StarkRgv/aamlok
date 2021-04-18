<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;


class DetailsController extends Controller
{
    public function openDetails(Request $request, Product $product){
        $stockCount = ProductVariation::where('product_id', $product->id)->where('status', 1)->sum('quantity');
        $sizes = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['size']);
        // return $sizes;
    	return view('detail', ['product' => $product,
                               'stockCount' => $stockCount,
                               'sizes' => $sizes
                               ]);
    }
}
