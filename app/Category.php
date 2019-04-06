<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name','image'
  ];

  /**
   * Get products for category
   *
   * @return response
   */

    public function images() {
        return $this->hasMany('App\Image', 'type_id', 'id');
    }
    public function franchises() {
        return $this->hasMany('App\Franchise','category_id','id');
    }
}
