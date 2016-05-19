<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;
use App\Message as Message;

class MessageController extends Controller
{
    
    // Require Authentication to view these routes
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return View('message.index');
    }
    public function sent(){
        return View('message.sent');
    }
    
    public function sendTo($usermail){
        
        $user = User::where('email', $usermail)->get()->first();
        
        return View('message.send', compact('user'));
    }
    
    public function send(){
        return View('message.send');
    }
    public function message($msg){
        return $msg;
    }
}
