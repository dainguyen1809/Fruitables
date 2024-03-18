<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('client.components.carts.index');
    }

    public function checkout() {
        return view('client.components.carts.checkout');
    }
}
