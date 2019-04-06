<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'details',
  ];
}
