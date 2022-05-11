<?php

namespace App\Http\Controllers;

use App\Models\t_user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser(){
        $games = t_user::all();
        
        return view('pages/games', ['article' => $games]);
    } 
    
    public function addUser() {
        $user = new t_user;
        $user->useLogin = request('name');
        $user->usePassword = request('password');
        $user->useAdministrator = 0;
        $user->save();
        
    }

    public function deleteUser(int $idGame){

    }

    public function updateUser (int $idGame){

    } 
}
