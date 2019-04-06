<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise_market extends Model
{
	protected $table = "franchise_market";
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'franchise_id', 'market_id',
  ];
}
