<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'user';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey='Username';

    protected $fillable = [
        'Username',
        'Password',
        'Email',
        'HakAkses'
    ];
}
