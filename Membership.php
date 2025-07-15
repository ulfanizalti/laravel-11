<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    //
    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'password',
        'member'
    ];
}
