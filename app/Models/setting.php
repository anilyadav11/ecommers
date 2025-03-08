<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'email',
        'favicon',
        'footerlogo',
        'logo',
        'description',
        'title',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'linkedin'
    ];
}
