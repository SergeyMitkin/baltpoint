<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index():\Illuminate\View\View
    {
        return view('products.index');
    }
}
