<?php

namespace App\Http\Controllers;

use App\Models\t_user;
use Illuminate\Http\Request;



class UserController extends Controller
{
    
    public function getAllUser()
    {
        $users = t_user::all();

        return view('pages/games');
    }

    public function addUser()
    {
        request()->validate(
            [
                'name' => ['required'],
                'password' => ['required', 'confirmed', 'min:8'],
                'password_confirmation' => ['required']
            ],
            [
                'password.confirmed' => 'Votre mot de passe et sa confirmation ne correspondent pas.'
            ]

        );

        $user = new t_user;
        $user->useLogin = request('name');
        $user->usePassword = bcrypt(request('password'));
        $user->useAdministrator = 0;
        $user->save();   
        return redirect('/games');

    }

    public function deleteUser(int $idGame)
    {
    }

    public function updateUser(int $idGame)
    {
    }

    public function connectUser()
    {
        request()->validate(
            [
                'name' => ['required'],
                'password' => ['required']
            ]
        );

        $results = auth()->attempt([
            'useLogin' =>request('name'),
            'password' => request('password')
        ]);

        if($results)
        {                    
            return redirect('/user');                        
        }
        return back()->withInput()->withErrors([
            'name' => "Votre nom d'utilisateur ou votre mot de passe est incorrect."
        ]);
    }     
}
