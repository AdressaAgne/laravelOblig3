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
    
    public function getTagListAttribute(){
        $this->tags()->lists('id');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
