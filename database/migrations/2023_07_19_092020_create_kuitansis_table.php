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
        Schema::create('kuitansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->bigInteger('jumlah_uang');
            $table->string('tujuan_pembayaran');
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
        Schema::dropIfExists('kuitansis', function (Blueprint $table){
            $table->decimal('jumlah_uang', 10, 2)->change();
        });
    }
};
