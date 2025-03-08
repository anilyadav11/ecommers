<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_id', 'category_id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function category()
    {
        return $this->belongsTo(categorie::class);
    }
}
