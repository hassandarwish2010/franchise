<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'period';

    protected $fillable = [
        'name',
    ];
    public function franchise() {
        return $this->hasMany('App\Franchise', 'period_id', 'id');
    }
}
