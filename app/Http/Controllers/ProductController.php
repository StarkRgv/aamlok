<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
        $categories = Category::get();
        $subCategories = SubCategory::get();
        $genders = Gender::get();
        return view('seller.product.add-product', ['subCategories' => $subCategories, 'categories' => $categories, 'genders' => $genders]);
    }

    public function storeProduct(Request $request)
    {
        // return $request;
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
        'in_stock' => 'required',
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

        if($request->file()) {
            $image = $request->primary_image;   
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('primary', $imageName, 'public');
        }

        $data = new Product;
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->product_id = strtoupper('ghghjgjhhjh');
        $data->title = $request->title;
        $data->gender = $request->gender;
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
        $data->in_stock = $request->in_stock;
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

        $sizes = $request->size;    
        $colors = $request->colors;
        $quantities = $request->quantity;

        for($i = 0 ; $i < count($sizes) ; $i++)
         {
           $size = $sizes[$i];
           $color = $colors[$i];
           $quantity = $quantities[$i];

            $datas = new ProductVariation;
            // return $data->id;
            $datas->category_id = $request->category_id;
            $datas->sub_category_id = $request->sub_category_id;
            $datas->product_id = $data->id;
            $datas->size = $size;
            $datas->color = $color;
            $datas->quantity = $quantity;
            $datas->save();
        }


        if($request->file()) {
            $files = $request->file();
            $files = collect($files['file']);

            foreach ($files as $key => $file) {
               
                $fileName = $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');;
                $fileModel = new ProductImages;
                $fileModel->product_id = $data->id;
                $fileModel->name = $fileName;
                $fileModel->file_path = $filePath;
                $fileModel->save();
            }

            
        }
        return redirect()->back();

    }

    public function openProductList(Request $request)
    {   
        $products = Product::get();
        return view('seller.product.product-list', ['products' => $products]);
    }

    public function openProductDetails(Request $request, Product $product)
    {   
    
        return view('seller.product.product-details', ['product' => $product]);
    }
}
