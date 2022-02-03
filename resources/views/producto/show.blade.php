@extends('layouts.layout')
<!--
<div class="container-fluid">
    <p>Id: {{$producto->id}}</p>
    <p>Nombre: {{$producto->nombre}} </p>
    <p>Precio: {{$producto->precio}} </p>
    <img src="{{$producto->imagen}}" alt="">
    <p>Stock {{$producto->stock}}</p>
    <p>Categoria {{$producto->categoria->nombre}}</p>
</div>
-->

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$producto->imagen}}" alt="imagen producto">
  <div class="card-body">
    <h5 class="card-title">Nombre: {{$producto->nombre}}</h5>
    <p class="card-text">Precio: {{$producto->precio}}€</p>
    <p class="card-text">Stock: {{$producto->stock}} /uds</p>
    <p class="card-text">Categoria: {{$producto->categoria->nombre}}</p>
    <a href="{{route('productos.index')}}" class="btn btn-primary">Volver a productos</a>
  </div>
</div>



