<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PubgPlayer extends Model
{
    protected $fillable = [
        'pubg_team_id',
        'player_nickname',
        'player_npp',
    ];
}
