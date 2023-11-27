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
    Schema::create('proveedor_tb', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('persona_id'); // Cambio en el nombre de la columna
        $table->foreign('persona_id')->references('id')->on('personas_tb')->onDelete('cascade');
        $table->string('nombre_empresa');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_tb');
    }
};
