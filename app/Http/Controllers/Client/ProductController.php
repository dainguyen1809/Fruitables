<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('client.components.products.listProduct');
    }

    public function show() {
        return view('client.components.products.productDetail');
    }
}
