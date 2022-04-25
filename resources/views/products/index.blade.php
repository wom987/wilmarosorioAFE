@extends('layouts.app')

@section('css')
@endsection

@section('content')
@section('buttons')
    <div class="container">
        <a type="button"
            href="{{ url('products/create') }}"
            class="btn btn-primary">Crear producto</a>
    </div>
@endsection
<h2 class="text-center mb-5">Administración de productos</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-danger text-light">
            <tr>
                <th scole="col">Codigo</th>
                <th scole="col">Nombre</th>
                <th scole="col">Precio</th>
                <th scole="col">Codigo de barra</th>
                <th scole="col">Proveedor</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $pr)
                <tr>
                    <td>{{ $pr->id }}</td>
                    <td>{{ $pr->product_name }}</td>
                    <td>${{ $pr->unit_price }}</td>
                    <td>{{ $pr->barcode }}</td>
                    <td>{{ $pr->supplier->supplier_name }}</td>
                    <td><a href="#"
                            class="btn btn-warning">Editar</a>
                        <a href=""
                            class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
@endsection
