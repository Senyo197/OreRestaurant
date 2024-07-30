<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'is_discounted',
        'type',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
