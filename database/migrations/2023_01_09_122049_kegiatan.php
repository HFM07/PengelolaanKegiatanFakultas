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
            $table->foreign('PembuatId')->references('Username')->on('User');
            $table->string('NamaKegiatan');
            $table->dateTime('TglMulai');
            $table->dateTime('TglSelesai');
            $table->string('Status');
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
