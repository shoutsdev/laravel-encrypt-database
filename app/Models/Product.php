<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'detail'
    ];


    protected $hidden = [
        'name', 'code', 'detail'
    ];


    protected $casts = [
        'name' => 'encrypted',
        'code' => 'encrypted',
        'detail' => 'encrypted'
    ];

}
