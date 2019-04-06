<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webview extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'details','lang','image','type'
    ];
}
