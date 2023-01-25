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
        'BidangKegiatan',
        'TglMulai',
        'TglSelesai',
        'Status'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'PembuatId', 'id', 'user');
    }
}
