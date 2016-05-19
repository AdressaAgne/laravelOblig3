<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        
    ];
    
    public function from(){
       return $this->belongsTo('App\User', 'from_user');
    }
    
    public function to(){
        return $this->belongsTo('App\User', 'to_user');
    }
    
    public function item(){
        return $this->hasOne('App\Item', 'id', 'item_id');
    }
}
