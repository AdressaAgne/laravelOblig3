<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    public function items(){
        return \App\Item::all();
    }
    
    public function tags(){
        return \App\Tag::all();
    }
    
}
