<?php
/**
 * Created by PhpStorm.
 * User: hassan
 * Date: 3/27/19
 * Time: 12:30 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'model';

    protected $fillable = [
        'franchise_id','space','total_Investment'

    ];
    public function franchises(){
        return $this->belongsTo('App\Franchise');
    }
}