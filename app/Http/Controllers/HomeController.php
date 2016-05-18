<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Item as Item;

class HomeController extends Controller
{
    public function index(){
        return view('items.index', ['items' => Item::latest()->get()]);
    }
}
