<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameplay extends Model
{
    use HasFactory;
    
    protected $fillable = ['player_id', 'game_id'];
}

