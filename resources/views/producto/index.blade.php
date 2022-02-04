@extends('layouts.layout')
@section("contenido")
<h1 class="text-white">Productos</h1>

<form action="{{ url('/')}}" method="POST">
    @csrf
    <input type="text" class="form-control" placeholder="buscar" name="texto">
    <button type="submit">Buscar</button>

</form>

<table class="table table-dark">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Imagen</th>
        <th>Categoria</th>
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
            <td>
                <a href="{{ route('productos.show',$producto->id) }}" class="btn btn-info">Ver producto</a>
                <a href="{{ route('productos.edit',$producto->id) }}" class="btn btn-light">Edit</a>
                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>

    @endforeach
</table>
{{$productos->links()}}
@endsection
