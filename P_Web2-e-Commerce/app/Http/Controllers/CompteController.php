<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function accueil()
    {            
        var_dump(auth()->check());
        if(auth()->guest())
        {
            return redirect('/connect')->withErrors(['name' => "Vous devez vous connecter pour accéder à cette page."]);           
        }     
        return view('pages.userConnected');
    } 
}
