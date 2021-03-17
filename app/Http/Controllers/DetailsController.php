<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class DetailsController extends Controller
{
    public function openDetails(Request $request, Product $product){
    	return view('detail', ['product' => $product]);
    }
}
