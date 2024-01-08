<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{Schema::create('customers', function (Blueprint $table){
        $table->uuid('idCustomer');
        $table->primary('idCustomer', 8);
        $table->string('namaCustomer', 30);
        $table->string('alamat', 50);
        $table->uuid('membership_id');
        $table->foreign('membership_id')->references('idMembership')->on('memberships')->
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
