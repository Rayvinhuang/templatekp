<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{Schema::create('jenis_menus', function (Blueprint $table){
        $table->uuid('idJenis');
        $table->primary('idJenis', 4);
        $table->string('namaJenis',30);
        $table->timestamps();
    });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};