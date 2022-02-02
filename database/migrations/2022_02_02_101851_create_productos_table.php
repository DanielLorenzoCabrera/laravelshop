<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("sku", 30)->unique();
            $table->string("nombre", 30);
            $table->float("precio");
            $table->string("imagen", 60);
            $table->integer("stock")->default(0);
            $table->unsignedBigInteger("categoria_id");
            $table->timestamps();

            $table->foreign('categoria_id')->references("id")->on("categorias")->ondDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
