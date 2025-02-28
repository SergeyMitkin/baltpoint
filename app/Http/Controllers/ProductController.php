<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return 'products list';
    }

    public function create() {
        return 'product create';
    }

    public function store() {
        return 'product store';
    }

    public function show($product) {
        return "product show: {$product}";
    }

    public function edit($product) {
        return "product edit: {$product}";
    }
}
