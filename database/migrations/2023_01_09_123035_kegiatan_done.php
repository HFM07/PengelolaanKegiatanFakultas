<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    var $table='kegiatan_done';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('Id', 15);
            $table->foreign('KegiatanId', 15)->references('Id')->on('kegiatan');
            $table->foreign('PengevaluasiId', 15)->references('Username')->on('user');
            $table->dateTime('TglMulai');
            $table->dateTime('TglSelesai');
            $table->binary('BuktiTerlaksana');
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
        Schema::drop($this->table);
    }
};
