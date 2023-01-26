<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product', [
            'products' => $products
        ]);
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
        } else {
            $image_path = 'images/no-image.jpeg';
        }
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'rating' => $request->rating,
            'image' => $image_path
        ]);
        return redirect('product')->with('success', 'Successfully added product!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->file('image') != null) {
            $image_path = "storage/" . $request->file('image')->store('images', 'public');
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'rating' => $request->rating,
                'image' => $image_path
            ];
        } else {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'rating' => $request->rating,
            ];
        }

        Product::find($product->id)->update($data);
        return redirect('product')->with('success', 'Successfully changed product!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('product')->with('success', 'Successfully deleted product!');
    }
}
