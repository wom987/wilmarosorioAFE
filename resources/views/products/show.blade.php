@extends('layouts.app')



@section('css')
@endsection

@section('buttons')
    <div class="container">
        <a class="btn btn-primary"
            href="{{ url('/products') }}">Regresar</a>
    </div>
@endsection

@section('content')
    <div class="container m-5 text-center">

        <h1 class="text-center mb-4">{{ $product->productName }}</h1>

        <div class="product-meta">

            <p>

                <span class="font-weight-bold text-primary">Proveedor</span>

                {{ $product->supplier->supplier_name }}

            </p>

            <p>

                <span class="font-weight-bold text-primary">Autor</span>

                {{ $product->user->name }}

            </p>

            <p>

                <span class="font-weight-bold text-primary">Precio</span>

                {{ $product->unit_price }}

            </p>

            <p>

                <span class="font-weight-bold text-primary">Código de barra</span>

                {{ $product->barcode }}

            </p>

        </div>
    </div>
@endsection



@section('js')
@endsection
