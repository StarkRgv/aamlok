<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function createOrder(Request $request)
    {
        $data = new Order;
        $data->user_id = Auth::User()->id;
        $data->product_id = $request->product_id;
        $data->color_id = $request->color_id;
        $data->size_id = $request->size_id;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->route('home')->with('success','Order Placed Successfully');
    }
}
