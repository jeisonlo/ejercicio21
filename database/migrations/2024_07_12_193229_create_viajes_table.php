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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('numplazas');
            $table->string('fecha');
            $table->string('otrosdatos');

            $table->unsignedBigInteger('viajero_id')->nullable();
            $table->foreign('viajero_id')
            ->references('id')->on('viajeros')
            ->onDelete('set null');


            $table->unsignedBigInteger('origen_id')->nullable();
            $table->foreign('origen_id')
            ->references('id')->on('origens')
            ->onDelete('set null');


            $table->unsignedBigInteger('destino_id')->nullable();
            $table->foreign('destino_id')
            ->references('id')->on('destinos')
            ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
