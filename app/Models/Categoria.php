<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{

    protected $fillable = ['nombre']; // necesario indicar esto porque no nos dejará introducir datos en las tablas por seguridad

    use HasFactory;
    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
