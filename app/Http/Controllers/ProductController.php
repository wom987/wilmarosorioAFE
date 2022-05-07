<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // get products created based on the user id and get the supplier name as well
        $products = Product::where('user_id', auth()->user()->id)->with('supplier')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all()->pluck('supplier_name', 'id');
        return view('products.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'product_name' => 'required|min:5|max:50',
            'unit_price' => 'required',
            'barcode' => 'required|min:5|max:8',
            'supplier' => 'required',
            'image' => 'required|image',
        ]);
        $image_uri = $request['image']->store('products_pics', 'public');
        $img = Image::make(public_path("storage/{$image_uri}"))->fit(1000, 500);
        $img->save();
        //*commented to save product using relationship
        //$product = new Product();
        //$product->product_name = $data["product_name"];
        //$product->unit_price = $data["unit_price"];
        //$product->barcode = $data["barcode"];
        //$product->supplier_id = $data["supplier"];
        //$product->user_id = Auth::user()->id;
        //$product->image = $image_uri;
        $product = auth()->user()->products()->create([
            "product_name" => $data["product_name"],
            "unit_price" => $data["unit_price"],
            "barcode" => $data["barcode"],
            "supplier_id" => $data["supplier"],
            "image" => $image_uri,
        ]);
        if ($product) {
            return redirect()->action([ProductController::class, 'index']);
        } else {
            dd($product);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
