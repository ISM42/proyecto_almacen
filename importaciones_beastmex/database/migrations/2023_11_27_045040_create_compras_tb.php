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
        Schema::create('compras_tb', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('proveedor_id'); 
            $table->unsignedBigInteger('producto_id'); 
            $table->unsignedInteger('cantidad'); // Cantidad de productos comprados
    
            $table->foreign('proveedor_id')->references('id')->on('proveedor_tb')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('producto_tb')->onDelete('cascade');
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras_tb');
    }
};
