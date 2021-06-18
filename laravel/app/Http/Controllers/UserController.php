<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = [
        //     [1, 'priyojit', 'email@email.com'],
        //     [2, 'abc', 'abc@email.com'],            //indexed array(2D)
        //     [3, 'xyz', 'xyz@email.com']
        // ];

        // $users = [
        //     ['id'=>1, 'name'=>'priyojit', 'email'=>'email@email.com'],
        //     ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],            //associative array
        //     ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        // ];
            $users = $this->getUserList();
        return view('user.list')->with('userList', $users);     //value passing through 'with' function, 'userList' variable defined here
    }

    public function details($id)
    {
        $users = $this->getUserList();
        $user ='';

        foreach($users as $u)
        {
            if($u['id'] == $id )
            $user = $u;
            break;
        }

        return view('user.details')->with('user',$user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function insert(Request $req)
    {
        $users = $this->getUserList();    //existing list

        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];    //new user list
        array_push($users, $user);        // existing list+new user list(merged)

        return view('user.list')->with('userList', $users);
    }

    public function edit($id){
        //find user by id from user list

        return view('user.edit')->with('user',$user);
    }

    public function update(Request $req, $id){
        //create new user array & add to list
        //new userlist

        return view('user.edit')->with('userList',$users);
    }

    public function delete($id){
        //confirm window
        //find user by id $user 

        return view('user.delete')->with('user',$user);
    }

    public function destroy($id){
        //remove user from list
        //create new list $ display 

        return view('user.list')->with('userList',$users);
    }



    public function getUserList()               //generic function
    {
        return [
            ['id'=>1, 'name'=>'priyojit', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],            //associative array
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }


}
