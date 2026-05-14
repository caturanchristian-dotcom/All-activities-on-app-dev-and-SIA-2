<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    protected $fillable = [
        'egg_type', 'farm_name', 'price_per_dozen',
        'stock_quantity', 'description'
    ];

    protected $casts = ['price_per_dozen' => 'decimal:2'];
}