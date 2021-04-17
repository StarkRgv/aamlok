<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Colors;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Gender;
use App\Models\ProductImages;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
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



    public function openAddProduct()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $subCategories = SubCategory::get();
        $genders = Gender::get();
        return view('seller.dashboard.add-product', ['subCategories' => $subCategories,
                                                     'categories' => $categories,
                                                     'genders' => $genders,
                                                     'brands' => $brands]);
    }

    public function storeProduct(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required',
        'brand_name' => 'required',
        'style_name' => 'required',
        'department' => 'required',
        'pattern' => 'required',
        'rise_style' => 'required',
        'fitting_type' => 'required',
        'origin_country' => 'required',
        'mrp' => 'required',
        'selling_price' => 'required',
        'order_quantity' => 'required',
        'pocket_count' => 'required',
        'unit_count' => 'required',
        'manufacturer' => 'required',
        'care_instructions' => 'required',
        'occasion_instructions' => 'required',
        'material_composition' => 'required',
        'item_length_desc' => 'required',
        'product_desc' => 'required',
        'key_feature' => 'required',
        ]);

        // if($validatedData->fails()) {
        //     return Redirect::back()->withErrors($validatedData);
        // }
        // else {

            if($request->file()) {
                $image = $request->primary_image;
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('uploads/primary', $imageName, 'public');
            }

            $data = new Product;
            $data->category_id = $request->category_id;
            $data->sub_category_id = $request->sub_category_id;
            $data->product_id = strtoupper('ghghjgjhhjh');
            $data->title = $request->title;
            $data->gender_id = $request->gender;
            $data->brand_name = $request->brand_name;
            $data->style_name = $request->style_name;
            $data->department = $request->department;
            $data->pattern = $request->pattern;
            $data->rise_style = $request->rise_style;
            $data->fitting_type = $request->fitting_type;
            $data->fabric_type = $request->fabric_type;
            $data->origin_country = $request->origin_country;
            $data->mrp = $request->mrp;
            $data->selling_price = $request->selling_price;
            $data->order_quantity = $request->order_quantity;
            $data->pocket_count = $request->pocket_count;
            $data->unit_count = $request->unit_count;
            $data->manufacturer = $request->manufacturer;
            $data->care_instructions = $request->care_instructions;
            $data->occasion_instructions = $request->occasion_instructions;
            $data->material_composition = $request->material_composition;
            $data->item_length_desc = $request->item_length_desc;
            $data->product_desc = $request->product_desc;
            $data->key_feature = $request->key_feature;
            $data->primary_image = $imagePath;
            $data->save();



            return redirect()->route('product.variation', ['product' => $data->id ]);
        // }

    }

    public function openEditProduct(Product $product)
    {
        $brands = Brand::get();
        $categories = Category::get();
        $subCategories = SubCategory::get();
        $genders = Gender::get();
        return view('seller.dashboard.edit-product', ['product' => $product,
                                                     'subCategories' => $subCategories,
                                                     'categories' => $categories,
                                                     'genders' => $genders,
                                                     'brands' => $brands]);
    }

    public function updateProduct(Request $request, Product $product)
    {
        // return $product;
        $validatedData = $request->validate([
            'title' => 'required',
            'brand_name' => 'required',
            'style_name' => 'required',
            'department' => 'required',
            'pattern' => 'required',
            'rise_style' => 'required',
            'fitting_type' => 'required',
            'origin_country' => 'required',
            'mrp' => 'required',
            'selling_price' => 'required',
            'order_quantity' => 'required',
            'pocket_count' => 'required',
            'unit_count' => 'required',
            'manufacturer' => 'required',
            'care_instructions' => 'required',
            'occasion_instructions' => 'required',
            'material_composition' => 'required',
            'item_length_desc' => 'required',
            'product_desc' => 'required',
            'key_feature' => 'required',
            ]);

        $data = Product::findOrFail($product->id);

        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->product_id = strtoupper('ghghjgjhhjh');
        $data->title = $request->title;
        $data->gender_id = $request->gender;
        $data->brand_name = $request->brand_name;
        $data->style_name = $request->style_name;
        $data->department = $request->department;
        $data->pattern = $request->pattern;
        $data->rise_style = $request->rise_style;
        $data->fitting_type = $request->fitting_type;
        $data->fabric_type = $request->fabric_type;
        $data->origin_country = $request->origin_country;
        $data->mrp = $request->mrp;
        $data->selling_price = $request->selling_price;
        $data->order_quantity = $request->order_quantity;
        $data->pocket_count = $request->pocket_count;
        $data->unit_count = $request->unit_count;
        $data->manufacturer = $request->manufacturer;
        $data->care_instructions = $request->care_instructions;
        $data->occasion_instructions = $request->occasion_instructions;
        $data->material_composition = $request->material_composition;
        $data->item_length_desc = $request->item_length_desc;
        $data->product_desc = $request->product_desc;
        $data->key_feature = $request->key_feature;
        // $data->primary_image = $imagePath;
        $data->save();

        return redirect()->back()->with('success', 'Product Updated Successfullly');
    }

    public function statusProduct(Request $request, Product $product)
    {
        $data = Product::findOrFail($product->id);

        if ($request->status == 1) {
            $data->status = 0;
            $data->save();
        }else{
            $data->status = 1;
            $data->save();
        }

        return redirect()->back()->with('success', 'Status Updated');
    }

    public function openActiveProductList(Request $request)
    {
        $products = Product::where('status', 1)->get();
        return view('seller.dashboard.product-list-active', ['products' => $products]);
    }

    public function openRetiredProductList(Request $request)
    {
        $products = Product::where('status', 0)->get();
        return view('seller.dashboard.product-list-retired', ['products' => $products]);
    }

    public function openProductDetails(Request $request, Product $product)
    {
        return view('seller.dashboard.product-details', ['product' => $product]);
    }

}
