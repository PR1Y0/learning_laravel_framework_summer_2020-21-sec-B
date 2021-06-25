<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        //echo "Welcome to home";
        
                                //(1) passing values from controller;
        // $name = 'priyojit';
        // $id = '8456';                                           
        // return view('home.index', compact('name', 'id'));
    
        //return view('home.index', ['name'=>'priyojit', 'id'=>'8456']);   //(2) passing values through associative array
    
        // return view('home.index')
        //         ->with('name', 'priyojit')           //(3)passing values through 'with' function
        //         ->with('id', '8456');                //works like function chainging;       
    
        // if($req->session()->has('uname')){
            return view('home.index')
                    ->withName('admin')               //(4)passing values through 'with' function in camelCase Order
                    ->withId('03');
        // }else{
        //     $req->session()->flash('msg', 'invalid request');
        //     return redirect('/login');
        // }
        


    }
}
