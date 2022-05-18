<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function accueil()
    {            
        var_dump(Auth::user())   ;     
        return view('pages.userConnected');
    } 
}
