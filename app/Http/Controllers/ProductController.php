<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name'  => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'quantity'      => 'required|integer|min:1',
        ]);

        Product::create([
            'product_name' => $request-> product_name,
            'product_price' => $request-> product_price,
            'quantity' => $request-> quantity,

        ]);

        return redirect('/product')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact ('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
        
    }

    //dependency injection
    //middleware in route auth
    //create middleware separately as well


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'product_name'  => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'quantity'      => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'product_name' => $request-> product_name,
            'product_price' => $request-> product_price,
            'quantity' => $request-> quantity,

        ]);

        return redirect('/product')->with('success', 'Product added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //dd($id);
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/product')->with('success', 'Product deleted successfully.');


    }
}
