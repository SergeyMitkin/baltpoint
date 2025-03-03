<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
//        $clothing_types = ['Футболка', 'Джинсы', 'Свитер', 'Куртка', 'Шорты', 'Кроссовки',
//            'Бейсболка', 'Рубашка', 'Платье', 'Брюки'];
//
//        dd($clothing_types[array_rand($clothing_types)]);
//        $brand_ids = Brand::all()->pluck('id')->toArray();
//
//        $price = mt_rand(100, 100000) + mt_rand(0, 99) / 100;
//
//        dd($price);


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
        $brands = Brand::all();

        return view('products.edit', ['product' => $product, 'brands' => $brands]);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('index');
    }
}
