<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\ProductVariationImages;
use App\Models\Colors;
use URL;



class DetailsController extends Controller
{
    public function openDetails(Request $request, Product $product){
        // return app()->request;
        $stockCount = ProductVariation::where('product_id', $product->id)->where('status', 1)->sum('quantity');
        $colors = ProductVariation::where('product_id', $product->id)->where('status', 1)->where('quantity', '!=', 0)->distinct()->get(['color']);
        $imageId = ProductVariationImages::where('product_id', $product->id)->distinct()->first();
    	$rawColor = Colors::get();

        if ($request->has('color')) {
            $images = ProductVariationImages::where('product_id', $product->id)->where('color_id', $request->color)->get();
            $sizes = ProductVariation::where('product_id', $product->id)
                                        ->where('color', $request->color)
                                        ->where('status', 1)
                                        ->where('quantity', '!=', 0)
                                        ->distinct()
                                        ->get(['size', 'quantity']);

        }else{
            $images = ProductVariationImages::where('product_id', $product->id)->where('color_id', $imageId->color_id)->get();
            $sizes = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['size']);
        }

    	return view('detail', ['product' => $product,
                               'stockCount' => $stockCount,
                               'sizes' => $sizes,
                               'colors' => $colors,
                               'images' => $images,
                               'rawColor' => $rawColor,
                               ]);
    }
}
