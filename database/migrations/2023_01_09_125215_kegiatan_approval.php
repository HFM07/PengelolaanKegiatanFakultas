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
            $table->foreign('PengevaluasiId', 15)->references('Username')->on('user');
            $table->foreign('KegiatanId', 15)->references('Id')->on('kegiatan');
            $table->foreign('Status', 30)->references('Status')->on('kegiatan');
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
