@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center mb-5">Crear Producto</h2>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{ url('/products') }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="product_name">Titulo Producto</label>
                        <input type="text"
                            class="form-control @error('product_name') is-invalid @enderror"
                            name="product_name"
                            id="product_name"
                            value="{{ old('product_name') }}"
                            placeholder="Nombre del producto">
                        @error('product_name')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="unit_price">Precio</label>
                        <input type="number"
                            class="form-control @error('unit_price') is-invalid @enderror"
                            name="unit_price"
                            id="unit_price"
                            value="{{ old('unit_price') }}"
                            placeholder="Precio del producto">
                        @error('unit_price')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="unit_price">Código de barra</label>
                        <input type="number"
                            class="form-control @error('barcode') is-invalid @enderror"
                            name="barcode"
                            id="barcode"
                            value="{{ old('barcode') }}"
                            placeholder="Precio del producto">
                        @error('barcode')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="unit_price">Proveedores</label>
                        <select name="supplier"
                            id="supplier"
                            class="form-control">
                            @foreach ($suppliers as $id => $supplier)
                                <option value="{{ $id }}">{{ $supplier }}</option>
                            @endforeach
                        </select>
                        @error('supplier')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="image">Selecciona una imagen para el producto</label>
                        <input type="file"
                            name="image"
                            accept="image/png, image/gif, image/jpeg"
                            class="form-control"
                            placeholder="Selecionar imagen"
                            id="image">
                        @error('image')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <input type="submit"
                            value="Guardar"
                            class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
