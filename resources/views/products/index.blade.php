<h1>Productos</h1>

@foreach ($products as $p)
    <ul>{{ $p }}</ul>
@endforeach
<h1>Proveedores</h1>

@foreach ($proveedores as $pr)
    <ul>{{ $pr }}</ul>
@endforeach
