<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'lead_source',
        'lead_owner',
        'email',
        'phone',
        'country',
    ];
}
