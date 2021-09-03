<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contestant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ktm_image_path',
        'campus_name',
        'campus_province',
        'campus_city',
        'id_card_address',
        'residence_address',
        'phone',
        'birth_date',
        'instagram_video_url',
        'tiktok_url',
        'description',
    ];

    public function image()
    {
        return Storage::url($this->ktm_image_path);
    }
}
