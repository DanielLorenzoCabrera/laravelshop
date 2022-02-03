<?php

namespace Database\Seeders;

use Faker\Generator as Faker; // importamos el componente faker para crear datos aleatorios
use Illuminate\Database\Seeder; // importamos el seeder para poder extender la clase
use Illuminate\Support\Facades\DB; // Importamos el componente DB para poder llamar a los métodos de inserción de datos a tablas
use Illuminate\Support\Str; // importamos el componente Str para poder crear strings aleatorios


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

        //
        for($i = 0; $i < 10; $i++){
            DB::table('productos')->insert([
                'sku' => $faker->unique()->numberBetween(1,1000),
                "nombre" => $faker->title(),
                'precio' => $faker->randomFloat(2,1,2000),
                'imagen' => Str::random(60),
                "stock" => $faker->randomNumber(),
                "categoria_id" => $faker->randomElement([1,2,3,4,5])
                // fake.random_choices(elements=('a', 'b', 'c', 'd'))
            ]);
        }

    }
}
        
