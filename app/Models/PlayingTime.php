<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayingTime extends Model
{
    use HasFactory;
    

    public function users()
    {
        return $this->belongsToMany(User::class,'user_playing','playing_id','user_id');
    }
}
