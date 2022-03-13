<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = [
            "prod1", "prod2", "prod3", "prod4", "prod5"
        ];
        $proveedores = [
            "a",
            "b", "c", "d"
        ];
        return view('products.index', compact('products', 'proveedores'));
        //return ('controller message');
    }
}
