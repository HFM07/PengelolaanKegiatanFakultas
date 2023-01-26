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
            $table->increments('Id');
            $table->unsignedInteger('KegiatanId');
            $table->unsignedInteger('PengevaluasiId');
            $table->foreign('KegiatanId')->references('Id')->on('kegiatan');
            $table->foreign('PengevaluasiId')->references('id')->on('user');
            $table->date('TglMulai');
            $table->date('TglSelesai');
            $table->string('BuktiTerlaksana', 255);
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
