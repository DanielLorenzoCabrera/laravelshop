<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'sku' => $faker->unique()->paragraph(),
                "nombre" => $faker->title(),
                'precio' => $faker->randomFloat(),
                'image' => Str::random(60),
                "stock" => $faker->randomNumber(),

            ]);
        }

    }
}
        
            $table->unsignedBigInteger("categoria_id");
            $table->timestamps();

            $table->foreign('categoria_id')->references("id")->on("categorias")->ondDelete("set null");