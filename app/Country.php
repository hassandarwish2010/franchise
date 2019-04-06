<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name',
  ];

    public function franchises() {
        return $this->hasMany('App\Franchise','country_id','id')
            ->select(['ar_name','en_name']);
    }
  /**
   * Get products for category
   *
   * @return response
   */

}
