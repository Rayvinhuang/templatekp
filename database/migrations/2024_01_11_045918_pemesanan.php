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
        Schema::create('pesanans', function (Blueprint $table) {
        $table->uuid('id');
            $table->primary('id');
            $table->uuid('pemesanan_id');
            $table->foreign('pemesanan_id')->references('id')->on('detail_pesanans')->
            restrictOnDelete()->restrictOnUpdate();
            $table->double('totalHarga');
            $table->uuid('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->
            restrictOnDelete()->restrictOnUpdate();
            $table->date('tgl');
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
