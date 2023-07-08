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
}
