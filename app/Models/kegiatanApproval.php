<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanApproval extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_approval';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='Id';

    protected $fillable = [
        'Id',
        'PengevaluasiId',
        'KegiatanId',
        'Status'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class, 'KegiatanId', 'Id', 'kegiatan');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'PengevaluasiId', 'id', 'user');
    }
}
