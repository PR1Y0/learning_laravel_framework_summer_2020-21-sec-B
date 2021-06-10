<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){                               //Request is a class
        
        if($req->uname == $req->password){
            return redirect('/home');
        }
    }
}
