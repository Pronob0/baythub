<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'city_id',
        'budget',
        'photo',
        'town_id',
        'postcode',
        'start_date',
        'is_featured',
        'feature_date',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function usercontacts()
    {
        // if is_service == 1 then it is a service
        return $this->hasMany(UserContact::class,'property_id')->where('is_service', 1);
        
    }

    public function city()
    {
        return $this->belongsTo(Country::class);
    }

    public function town()
    {
        return $this->belongsTo(State::class);
    }



    
}
