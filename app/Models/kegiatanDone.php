<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanDone extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_done';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='Id';

    protected $fillable = [
        'Id',
        'PengevaluasiId',
        'TglMulai',
        'TglSelesai',
        'BuktiTerlaksana'
    ];
}
