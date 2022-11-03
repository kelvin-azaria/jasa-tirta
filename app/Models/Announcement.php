<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'title',
    'message',
    'type',
    'bg_color',
    'text_color',
    'active',
  ];
  protected $appends = ['formattedUpdatedAt'];
  public function getFormattedUpdatedAtAttribute()
  {
      return $this->updated_at->format('D, d M Y');
  }


}
