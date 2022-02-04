<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InicioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::resource('/productos', ProductoController::class);
/*
Route::get('/', function(){
    $produtos = Producto::paginate(2);
    return view('index', compact('productos'));
});
*/

Route::get('/', [InicioController::class, 'index']);
//Route::post('/', [InicioController::class, 'buscar']);


