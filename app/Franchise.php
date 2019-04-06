<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'franchise';

    protected $fillable = [
       'user_id', 'details','category_id' ,'country_id','establish_date','period_id','existing_local_branch','undercost_local_branch',
        'existing_outside_branch','undercost_outside_branch','image','other_commission','other_commission_value',
        'franchise_type_id','name','franchise_type_value','owner_ship_commission','marketing_commission'
    ];

    public function franchise_market()
    {
        return $this->belongsToMany('App\Market','franchise_market');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country','country_id','id');

    }
    public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');

    }

    public function periods()
    {
        return $this->belongsTo('App\Period','period_id','id');
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'type_id', 'id');
    }

    public function ports(){
        return $this->hasMany('App\Port','franchise_id','id');
    }


}
