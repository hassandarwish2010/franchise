<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Table name
     *
     * @return string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'type', 'lang', 'type_id',
    ];
    public function cats() {
        return $this->belongsTo('App\Category', 'type_id', 'id');
    }
    public function franchises() {
        return $this->belongsTo('App\Franchise', 'type_id', 'id');
    }
}
