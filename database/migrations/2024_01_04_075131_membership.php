<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{Schema::create('memberships', function (Blueprint $table){
        $table->uuid('id');
        $table->primary('id');
        $table->string('jenisMembership', 20);
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
