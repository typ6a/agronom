<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ad';
    
    public $timestamps = false;
    
    protected $fillable = array(
        'site', 
        'url', 
        'title',
        'price',
        'priceOpt',
        'updated',
        'region',
        'text',
        'authorName',
        'authorPhone',
        'phone',//??????
        'type', // sell/buy
        'adSiteId',
        'added',
        'actualTo',
        'viewsToday',
        'viewsAll',
        'unicViewsToday',
        'unicViewsAll',
        'addedDeviceFrom',
        'processed',
    );
    
    public function category(){
        return $this->belongsTo('App\Models\Source');
    }
    
    public function images(){
        return $this->hasMany('App\Models\AdImage', 'ad_id');
    }
    
    public function properties(){
        return $this->hasMany('App\Models\AdToAdProperty', 'ad_id');
    }
}
