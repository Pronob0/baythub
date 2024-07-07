<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'star_rating','review','owner_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}



// user relation 


