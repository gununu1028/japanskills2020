<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $dates = ['opening_time', 'closing_time'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
