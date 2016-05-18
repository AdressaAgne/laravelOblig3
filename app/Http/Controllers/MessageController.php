<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;

class MessageController extends Controller
{
    
    // Require Authentication to view these routes
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return 'Inbox View';
    }
    
    public function sendTo($usermail){
        
        $user = User::where('email', $usermail)->get()->first();
        
        return $user;
    }
    
    public function send(){
        return 'Send View';
    }
}
