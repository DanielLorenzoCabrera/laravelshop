<?php

namespace Database\Seeders;

use Faker\Generator as Faker; // importamos el componente faker para crear datos aleatorios
use Illuminate\Database\Seeder; // importamos el seeder para poder extender la clase
use Illuminate\Support\Facades\DB; // Importamos el componente DB para poder llamar a los métodos de inserción de datos a tablas
use Illuminate\Support\Str; // importamos el componente Str para poder crear strings aleatorios


class CategoriaSeeder extends Seeder
{
    private $categorias = ["alimentacion", "hogar", "electrónica","menaje","juegos"];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //

        for($i = 0; $i < count($this->categorias); $i++){
            DB::table('categorias')->insert([
                'nombre' => $this->categorias[$i]
            ]);


        }
    }
}
