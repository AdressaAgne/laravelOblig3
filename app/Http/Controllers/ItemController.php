<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Item as Item;
use App\Tag;
use Request;
use Auth;

class ItemController extends Controller
{
    
//    public function __construct(){
//        $this->middleware('auth');
//    }
//    
    public function index(){
        
        return view('items.index', ['items' => Item::latest()->get()]);
    }
    
    // Create View
    public function create(){
        $tagList = \App\Tag::lists('name', 'id');
        return view('items.create', compact('tagList'));
    }

    // Create Post
    public function store(){
        $data = Request::all();
        $data['slug'] = str_slug(uniqid($data['header']), '-');
        
        $item = Auth::user()->items()->save(new Item($data));
        
        $item->tags()->attach($data['tag_list']);
        
        return redirect('items');
    }
    
    public function destroy(Item $item){
        
        return $item;
    }
   
    
    
    // 1 item
    public function show($slug){
        return view('items.show', [
            'item' => item::where('slug', $slug)->get()->first()
        ]);
    }
    // Update Post
    public function update($slug){
        
        
        $item = item::where('slug', $slug)->get()->first();
        $data = Request::all();
        $item->update($data);
        
        $item->tags()->sync($data['tag_list']);
        
        return redirect('items');
    }
    
    
    // Update view
    public function edit($slug){
        
        
        $tagList = \App\Tag::lists('name', 'id');
        $item = item::where('slug', $slug)->get()->first();
        $selectedTags = $item->tags()->lists('tag_id')->toArray();
        
        //dd($selectedTags);
        
        return view('items.edit', compact('item', 'tagList', 'selectedTags'));
    }
    
}
