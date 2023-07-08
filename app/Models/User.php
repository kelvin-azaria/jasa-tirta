<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'birth_date',
        'work_unit',
        'npp',
        'jrku_image_path',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'formattedUpdatedAt',
        'formattedCreatedAt'
    ];

    public function getFormattedUpdatedAtAttribute()
    {
        if (empty($this->updated_at)) {
            return 'n/a';
        }

        return $this->updated_at->format('d-m-Y H:i');
    }

    public function getFormattedCreatedAtAttribute()
    {
        if (empty($this->created_at)) {
            return 'n/a';
        }

        return $this->created_at->format('d-m-Y H:i');
    }

    public function image()
    {
        return Storage::url($this->jrku_image_path);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function bridge()
    {
        return $this->hasOne(Bridge::class);
    }

    public function pubgPlayer()
    {
        return $this->belongsTo(PubgPlayer::class);
    }
}
