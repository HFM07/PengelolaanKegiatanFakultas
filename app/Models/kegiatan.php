<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='Id';

    protected $fillable=[
        'Id',
        'PembuatId',
        'NamaKegiatan',
        'TglMulai',
        'TglSelesai',
        'Status'
    ];
}
