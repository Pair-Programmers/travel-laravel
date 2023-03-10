<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary',
        'description',
        'image',
        'price',
        'duration',
        'status',
        'last_booking_date',
    ];
}
