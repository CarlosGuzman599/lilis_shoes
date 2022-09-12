<?php

use Carbon\Carbon;
use App\Models\Marca;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marcas')->references('id')->on('marcas');
            $table->foreignId('proveedors')->references('id')->on('proveedors');
            $table->string('color');
            $table->string('acabado');
            $table->string('nombre');
            $table->string('corrida_min');
            $table->string('corrida_max');
            $table->string('costo');
            $table->string('precio_mayoreo');
            $table->string('precio_menudeo');
            $table->string('talla');
            $table->string('numero');
            $table->string('codigo');
            $table->string('codigo_barras');
            $table->string('codigo_barras_fabricante');
            $table->string('codigo_talla');
            $table->string('imgs');
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
        Schema::dropIfExists('articulos');
    }
};
