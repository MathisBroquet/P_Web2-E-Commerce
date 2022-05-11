<?php

namespace App\Http\Controllers;

use App\Models\t_order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function GetAllOrderFromSpecificUser(){
        $orders = t_order::
        
        return view('pages/games', ['article' => $game]);
    }
}
