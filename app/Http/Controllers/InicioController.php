<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

use Illuminate\Http\Request;

class InicioController extends Controller{
    
    public function index(){
        $productos =  Producto::paginate(5); // El paginador es un método del modelo
        return view('producto.index', compact('productos'));
    }


    public function buscar(Request $busquedaUsuario){ // para las búsquedas de los usuarios
        return $busquedaUsuario;
    }
}
