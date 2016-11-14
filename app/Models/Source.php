<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    
    public $timestamps = false;
    
    protected $table = 'source';
    
    protected $fillable = array(
        'parent_id', 
        'title', 
        'url',
        'processed'
    );
    
    public function ads(){
        return $this->hasMany('App\Models\Ad', 'source_id', 'id');
    }
}
