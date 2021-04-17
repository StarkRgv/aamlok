<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductVariation;
use App\Models\ProductVariationImages;
use Illuminate\Support\Facades\Validator;

class ProductImageController extends Controller
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

    public function openProductImage(Request $request, Product $product)
    {
        $images = ProductImages::where('product_id', $product->id)->get();
        $uniqueColors = ProductVariation::where('product_id', $product->id)->where('status', 1)->distinct()->get(['color']);
        $variationImages = ProductVariationImages::where('product_id', $product->id)->get();
        // return $uniqueColors;
        return view('seller.dashboard.add-product-images', ['product' => $product,
                                                            'images' => $images,
                                                            'uniqueColors' => $uniqueColors,
                                                            'variationImages' => $variationImages
                                                            ]);
    }

    public function storeImages(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'file' => 'required',
            ]);

        if($request->file()) {
                $files = $request->file();
                $files = collect($files['file']);

                foreach ($files as $key => $file) {

                    $fileName = $file->getClientOriginalName();
                    $filePath = $file->storeAs('uploads/gallery', $fileName, 'public');;
                    $fileModel = new ProductImages;
                    $fileModel->product_id = $product->id;
                    $fileModel->name = $fileName;
                    $fileModel->file_path = $filePath;
                    $fileModel->save();
                }
            }
            return redirect()->back()->with('success', 'Image Added Successfullly');
    }

    public function destroyImage(ProductImages $image)
    {
        $image->delete();
        return redirect()->back()->with('success', 'Image Deleted Successfullly');
    }

    public function storeVariationImages(Request $request, Product $product)
    {
        // return $request;
        if ($request->hasFile('image')) {

            $files = $request->file();
            $color_id = $request->color_id;
            $files = collect($files['image']);

            foreach ($files as $key => $file) {
                foreach ($color_id as $subKey => $id) {
                    if ($key == $subKey) {
                        $fileName = $file->getClientOriginalName();
                        $filePath = $file->storeAs('uploads/variation', $fileName, 'public');

                        $fileModel = ProductVariationImages::updateOrCreate(
                        [
                            'product_id' => $product->id,
                            'color_id' => $id,
                        ],
                        [
                            'file_name' => $fileName,
                            'file_path' => $filePath,

                        ]);
                    }
                }
            }
            return redirect()->back()->with('success', 'Image Added Successfullly');
        }
        return redirect()->back()->with('success', 'No Image to add');
    }
}
