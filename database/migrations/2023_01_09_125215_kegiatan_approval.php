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
            $table->increments('Id', 15);
            $table->unsignedInteger('PengevaluasiId');
            $table->unsignedInteger('KegiatanId');
            $table->string('Status', 30)->unique();
            $table->foreign('PengevaluasiId')->references('id')->on('user');
            $table->foreign('KegiatanId')->references('Id')->on('kegiatan');
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
