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
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', length:100);
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('sector_id');
            $table->text('descripcion');
            $table->string('pdf_asociado', length:200)->nullable();
            $table->softDeletes();

            $table->foreign('sector_id')->references('id')->on('sectores');
            $table->foreign('tipo_id')->references('id')->on('tipos');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
