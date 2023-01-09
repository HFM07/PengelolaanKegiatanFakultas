<?php

use App\Models\kegiatan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    var $table = 'kegiatan_approval';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('Id');
            $table->foreign('PengevaluasiId')->references('Username')->on('user');
            $table->foreign('KegiatanId')->references('Id')->on('kegiatan');
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
        //
    }
};
