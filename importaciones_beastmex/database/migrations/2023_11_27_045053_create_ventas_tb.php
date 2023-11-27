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
    Schema::create('ventas_tb', function (Blueprint $table) {
        $table->bigIncrements('venta_id'); 
        $table->unsignedBigInteger('producto_id'); 
        $table->unsignedInteger('cantidad');
        $table->float('precio_venta');
        
        $table->foreign('producto_id')->references('id')->on('producto_tb')->onDelete('cascade');
        
        $table->date('fecha');
        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_tb');
    }
};
