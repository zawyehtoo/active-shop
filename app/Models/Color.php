<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Order;

class Color extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->hasMany(Order::class,'color_id','id');
    }
}
