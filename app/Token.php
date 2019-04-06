<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token', 'platform',
    ];

    /**
     * Get products for category
     *
     * @return response
     */


    public function users() {
        return $this->belongsTo('App\User');
    }
}
