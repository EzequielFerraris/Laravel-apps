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
        Schema::create('requisito_tramite', function (Blueprint $table) {
            $table->primary(['requisito_id', 'tramite_id']);
            $table->unsignedBigInteger('requisito_id');
            $table->unsignedBigInteger('tramite_id');
            $table->timestamps();

            $table->foreign('requisito_id')->references('id')->on('requisitos');
            $table->foreign('tramite_id')->references('id')->on('tramites');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisito_tramite');
    }
};
