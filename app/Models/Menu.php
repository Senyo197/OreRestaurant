<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'is_discounted',
        'type',
    ];

    /**
     * Get the orders for the menu.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
