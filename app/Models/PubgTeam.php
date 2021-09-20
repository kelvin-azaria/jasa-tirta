<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PubgTeam extends Model
{
    protected $fillable = [
        'team_number',
        'team_name',
        'team_captain_name',
        'team_captain_phone',
        'group',
    ];

    public function pubgPlayers()
    {
        return $this->hasMany(PubgPlayer::class);
    }
}
