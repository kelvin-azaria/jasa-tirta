<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'user_id',
        'strava_activity_id',
        'activity_name',
        'activity_type',
        'activity_date',
        'activity_length',
        'activity_duration',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
