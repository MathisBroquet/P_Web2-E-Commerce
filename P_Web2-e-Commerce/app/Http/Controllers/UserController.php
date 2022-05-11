<?php

namespace App\Http\Controllers;

use App\Models\t_user;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class UserController extends Controller
{
    use BasicAuthenticatable;
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
        return view('pages/home');

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

        auth()->attempt([
            'name' =>request('name'),
            'password' => request('password')
        ]);

        return 'Traitement formulaire connexion';
    }

      /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->usePassword;
    }
}
