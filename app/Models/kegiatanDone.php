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
        'KegiatanId',
        'PengevaluasiId',
        'TglMulai',
        'TglSelesai',
        'BuktiTerlaksana'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'PengevaluasiId', 'Username', 'user');
    }

    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class, 'KegiatanId', 'Id', 'kegiatan');
    }
}
