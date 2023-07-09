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

    protected $appends = [
        'formattedActivityDuration',
        'formattedActivityLength',
        'formattedActivityAverageSpeed'
    ];

    public function getFormattedActivityDurationAttribute()
    {
        if (empty($this->activity_duration)) {
            return 'n/a';
        }

        return gmdate("H:i:s", $this->activity_duration);
    }

    public function getFormattedActivityLengthAttribute()
    {
        if (empty($this->activity_length)) {
            return 'n/a';
        }

        return  number_format(($this->activity_length/1000), 2, '.', ',');
    }

    public function getFormattedActivityAverageSpeedAttribute()
    {
        if (empty($this->activity_length) || empty($this->activity_duration)) {
            return 'n/a';
        }

        return  number_format(($this->activity_length/1000)/($this->activity_duration/3600), 2, '.', ',');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
