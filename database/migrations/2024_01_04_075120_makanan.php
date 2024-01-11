<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{Schema::create('makanans', function (Blueprint $table){
        $table->uuid('id');
        $table->primary('id');
        $table->string('namaMakanan', 50);
        $table->double('harga', 10);
        $table->uuid('jenis_id');
        $table->foreign('jenis_id')->references('id')->on('jenis_menus')->
        restrictOnDelete()->restrictOnUpdate();
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
