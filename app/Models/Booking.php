<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'tour_id',
        'no_of_guest',
        'no_of_child',
        'total_amount',
        'date_from',
        'country',
        'status',
    ];

    public function tour()
    {
        return $this->hasOne(Tour::class, 'id', 'tour_id');
    }
}
