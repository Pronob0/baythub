<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    // timestamp
    protected $fillable = ['email'];
    public $timestamps = false;
}
