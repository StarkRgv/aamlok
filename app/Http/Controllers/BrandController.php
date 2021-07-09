<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Gender;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();
        $genders = Gender::get();
        return view('seller.dashboard.add-brand', ['brands' => $brands, 'genders' => $genders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'brand' => 'required|max:255',
            'brand_image' => 'required',
            ]);

            if($request->file()) {
                $image = $request->brand_image;
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->store('/brand', 'public');
            }

            $data = new Brand;
            $data->brand = $request->brand;
            $data->gender_id = $request->gender;
            $data->brand_image = $imagePath;
            $data->save();

            return redirect()->back()->with('success', 'Brand Added Successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'brand' => 'required|max:255',
            ]);

        if($request->file()) {
                $image = $request->brand_image;
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->store('brand', 'public');
            }

        $data = Brand::findOrFail($brand->id);

        $data->brand = $request->brand;
        $data->gender_id = $request->gender;
        if($request->file()) {
            $data->brand_image = $imagePath;
        }
        $data->save();

        return redirect()->back()->with('success', 'Brand Updated Successfullly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back()->with('success', 'Brand Deleted Successfullly');
    }
}
