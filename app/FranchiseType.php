<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FranchiseType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'franchise_type';

    protected $fillable = [
        'en_name', 'ar_name',
    ];
}
