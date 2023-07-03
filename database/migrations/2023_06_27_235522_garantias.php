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
        Schema::create('garantias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 15)->unique();
            $table->string('producto_servicio', 40);
            $table->string('vehiculo', 30);
            $table->string('telefono', 11);
            $table->date('fecha_vencimiento');
            $table->string('estado_garantia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
