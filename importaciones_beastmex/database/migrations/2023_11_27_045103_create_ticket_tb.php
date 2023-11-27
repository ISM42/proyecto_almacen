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
        Schema::create('ticket_tb', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('persona_id'); 
            $table->unsignedBigInteger('producto_id'); 
            $table->unsignedBigInteger('venta_id'); 
    
            $table->foreign('persona_id')->references('id')->on('personas_tb')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('producto_tb')->onDelete('cascade');
            $table->foreign('venta_id')->references('venta_id')->on('ventas_tb')->onDelete('cascade');
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_tb');
    }
};
