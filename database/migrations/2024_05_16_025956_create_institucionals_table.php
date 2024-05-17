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
        Schema::create('institucionals', function (Blueprint $table) {
            $table->id();
            $table->string('numero_arma');
            $table->integer('sigla_vehiculo');
            $table->integer('chaleco_balistico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institucionals');
    }
};
