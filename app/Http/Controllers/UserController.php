<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return response()->json($users);
    }
    
    public function getUser($id){
 
        $user = User::find($id);
 
        return response()->json($user);
    }
 
    public function saveUser(Request $request){
 
        $user = User::create($request->all());
 
        return response()->json($user);
 
    }
 
    public function deleteUser($id){
        $user  = User::find($id);
 
        $user->delete();
 
        return response()->json('success');
    }
 
    public function updateUser(Request $request,$id){
        $user  = User::find($id);
 
        $user->name = $request->input('name');
        $user->email = $request->input('email');
 
        $user->save();
 
        return response()->json($user);
    }
}
