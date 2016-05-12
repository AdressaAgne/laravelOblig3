<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;

class CategoryController extends Controller
{
    public function index($slug){
        return view('category.index', [
            'tag' => Tag::where('slug', $slug)->get()->first()
        ]);
    }
    
    public function main(){
        return view('category.main');
    }
}
