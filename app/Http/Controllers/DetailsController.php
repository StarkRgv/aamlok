<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\ProductVariationImages;



class DetailsController extends Controller
{
    public function openDetails(Request $request, Product $product){
        // return $request->color;
        $stockCount = ProductVariation::where('product_id', $product->id)->where('status', 1)->sum('quantity');
        $sizes = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['size']);
        $colors = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['color']);
        $imageId = ProductVariationImages::where('product_id', $product->id)->distinct()->first();

        if ($request->has('color')) {
            $images = ProductVariationImages::where('product_id', $product->id)->where('color_id', $request->color)->get();
        }else{
            $images = ProductVariationImages::where('product_id', $product->id)->where('color_id', $imageId->color_id)->get();
        }

    	return view('detail', ['product' => $product,
                               'stockCount' => $stockCount,
                               'sizes' => $sizes,
                               'colors' => $colors,
                               'images' => $images
                               ]);
    }
}
