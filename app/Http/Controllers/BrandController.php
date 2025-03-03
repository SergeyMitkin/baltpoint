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

        // Если приходит id, товар редактируется
        if($request->id) {
            // Проверка уникальности названия бренда
            $existing_brand = Brand::where('name', $data['name'])
                ->where('id', '!=', $data['id'])
                ->first();

            if ($existing_brand) {
                $this->edit($existing_brand);
                return redirect()->route('brand.edit', [
                    'brand' => $data['id']
                ])->with('existing_brand_name', $data['name']);
            } else {
                Brand::edit($data);
            }
        } else {
            // Проверка уникальности названия бренда
            $existing_brand = Brand::where('name', $data['name'])->first();

            if ($existing_brand) {
                return redirect()->route('brand.create')
                    ->with('existing_brand_name', $data['name']);
            }

            Brand::create($data);
        }

        return redirect()->route('brand.index');
    }

    public function edit(Brand $brand): View
    {
        return view('brands.edit', ['brand' => $brand]);
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brand.index');
    }
}
