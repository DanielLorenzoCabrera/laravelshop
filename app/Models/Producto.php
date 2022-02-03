<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'sku', 'precio','stock', 'imagen', 'categoria_id'];
    //protected $table = "nombre de la tabla en sql"; Por si tiene un nombre diferente en sql la buscará por este nombre

    public function categoria(){
        return $this->belongsTo(Categoria::class); // esto nos permite llamar a la tabla categoria desde productos
    }


}
