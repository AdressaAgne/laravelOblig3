<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Tag;

class MainController extends Controller
{
    public function index(){
        
        $items = item::all();
        $tags = tag::all();
        
        return view('welcome', ['items' => $items, 'tags' => $tags]);
    }
}
