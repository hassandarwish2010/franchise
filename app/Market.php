<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name',
  ];

    public function market()
    {
        return $this->belongsToMany('App\Franchise');
    }

}
