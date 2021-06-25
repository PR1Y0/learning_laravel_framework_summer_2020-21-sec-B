<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){                               //Request is a class
        
        //SESSION SYNTAX:
        
        // //regular data:
        // $req->session()->put('uname', 'abc');                           //value stored by using put method,  'uname' is an idex name
        // $req->session()->put('password', '1234');                         
        
        // $uname = $req->session()->get('uname');                         //value read by get method
        // $alldata = $req->session()->all();

        // $req->session()->forget('password');                             //value deleted through forget(only one data) and flush(all data) method 
        // $req->session()->flush();
        // $uname = $req->session()->pull('uname');                         //cut the value by using pull method(first get method will be called than  forget method will be called)   
        // $req->session()->has('uname');                                   //return true false
        
        // //flash data(one time use):
        // // $req->session()->flash('cgpa', '4');
        // // $cgpa = $req->session()->get('cgpa');                             //will see cgpa 4

        // // $req->session()->keep('cgpa');                                    //can be able to see cgpa 4 before using [get method] 2nd time
        // // $cgpa = $req->session()->get('cgpa');                             //won't see cgpa 4 anymore because of flash method

        
        // $req->session()->flash('cgpa', '4');                                 //session 1
        // $req->session()->flash('dept', 'SE');                                //session 2
        // $cgpa = $req->session()->get('cgpa');                             
        // $req->session()->keep('cgpa');    

        // $req->session()->reflash();                                           //2 session are here and for each of them one time keep method will be called 

        

        if($req->uname == $req->password){
            
                $req->session()->put('uname', $req->uname);                           //Here $req->uname is stored in session where index is uname         
                return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invalid username or password' );
            return redirect('/login');
        }
        
    }
}
