<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total_price', 'status', 'address', 'payment_method'];  

    public function items()
    {
        return $this->hasMany(order_item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function newcount()
    {
        return self::where('status', 'pending')->count();
    }

    public static function allcount()
    {
        return self::count();
    }
}
