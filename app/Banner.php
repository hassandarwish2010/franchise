<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'ar_title', 'en_title', 'en_description', 'ar_description', 'image',
  ];
}
