<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products=[
            "prod1","prod2","prod3","prod4","prod5"
        ];
        return view('products.index')->with('products',$products);
        //return ('controller message');
    }
}
