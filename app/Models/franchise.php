<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class franchise extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'franchise_id', 'postal_code', 'country', 'state', 'city', 'address', 'phone'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
