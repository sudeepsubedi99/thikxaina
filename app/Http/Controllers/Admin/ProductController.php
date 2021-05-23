<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\MediaService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::Paginate(30);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'price' => ['required', 'numeric', 'gt:0'],
            'description' => ['nullable'],
            'product_image' => ['nullable', 'image', 'mimes:png,jpg,gif']
        ]);
        
        $product = Product::create($request->only('name', 'price', 'description')); 
        if($request->hasFile('product_image')){
            $media_id = MediaService::upload($request->file('product_image'), "products");
            $product->media()->attach($media_id);
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => ['required'],
            'price' => ['required', 'numeric', 'gt:0'],
            'description' => ['nullable'],
        ]);

        $product->update($data); 

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')
        ->with('success', 'Product deleted successfully!');
    }

    public function images(Product $product)
    {
        return view('admin.products.image', compact('product'));
    }

    public function uploadImages(Request $request, Product $product)
    {
 
        //validate
        $request->validate([
            'product_image' => ['required', 'image' ,'mimes:png,jpg,gif'],
        ]);

        //upload
        $media_id = MediaService::upload($request->file('product_image'), "images");

        $product->media()->attach($media_id);


        return redirect()->route('admin.products.show', $product)
            ->with('success', 'Product Image Uoloaded Successfully!');
    }

    public function removeImage(Product $product, Media $media)
    {
        $product->media()->detach($media->id);

        Storage::delete('public/' . $media->path);
        $media->delete();
        return redirect('admin.products.show', $product)
            ->with('success', 'Image Deleted Successfully!');
    }
}
