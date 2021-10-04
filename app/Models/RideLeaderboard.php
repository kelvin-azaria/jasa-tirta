<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RideLeaderboard extends Model
{
    protected $fillable = [
        'position',
        'participant_name',
        'participant_gender',
        'activity_date',
        'activity_length',
        'activity_duration',
        'strava_activity_url_1',
        'strava_activity_url_2',
    ];
}
