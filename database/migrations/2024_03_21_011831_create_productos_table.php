<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->integer('price');
            $table->boolean('destacado');
            $table->foreignId('id_categoria')->references('id')->on('categorias');
            $table->foreignId('id_marca')->references('id')->on('marcas');
            $table->string('description');
            $table->timestamps();
        });

        DB::table('productos')->insert([
            ['name' => 'Iphone 13', 'price' => 810, 'destacado' => true, 'id_categoria' => 3, 'id_marca' => 11, 'description' => 'Iphone 13 Pro Max 1TB.'],
            ['name' => 'MonitorTv', 'price' => 210, 'destacado' => false, 'id_categoria' => 5, 'id_marca' => 3, 'description' => 'MonitorTv Lg 18pulgadas.']
        ]);
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
};
