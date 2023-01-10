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
            $table->increments('Id', 15);
            $table->foreign('PembuatId')->references('Username')->on('User');
            $table->string('NamaKegiatan', 50);
            $table->dateTime('TglMulai');
            $table->dateTime('TglSelesai');
            $table->string('Status', 30)->startingValue('Belum disetujui');
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
