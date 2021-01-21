<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'emmail',
        'password'
    ];

    public function gameplays(){
        return $this->hasMany(Gameplay::class);
    }
}
