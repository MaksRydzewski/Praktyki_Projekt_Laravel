<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillabel=[
        'id',
        'odred_id',
        'dish_id',
        'cena'
    ];
}
