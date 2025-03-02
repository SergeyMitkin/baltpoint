<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BrandController extends Controller
{
    public function index(): View
    {
        $brands = Brand::all();
        return view('brands.index', ['brands' => $brands]);
    }
    public function create(): View
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'integer',
            'name' => 'required'
        ]);

        $brand = new Brand();
        // Проверка уникальности названия бренда
        $brand->checkExistingBrand($data['name'], $request->id);

        // Если приходит id, товар редактируется
        if($request->id) {
            Brand::edit($data);
        } else {
            Brand::create($data);
        }

        return redirect()->route('index');
    }

    public function edit(Brand $brand): View
    {
        return view('brands.edit', ['brand' => $brand]);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('index');
    }
}
