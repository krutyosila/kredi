<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'identify',
        'name',
        'birthday',
        'phone',
        'kkb',
        'status',
        'detail'
    ];
    protected $casts = [
        'birthday' => 'date'
    ];
}
