<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void{Schema::create('minumen', function (Blueprint $table){
        $table->uuid('idMinuman');
        $table->primary('idMinuman',6);
        $table->string('namaMinuman', 50);
        $table->double('harga', 10);
        $table->uuid('jenis_id');
        $table->foreign('jenis_id')->references('idJenis')->on('jenis_menus')->
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
