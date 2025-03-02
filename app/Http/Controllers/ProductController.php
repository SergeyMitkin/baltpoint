<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'integer',
            'name' => 'required',
            'description' => 'nullable',
            'quantity' => 'required|integer',
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
