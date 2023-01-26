<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    var $table='kegiatan';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->table , function (Blueprint $table) {
            $table->increments('Id');
            $table->unsignedInteger('PembuatId');
            $table->foreign('PembuatId')->references('id')->on('user');
            $table->string('NamaKegiatan', 50);
            $table->string('BidangKegiatan', 50);
            $table->date('TglMulai');
            $table->date('TglSelesai');
            $table->string('Status', 30);
            //
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop($this->table);
    }
};
