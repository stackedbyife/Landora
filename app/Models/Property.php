<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    protected $fillable = [
        'user_id',
        'title',
        'address',
        'description',
        'price',
        'status',
        'type',
        'area',
        'beds',
        'baths',
        'image',
    ];

}
