@extends('layout')
@section("contenido")
<h1 class="card">It works</h1>

<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Imagen</th>
    </tr>
    @foreach($productos as $producto)
        <tr >
            <td >{{ $producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            <td>{{$producto->imagen}}</td>
            <td>{{$producto->categoria->nombre}}</td> 
            <!-- Aqui hacemos referencia a la tabla categoria desde productos
                categoria es la función que añadimos al modelo producto para poder pedir los datos de categorias 
                (relacion entre las tablas)
            -->
        </tr>
    @endforeach
</table>
@endsection
