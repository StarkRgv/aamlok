<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductUser;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class DashboardController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category_count = Category::count();
        $subCategory_count = SubCategory::count();
        $product_count = Product::count();
        $user_count = User::count();
        $user = Auth::User();
        $cart_count = $user->products()->count();
        $wish_count = Wishlist::where('user_id', $user->id)->count();
        return view('seller.dashboard', ['category_count' => $category_count,
          'subCategory_count' => $subCategory_count,
          'product_count' => $product_count,
          'user_count' => $user_count,
          'cart_count' => $cart_count,
          'wish_count' => $wish_count
          ]);
    }
}
