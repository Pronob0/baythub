<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'user_id',
        'location',
        'city_id',
        'developer',
        'starting_price',
        'description',
        'property_type',
        'handover_date',
        'payment_plan',
        'building_name',
        'unit_count',
        'floor_count',
        'parking_space',
        'down_payment',
        'during_construction',
        'on_handover',
        'announcement_date',
        'construction_started',
        'booking_started',
        'expected_handover',
        'amenities',
        'bed_sizes',
        'bed_prices',
        'photo'
        
    ];

    public function city(){
        return $this->belongsTo(Country::class,'city_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function usercontacts()
    {
        return $this->hasMany(UserContact::class,'property_id','id')->where('is_service', 0);
    }
    
}
