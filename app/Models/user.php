<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'user';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='Id';

    protected $fillable = [
        'Id',
        'Username',
        'Password',
        'Email',
        'HakAkses'
    ];
}
