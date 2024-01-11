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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('makanan_id');
            $table->foreign('makanan_id')->references('id')->on('makanans')->
            restrictOnDelete()->restrictOnUpdate();
            $table->uuid('minuman_id');
            $table->foreign('minuman_id')->references('id')->on('minumen')->
            restrictOnDelete()->restrictOnUpdate();
            $table->string('jumlah');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
