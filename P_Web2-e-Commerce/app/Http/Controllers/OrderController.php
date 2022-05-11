<?php

namespace App\Http\Controllers;

use App\Models\t_basket;
use App\Models\t_order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    private function GetGamesFromBasket($idBasket){
        return $basket = t_basket::where('idBasket', $idBasket)->get();
    }

    public function GetAllOrderFromSpecificUser($idUser){
        $orders = t_order::where('FKUser', $idUser)->get();
        //$orders = GetGamesFromBasket($orders['FKBasket']);
        dd($orders);
        return view('pages/games', ['order' => $orders]);
    }
}
