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
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'integer',
            'name' => 'required'
        ]);

        // Если приходит id, товар редактируется
        if($request->id) {
            Brand::edit($data);
        } else {
            Brand::create($data);
        }

        return redirect()->route('index');
    }
}
