<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class ProfileController extends Controller
{
    public function index($id){
        
        $profile = User::findOrFail($id);
        return View('profile.index', compact('profile'));
    }
}
