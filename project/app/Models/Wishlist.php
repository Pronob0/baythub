<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    // timestamps false 
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'advert_id',
        'is_job',

    ];

    public function advert(){
        return $this->belongsTo(Advertisement::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }




   
}
