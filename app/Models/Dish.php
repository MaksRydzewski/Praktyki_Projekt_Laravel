<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property float $price
 */
class Dish extends Model
{
    use HasFactory;

    protected $table = 'dishes';
    protected $fillable = [
        'id',
        'type',
        'name',
        'description',
        'price'
    ];

    public $timestamps=false;
}
