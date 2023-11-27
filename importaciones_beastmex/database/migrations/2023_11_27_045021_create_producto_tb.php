<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto_tb', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('proveedor_id'); 
            $table->foreign('proveedor_id')->references('id')->on('proveedor_tb')->onDelete('cascade');
            $table->string('nombre_producto');
            $table->string('num_serie');
            $table->string('marca');
            $table->unsignedInteger('cantidad'); // Cambio en el tipo de dato a número entero
            $table->float('costo_compra'); // Faltaba un punto y coma al final de la línea
            $table->date('fecha_ingreso'); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_tb');
    }
};
