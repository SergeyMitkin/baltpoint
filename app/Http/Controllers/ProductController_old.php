<?php

namespace App\Http\Controllers;

use Couchbase\View;
use Illuminate\Http\Request;

class ProductControllerOld extends Controller
{
    public function index():\Illuminate\View\View {
        $title = 'Products';
        $h1 = 'Products';

        return view('products.index', compact('title', 'h1'));
    }

    public function create() {
        return 'product create';
    }

    public function store() {
        return 'product store';
    }

    public function show($product) {
        $title = $product;
        $h1 = $product;

//        dump($product);

        return view('products.show', compact('title', 'h1'));
//        return "product show: {$product}";
    }

    public function edit($product) {
        return "product edit: {$product}";
    }
}
