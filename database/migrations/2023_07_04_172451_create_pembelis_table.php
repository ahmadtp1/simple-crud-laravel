<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
   
 
     public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->id();
            $table->string('idpembeli');
            $table->string('nama');
            $table->string('harga');
            $table->string('produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembeli');
    }
};
