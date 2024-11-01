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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('valor');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('inventario')->nullable();
            $table->unsignedBigInteger('supports_id')->nullable();
            $table->foreign('supports_id')->references('id')->on('supports')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
