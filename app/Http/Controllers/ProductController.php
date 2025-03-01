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
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|decimal:0,2',
            'quantity' => 'required|integer',
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('product.index');
    }

    public function edit(Product $product): View
    {
        return redirect()->route('product.index');
    }
}
