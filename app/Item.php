<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'header',
        'content',
        'image',
        'slug'
    ];
    
    
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
