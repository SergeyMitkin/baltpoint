<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products= Product::with('brand')->get();

        return view('index', ['products' => $products]);
    }

    public function create(): View
    {
        $brands = Brand::all();

        return view('products.create', ['brands' => $brands]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'integer',
            'name' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|integer',
            'brand_id' => 'required|integer',
            'price' => 'required|decimal:0,2'
        ]);

        // Если приходит id, товар редактируется
        if($request->id) {
            Product::edit($data);
        } else {
            Product::create($data);
        }

        return redirect()->route('index');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', ['product' => $product]);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('index');
    }
}
