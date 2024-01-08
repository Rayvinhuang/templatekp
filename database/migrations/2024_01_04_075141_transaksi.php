<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{Schema::create('transsaksis', function (Blueprint $table){
        $table->uuid('idTransaksi', 8);
        $table->primary('idTransaksi', 8);
        $table->uuid('customer_id', 8);
        $table->foreign('customer_id')->references('idCustomer')->on('customers')->
        restrictOnDelete()->restrictOnUpdate();
        $table->date('tanggal');
        $table->uuid('makanan_id');
        $table->foreign('makanan_id')->references('idMakanan')->on('makanans')->
        restrictOnDelete()->restrictOnUpdate();
        $table->uuid('minuman_id');
        $table->foreign('minuman_id')->references('idMinuman')->on('minumen')->
        restrictOnDelete()->restrictOnUpdate();
        $table->double('totalHarga', 12);
        $table->timestamps();

    });    //
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
