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
            $table->string('nombre')->require();
            $table->string('slug')->nullable();
            $table->string('descripcion')->require();
            $table->double('precio')->require();
            $table->integer('cantidad')->require();
            $table->integer('minimo')->require();
            $table->integer('patern_id')->nullable();
            $table->foreignId('categoria_id')->require()->index();
            $table->boolean('estatus')->require();
            $table->integer('visto')->nullable();
            $table->integer('vendido')->nullable();
            $table->timestamps();
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
