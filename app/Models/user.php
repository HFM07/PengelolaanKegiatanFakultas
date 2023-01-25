<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'user';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='id';

    protected $fillable = [
        'id',
        'username',
        'password',
        'email',
        'hakAkses'
    ];
}
