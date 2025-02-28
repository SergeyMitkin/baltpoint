<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return 'products list';
    }

    public function create() {
        return 'products create';
    }

    public function store() {
        return 'products store';
    }
}
