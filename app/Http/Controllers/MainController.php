<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Item;
use App\Tag;

class MainController extends Controller
{
    
    
//+--------+-----------+------------------+--------------+---------------------------------------------+------------+
//| Domain | Method    | URI              | Name         | Action                                      | Middleware |
//+--------+-----------+------------------+--------------+---------------------------------------------+------------+
//|        | GET|HEAD  | item             | item.index   | App\Http\Controllers\MainController@index   | web        |
//|        | POST      | item             | item.store   | App\Http\Controllers\MainController@store   | web        |
//|        | GET|HEAD  | item/create      | item.create  | App\Http\Controllers\MainController@create  | web        |
//|        | DELETE    | item/{item}      | item.destroy | App\Http\Controllers\MainController@destroy | web        |
//|        | PUT|PATCH | item/{item}      | item.update  | App\Http\Controllers\MainController@update  | web        |
//|        | GET|HEAD  | item/{item}      | item.show    | App\Http\Controllers\MainController@show    | web        |
//|        | GET|HEAD  | item/{item}/edit | item.edit    | App\Http\Controllers\MainController@edit    | web        |
//+--------+-----------+------------------+--------------+---------------------------------------------+------------+
    
    public function index(){
        return view('items.index', ['items' => Item::latest()->get()]);
    }
    
    // Create View
    public function create(){
        return view('items.create');
    }

    // Create Post
    public function store(){
        $data = Request::all();

        $item = Item::create([
            'header' => $data['title'],
            'content' => $data['content'],
            'slug'  => str_slug($data['title'], '-'),
            'image'  => $data['image']
        ]);
        
        $item->tags()->attach($data['tags']);
        
        return redirect('items');
    }
    
    public function destroy(){
        
    }
   
    public function update(){
        
    }
    
    // 1 item
    public function show($slug){
        
        return view('items.show', ['item' => item::where('slug', $slug)->get()->first()]);
    }
   
    public function edit(){
        
    }
    
}
