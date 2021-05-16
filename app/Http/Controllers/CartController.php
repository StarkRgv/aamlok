<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function fillCart(Request $request, Product $product)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $product->users()->attach($user_id);
        return redirect()->back();
    }

    public function unFillCart(Request $request, Product $product)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $product->users()->detach($user_id);
        return redirect()->back();
    }
}
