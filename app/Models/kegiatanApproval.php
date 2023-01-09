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
}
