<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(10)
        ]);
    }

    public function create()
    {
        $providers = Provider::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('products.create', compact('providers','categories'));
    }

    public function store(Request $request)
    {
        $data =$request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
            'provider_id' => 'required|integer',
        ]);

        Product::create($data);

        return back()->with('message', 'Product created.');
    }

    public function edit(Product $product)
    {

        $providers = Provider::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('products.edit', compact('product', 'providers', 'categories'));
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' => 'required|integer',
            'provider_id' => 'required|integer',
        ]);

        $product->update($data);

        return back()->with('message', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('message', 'Product deleted.');
    }
}
